<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">
    <base href="https://www.insiderone.in/app/">

    <!-- title and description-->
    <title>InsiderOne</title>
    <meta name="description" content="InsiderOne - Social sharing network HTML Template">

    <!-- css files -->
    <link rel="stylesheet" href="assets/css/tailwind.css?v=3.3">
    <link rel="stylesheet" href="assets/css/style.css?v=3.3">

    <!-- tailwindcss -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DVJ2H94MBC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DVJ2H94MBC');
    </script>


</head>

<body>
    <div id="wrapper">
        <!-- header -->
        <header
            class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

            <div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">

                <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">

                    <!-- left -->
                    <div class="flex items-center gap-1">

                        <!-- icon menu -->
                        <button uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"
                            class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group">
                            <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                            <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
                        </button>
                        <div id="logo">
                            <a href="https://www.insiderone.in/app/feeds">
                                <img src="assets/images/InsiderOne Black logo.png" alt="" class="w-36 md:block">
                                <!-- <img src="assets/images/logo-light.svg" alt="" class="dark:hidden">
        <img src="assets/images/logo-dark.svg" alt="" class="hidden dark:!block"> -->
                            </a>
                        </div>

                    </div>
                </div>
                <div class="flex-1 relative">

                    <div class="max-w-[1220px] mx-auto flex items-center">


                        <!-- header icons -->
                        <div
                            class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black mt-4.5">



                            <!-- profile -->
                            <div class="rounded-full relative bg-secondery cursor-pointer shrink-0">
                                <img src="assets/images/avatars/avatar-default.jpg" alt=""
                                    class="sm:w-9 sm:h-9 w-7 h-7 rounded-full shadow shrink-0">
                            </div>
                            <div class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                                uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <a href="https://www.insiderone.in/app/profile/thomas-hazarika-626b3bfm">
                                    <div class="p-4 py-5 flex items-center gap-4">
                                        <img src="assets/images/avatars/avatar-default.jpg" alt=""
                                            class="w-10 h-10 rounded-full shadow">
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-black">Thomas</h4>
                                            <div class="text-sm mt-1 text-blue-600 font-light dark:text-white/70">
                                                @thomas_1oj5n7dg</div>
                                        </div>
                                    </div>
                                </a>

                                <hr class="dark:border-gray-600/60">


                                <nav class="p-2 text-sm text-black font-normal dark:text-white">
                                    <!-- <a href="form-register.html">
        <div
            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
            Register
        </div>
    </a>
    <a href="form-login.html">
        <div
            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
            </svg>
            Login
        </div>
    </a> -->
                                    <!-- <a href="../host-event">
        <div
            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
            </svg>
            Host Event
        </div>
    </a> -->
                                    <!-- <a href="../profile/"> -->
                                    <a href="https://www.insiderone.in/app/settings/">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            Settings
                                        </div>
                                    </a>
                                    <!-- <button type="button" class="w-full">
        <div
            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            Night mode
            <span
                class="bg-slate-200/40 ml-auto p-0.5 rounded-full w-9 dark:hover:bg-white/20">
                <span
                    class="bg-white block h-4 relative rounded-full shadow-md w-2 w-4 dark:bg-blue-600"></span>
            </span>
        </div>
    </button> -->
                                    <hr class="-mx-2 my-2 dark:border-gray-600/60">
                                    <a href="https://www.insiderone.in/app/logout/">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            Log Out
                                        </div>
                                    </a>

                                </nav>
                            </div>

                            <div class="flex items-center gap-2 hidden">

                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-9 h-9 rounded-full shadow">

                                <div class="w-20 font-semibold text-gray-600"> Hamse </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- sidebar -->
        <div id="site__sidebar"
            class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

            <!-- sidebar inner -->
            <div
                class="p-2 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">

                <div class="pr-4" data-simplebar>

                    <nav id="side">
                        <ul>
                            <li>
                                <a href="https://www.insiderone.in/app/feeds">
                                    <img src="assets/images/icons/home-outline.svg" alt="feeds" class="w-6">
                                    <span> Feed </span>
                                </a>
                            </li>
                            <!-- <li >
            <a href="#" class="text-black">
                <img src="assets/images/icons/chatbubble-ellipses-outline.svg" alt="messages" class="w-6">
                <span> messages </span>
            </a>
        </li> -->
                            <li class='active' onclick="toggleDropdown(this)">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/icons/calendar-outline.svg" alt="events" class="w-6">
                                    <span> Events </span>
                                    <span id="event-arrow" class="arrow-down fas fa-caret-down "></span>
                                </a>
                                <ul class="event-show hidden text-black pl-10">
                                    <li onclick="event.stopPropagation()"><a
                                            href="https://www.insiderone.in/app/events">All Events</a></li>
                                    <li onclick="event.stopPropagation()"><a
                                            href="https://www.insiderone.in/app/registered-events">Registered Events</a>
                                    </li>
                                    <!-- <li><a href="#">Saved Events</a></li> -->
                                </ul>
                            </li>
                            <li onclick="toggleDropdown(this)">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/icons/golf-outline.svg" alt="host-events" class="w-6">
                                    <span>Host Events </span>
                                    <span id="host-events-arrow" class="arrow-down fas fa-caret-down "></span>
                                </a>
                                <ul class="host-events-show hidden text-black pl-10">
                                    <li onclick="event.stopPropagation()"><a
                                            href="https://www.insiderone.in/app/host-event">Host an Event</a></li>
                                    <li onclick="event.stopPropagation()"><a
                                            href="https://www.insiderone.in/app/hosted-events">My Hosted Events</a></li>
                                </ul>
                            </li>
                            <li onclick="toggleDropdown(this)">
                                <a href="https://www.insiderone.in/app/jobs-internships">
                                    <img src="assets/images/icons/briefcase-outline.svg" alt="jobs&internships"
                                        class="w-6">
                                    <span> Jobs & Internships </span>
                                    <!-- <span id="jobs-internships-arrow" class="arrow-down fas fa-caret-down "></span> -->
                                </a>
                                <!-- <ul class="jobs-internships-show hidden text-black pl-10">
                <li onclick="event.stopPropagation()"><a href="https://www.insiderone.in/app/jobs-internships">Find Jobs & Internships</a></li>
                <li onclick="event.stopPropagation()"><a href="https://www.insiderone.in/app/applied">Applied Jobs & Internships</a></li>
                <li onclick="event.stopPropagation()"><a href="javascript:void(0);">Bookmarked Jobs & Internships</a></li>
            </ul> -->
                            </li>
                            <!-- <li >
            <a href="../workshops">
                <img src="assets/images/icons/extension-puzzle-outline.svg" alt="workshops" class="w-6">
                <span>Workshops </span>
            </a>
        </li> -->
                            <li class="!hidden text-black " id="show__more">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/icons/ipc-outline.svg" alt="saved-posts" class="w-6">
                                    <span> IPC Index </span>
                                </a>
                            </li>
                            <li class="text-black " id="show__more">
                                <a href="/blog" target="_blank">
                                    <img src="assets/images/icons/blog-outline.svg" alt="blogs" class="w-6">
                                    <span> InsiderOne Blogs</span>
                                </a>
                            </li>
                            <!-- <li >
            <a href="#" class="text-black">
                <img src="assets/images/icons/trophy-outline.svg" alt="competitions" class="w-6">
                <span>Competitions </span>
            </a>
        </li> -->
                            <!-- <li class="!hidden text-black" id="show__more">
            <a href="#">
                <img src="assets/images/icons/settings-outline.svg" alt="myaccount" class="w-6">
                <span> My Account </span>
            </a>
        </li> -->
                            <li class="text-black" id="show__more">
                                <a href="https://www.insiderone.in/app/logout">
                                    <img src="assets/images/icons/log-out-outline.svg" alt="logout" class="w-6">
                                    <span> Logout </span>
                                </a>
                            </li>
                        </ul>

                        <!-- <button type="button"
        class="flex items-center gap-4 py-2 px-4 w-full font-medium text-sm text-black dark:text-white"
        uk-toggle="target: #show__more; cls: !hidden uk-animation-fade">
        <svg class="bg-gray-200 rounded-full w-6 h-6 dark:bg-slate-700" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span id="show__more"> See More </span>
        <span class="!hidden" id="show__more"> See Less </span>
    </button> -->

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            function toggleDropdown(element) {
                                // Toggle the dropdown visibility
                                $(element).find('.event-show').toggleClass('hidden');
                                $(element).find('#event-arrow').toggleClass('rotate-180');

                                $(element).find('.host-events-show').toggleClass('hidden');
                                $(element).find('#host-events-arrow').toggleClass('rotate-180');

                                $(element).find('.jobs-internships-show').toggleClass('hidden');
                                $(element).find('#jobs-internships-arrow').toggleClass('rotate-180');
                            }
                        </script>

                    </nav>

                    <!--LEFT PAGES-->
                    <!--
