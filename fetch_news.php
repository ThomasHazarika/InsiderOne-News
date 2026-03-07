<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");



set_time_limit(1500);
ignore_user_abort(true);

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-cache');
ob_implicit_flush(true);
if (ob_get_level() > 0)
    ob_end_flush();

require_once 'vendor/autoload.php';

$db = new mysqli(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME'],
    $_ENV['DB_PORT']
);

$apiKey = $_ENV['API_KEY'];

// 2. Fresh Start logic
// $db->query("DELETE FROM articles");
// $db->query("ALTER TABLE articles AUTO_INCREMENT = 1");


$topics = [
    'Career' => 'https://news.google.com/rss/search?q=career+jobs&hl=en-IN&gl=IN&ceid=IN:en',
    'Technology' => 'https://news.google.com/rss/headlines/section/topic/TECHNOLOGY?hl=en-IN&gl=IN&ceid=IN:en',
    'Space' => 'https://news.google.com/rss/search?q=space+exploration&hl=en-IN&gl=IN&ceid=IN:en',
    'Science' => 'https://news.google.com/rss/headlines/section/topic/SCIENCE?hl=en-IN&gl=IN&ceid=IN:en',
    'AI' => 'https://news.google.com/rss/search?q=artificial+intelligence&hl=en-IN&gl=IN&ceid=IN:en',
    'Medical' => 'https://news.google.com/rss/headlines/section/topic/HEALTH?hl=en-IN&gl=IN&ceid=IN:en'
];

echo "<strong>InsiderOne: Ultimate Sync Started</strong><br><br>";

foreach ($topics as $topicName => $rssUrl) {
    $feed = new SimplePie();
    $feed->set_feed_url($rssUrl);
    $feed->enable_cache(false);
    $feed->init();

    $item = $feed->get_item(0);
    if (!$item)
        continue;

    $title = $item->get_title();
    $link = $item->get_permalink();

    // DUPLICATE CHECK
    $hash = hash('sha256', $link);
    $check_stmt = $db->prepare("SELECT id FROM articles WHERE source_url_hash = ?");
    $check_stmt->bind_param("s", $hash);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        echo "<strong>$topicName</strong>: <span style='color:blue;'>SKIPPED (Already exists)</span><br>";
        continue;
    }


    $snippet = strip_tags($item->get_description());

    echo "Processing <strong>$topicName</strong>... ";

    $prompt = "Act as a professional news analyst for InsiderOne. Summarize this story in exactly 200 words: 
           Title: $title
           Source Context: $snippet

           STRICT FORMATTING RULES:
           1. Start with '<h3>QUICK OVERVIEW</h3>' followed by a 1-sentence BOLD summary.
           2. Create a '<h3>KEY DEVELOPMENTS</h3>' section using a <ul> list with 3-4 <li> bullet points.
           3. Create a '<h3>THE IMPACT</h3>' section with one concise paragraph explaining why this matters.
           4. Use <strong> tags for important names, dates, or technical terms.
           5. DO NOT use long blocks of text. Keep it sharp and attractive.
           6. DO NOT use Markdown (no asterisks like **).";


    $data = ["contents" => [["parts" => [["text" => $prompt]]]]];

    $ch = curl_init("https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=" . $apiKey);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $responseRaw = curl_exec($ch);
    $result = json_decode($responseRaw, true);

    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        $summary = $result['candidates'][0]['content']['parts'][0]['text'];


        $categoryImages = [
            'Career'     => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=800&q=80',
            'Technology' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
            'Space'      => 'https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?auto=format&fit=crop&w=800&q=80',
            'Science'    => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=800&q=80',
            'AI'         => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80',
            'Medical'    => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=800&q=80'
        ];

        // Select the image based on the category name
        $imageUrl = isset($categoryImages[$topicName]) ? $categoryImages[$topicName] : $categoryImages['Technology'];

        $stmt = $db->prepare("INSERT INTO articles (topic, image_url, title, summary, source_url, source_url_hash) VALUES (?, ?, ?, ?, ?, ?)");
        $hash = hash('sha256', $link);
        $stmt->bind_param("ssssss", $topicName, $imageUrl, $title, $summary, $link, $hash);

        if ($stmt->execute()) {
            echo "<span style='color:green;'>SUCCESS</span><br>";
        } else {
            echo "<span style='color:orange;'>DB Error: " . $stmt->error . "</span><br>";
        }

        echo str_pad('', 4096);
        ob_flush();
        flush();

        sleep(25);
    } else {
        echo "<span style='color:red;'>FAILED</span><br>";
        if (isset($result['error'])) {
            echo "<div style='background:#fee; padding:8px; border:1px solid red; font-size:11px;'>";
            echo "<strong>API Error:</strong> " . $result['error']['message'];
            echo "</div>";
        }
        sleep(25);
    }
}

echo "<h3>All Categories Updated!</h3>";

// DATABASE CLEANUP LOGIC
echo "<br><strong>Cleaning up old data...</strong> ";

// Delete articles older than 30 days
$cleanup_query = "DELETE FROM articles WHERE created_at < DATE_SUB(NOW(), INTERVAL 30 DAY)";

if ($db->query($cleanup_query)) {
    $deleted_rows = $db->affected_rows;
    echo "<span style='color:blue;'>Removed $deleted_rows expired articles.</span><br>";
} else {
    echo "<span style='color:red;'>Cleanup Error: " . $db->error . "</span><br>";
}

echo "<h3>All Categories Updated and Archive Cleaned!</h3>";
