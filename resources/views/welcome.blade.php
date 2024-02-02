<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased dark:bg-gray-900 selection:bg-red-500">
    <div class="flex bg-gray-100 sm:justify-center sm:items-center dark:bg-gray-900 selection:text-white">
        <div class="z-10 flex items-center p-6 shrink-0 sm:fixed sm:top-0 sm:left-0 ">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
            </a>
        </div>
        @if (Route::has('login'))
            <div class="z-10 p-6 sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>
                @endauth
            </div>
        @endif
    </div>
    <div class="w-full">
        <div class="flex bg-gray-100 dark:bg-gray-900 dark:text-white h-[300px] sm:h-[600px] my-10 sm:my-48">
            <div class="flex items-start px-8 text-center sm:items-center lg:text-left md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-2xl font-semibold text-white md:text-5xl">Start your academic journey</h2>
                    <p class="mt-10 text-sm text-gray-400 md:text-base">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus
                        odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!
                    </p>
                    <div class="flex justify-center mt-6 lg:justify-start">
                        <a class="px-4 py-3 text-xs font-semibold text-gray-200 bg-gray-800 rounded hover:bg-gray-700"
                            href="{{ route('login') }}">Get Started</a>
                        <a class="px-4 py-3 mx-4 text-xs font-semibold text-gray-500 bg-gray-300 rounded hover:bg-gray-400"
                            href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <img src="{{ asset('images/background.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <footer class="w-full text-gray-700 bg-gray-100 border-t-2 dark:bg-gray-900 body-font border-t-neutral-500">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-300 title-font md:justify-start">
                    <p class="text-xl italic">Laravel School</p>
                </a>
                <p class="mt-2 text-sm text-gray-400">Learn while teaching!</p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-400 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-400 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-400 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-400 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-500 uppercase title-font">About
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">School</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Careers</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">News</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-500 uppercase title-font">Support
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact Support</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Help Resources</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Release Updates</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-500 uppercase title-font">Platform
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Terms &amp; Privacy</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Pricing</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">FAQ</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-500 uppercase title-font">Contact
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Send a Message</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">Request a Quote</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-400 cursor-pointer hover:text-gray-500">+123-456-7890</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-300 dark:bg-gray-800">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-gray-700 capitalize xl:text-center">© 2020 All rights reserved </p>
            </div>
        </div>
    </footer>
</body>

</html>