<nav id="side"
    class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
    <div class="px-3 pb-2 text-sm font-medium">
        <div class="text-black dark:text-white">Pages</div>
    </div>

    <ul class="mt-2 -space-y-2" uk-nav="multiple: true">

        <li>
            <a href="setting.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span> Settings </span>
            </a>
        </li>

        <li>
            <a href="form-login.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
                <span> Authentication </span>
            </a>
        </li>

    </ul>

</nav>


<div class="text-xs font-medium flex flex-wrap gap-2 gap-y-0.5 p-2 mt-2">
    <a href="#" class="hover:underline">About</a>
    <a href="#" class="hover:underline">Contact Us </a>

</div>
-->
                </div>

            </div>
            <!-- sidebar overly -->
            <div id="site__sidebar__overly"
                class="absolute top-0 left-0 z-20 w-screen h-screen xl:hidden backdrop-blur-sm"
                uk-toggle="target: #site__sidebar ; cls :!-translate-x-0">
            </div>
        </div>

        <!-- News feed starts from here -->

        <style>
            /* Style the AI-generated HTML tags */
            .ai-content h3 {
                font-size: 0.875rem;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                color: #111827;
                margin-top: 1.5rem;
                margin-bottom: 0.5rem;
            }

            .ai-content ul {
                list-style-type: disc;
                margin-left: 1.25rem;
                margin-bottom: 1rem;
            }

            .ai-content li {
                margin-bottom: 0.25rem;
            }

            .ai-content p {
                margin-bottom: 1rem;
            }

            #sync-loader {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.9);
                z-index: 9999;
                text-align: center;
                padding-top: 20%;
            }

            .spinner {
                border: 4px solid #f3f3f3;
                border-top: 4px solid #3498db;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 2s linear infinite;
                display: inline-block;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            #test {
                /* Mobile View*/
                column-count: 1;
                column-gap: 3rem;
                display: block;
            }

            #test>*+* {
                margin-top: 3rem;
            }

            /* Responsive: Desktop */
            @media (min-width: 800px) {
                #test {
                    column-count: 1;
                }
            }

            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .no-scrollbar {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }

            @media (max-width: 1023px) {
                #sidebar {
                    display: none;
                }
            }

            #go-back:hover {
                color: #EBB400 !important
            }

            #full-article {
                background-color: #EBB400;
            }
        </style>


        <?php



            require_once 'vendor/autoload.php';

            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
            $dotenv->load();


            // Database Connection
            $db = new mysqli(
                $_ENV['DB_HOST'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                $_ENV['DB_NAME'],
                $_ENV['DB_PORT']
            );


        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        $row = null;
        if ($id > 0) {
            
            $stmt = $db->prepare("SELECT * FROM articles WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
        }
        ?>

        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <!-- timeline -->
            <div class="lg:flex 2xl:gap-16 gap-12 max-w-[900px] mx-auto" id="js-oversized">



                <div id="test" class="columns-1 md:columns-2 gap-12 space-y-12">

                    <div class="mb-8">
                        <a href="http://insiderone_news.test/index.php" id="go-back" class="inline-flex items-center gap-2 text-gray-500 transition-colors font-bold text-sm uppercase tracking-widest">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            Go Back to News
                        </a>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-3">News Details</h2>
                        <div style="background-color: #EBB400;" class="h-1 w-full rounded-full"></div>
                    </div>




                    <!-- News Details -->
                    <?php if ($row): ?>
                        <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm mb-10">

                            <?php if (!empty($row['image_url'])): ?>
                                <div class="relative overflow-hidden bg-gray-200">
                                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>"
                                        class="object-cover w-full h-auto"
                                        style="max-height: 250px;"
                                        alt="News Image">
                                </div>
                            <?php endif; ?>

                            <div class="p-8 md:p-12">
                                <div class="flex items-center justify-between mb-6">
                                    <span class="text-blue-600 font-bold uppercase tracking-widest text-xs">
                                        <?php echo htmlspecialchars($row['topic']); ?>
                                    </span>
                                    <span class="text-gray-400 font-medium text-xs">
                                        <?php echo date('M d, Y', strtotime($row['created_at'])); ?>
                                    </span>
                                </div>

                                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-8 leading-tight">
                                    <?php echo htmlspecialchars($row['title']); ?>
                                </h1>

                                <div class="ai-content text-gray-700 text-sm leading-relaxed text-justify mb-10">
                                    <?php echo $row['summary']; ?>
                                </div>

                                <div class="pt-8 border-t border-gray-50 flex justify-between items-center">
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Original Source</span>
                                    <a id="full-article" href="<?php echo htmlspecialchars($row['source_url']); ?>" target="_blank"
                                        class="text-white p-3 rounded-full text-xs font-bold transition-all">
                                        Read Full Article
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-24 bg-white rounded-2xl border border-dashed border-gray-200">
                            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Content not found!</h2>
                            <a href="index.php" class="text-blue-600 font-bold underline">Return to Feed</a>
                        </div>
                    <?php endif; ?>
                </div>




                <!-- sidebar -->
                <div id="sidebar" class="flex-1">

                    <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6">



                        <div class="2xl:w-[380px] lg:w-[330px] w-full">

                            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                                uk-sticky="media: 1024; end: #js-oversized; offset: 80">


                                <div class="box p-5 px-6 pb-8">

                                    <div class="flex items-baseline justify-between text-black dark:text-white">
                                        <h3 class="font-bold text-base"> Trending News</h3>
                                    </div>

                                    <div class="mt-4 space-y-4">
                                        <?php
                                        $trending_query = "SELECT title, created_at, source_url, topic FROM articles ORDER BY created_at DESC LIMIT 5";
                                        $trending_result = $db->query($trending_query);

                                        if ($trending_result && $trending_result->num_rows > 0):
                                            while ($news = $trending_result->fetch_assoc()):
                                        ?>
                                                <div>
                                                    <a href="<?php echo htmlspecialchars($news['source_url']); ?>" target="_blank">
                                                        <h4 class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">
                                                            <?php echo htmlspecialchars($news['title']); ?>
                                                        </h4>
                                                    </a>
                                                    <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                                        <span class="text-blue-600 uppercase font-bold" style="font-size: 9px;">
                                                            <?php echo htmlspecialchars($news['topic']); ?>
                                                        </span>
                                                        <div>•</div>
                                                        <div><?php echo date('M d, Y', strtotime($news['created_at'])); ?></div>
                                                    </div>
                                                </div>
                                            <?php
                                            endwhile;
                                        else:
                                            ?>
                                            <p class="text-xs text-gray-400">No trending news available.</p>
                                        <?php endif; ?>
                                    </div>

                                </div>

                            </div>

                        </div>




                    </div>

                </div><br><br><br>
            </div>

        </main>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            <?php if ($needs_sync): ?>
                // Show the loading screen
                $('#sync-loader').fadeIn();

                // Trigger fetch_news.php
                $.ajax({
                    url: 'fetch_news.php',
                    type: 'GET',
                    success: function(data) {
                        console.log("Sync Complete");
                        location.reload(); // Refresh to show new news
                    },
                    error: function() {
                        setTimeout(function() {
                            $('#sync-loader').fadeOut();
                        }, 2000);
                    }
                });
            <?php endif; ?>
        });

        // Filter Section
        function filterCategory(category, element) {

            // Update active button styles
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-blue-50', 'text-blue-600', 'border-blue-600');
                btn.classList.add('text-gray-500', 'border-gray-200');
            });

            element.classList.add('active', 'bg-blue-50', 'text-blue-600', 'border-blue-600');
            element.classList.remove('text-gray-500', 'border-gray-200');

            // Filter logic
            const articles = document.querySelectorAll('[data-topic]');

            articles.forEach(article => {
                if (category === 'All' || article.dataset.topic === category) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }

        function scrollCategories(distance) {
            const container = document.getElementById('categoryBar');
            container.scrollBy({
                left: distance,
                behavior: 'smooth'
            });
        }
    </script>

    <!--bottom navbar-->
    <div class="sticky-tab">
        <a href="https://www.insiderone.in/app/feeds/" class="button-icon">
            <img src="assets/images/icons/home-outline.svg" alt="home">
        </a>

        <a href="https://www.insiderone.in/app/jobs-internships/" class="button-icon">
            <img src="assets/images/icons/briefcase-outline.svg" alt="promote">
        </a>

        <a href="https://www.insiderone.in/app/news/" class="button-icon">
            <img src="assets/images/icons/newspaper-filled.svg" alt="search">
        </a>


        <a href="https://www.insiderone.in/app/events/" class="button-icon">
            <img src="assets/images/icons/calendar-outline.svg" alt="event">
        </a>

        <a href="https://www.insiderone.in/app/profile/thomas-hazarika-626b3bfm" class="button-icon">
            <img src="assets/images/icons/person-outline.svg" alt="profile">
        </a>
    </div>

    <!-- Javascript  -->
    <script src="assets/js/uikit.min.js?v=3.3"></script>
    <script src="assets/js/simplebar.js?v=3.3"></script>
    <script src="assets/js/script.js?v=3.3"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>