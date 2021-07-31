<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BookStore - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Logo.png') }}">
    <meta name="author" content="Blackburn">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200">
    <section class="w-full px-3 antialiased bg-gray-200 lg:px-6">
        <div x-data="{ showMenu: false }">
            <div class="relative flex items-center justify-between w-full h-20 px-8">

                <a href="/"
                    class="relative flex items-center h-full pr-6 text-lg font-extrabold text-black">BookStore<span
                        class="text-yellow-700">.</span></a>
                <nav class="flex-col items-center justify-center hidden h-full space-y-3 bg-white md:justify-end md:bg-transparent md:space-x-5 md:space-y-0 md:relative md:flex md:flex-row"
                    :class="{'flex fixed top-0 left-0 w-full z-40': showMenu, 'hidden': !showMenu }">
                    <a href="/"
                        class="relative text-lg font-medium tracking-wide text-yellow-700 transition duration-150 ease-out md:text-sm md:text-black"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">Home</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-yellow-700"
                                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"
                                style="display: none;"></span>
                        </span>
                    </a>

                    <a href="/about"
                        class="relative text-lg font-medium tracking-wide text-yellow-700 transition duration-150 ease-out md:text-black md:text-sm"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">About</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-yellow-700"
                                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"
                                style="display: none;"></span>
                        </span>
                    </a>
                    <a href="https://blackburn-co.com/contactus?"
                        class="relative text-lg font-medium tracking-wide text-yellow-700 transition duration-150 ease-out md:text-sm md:text-black"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">Contact</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-yellow-700"
                                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"
                                style="display: none;"></span>
                        </span>
                    </a>

                </nav>

                <!-- Mobile Nav  -->
                <nav class="fixed top-0 right-0 z-30 z-50 flex w-10 h-10 mt-4 mr-4 md:hidden">
                    <button @click="showMenu = !showMenu"
                        class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-black hover:bg-opacity-25 focus:outline-none">
                        <svg class="w-5 h-5 text-gray-800 fill-current" x-show="!showMenu" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-gray-500" x-show="showMenu" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </nav>
                <!-- End Mobile Nav -->
            </div>

        </div>
    </section>

    @yield('content')
    <section class="py-10">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col items-center md:flex-row md:justify-between">
                <a href="/"
                    class="relative flex items-center h-full pr-6 text-lg font-extrabold text-black">BookStore<span
                        class="text-yellow-700">.</span></a>


                <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4"> <a href="https://www.facebook.com/Balckburn.design"
                        class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z">
                            </path>
                        </svg> </a>  <a href="https://www.instagram.com/blackburn_designs/" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current"
                            width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <circle cx="12.145" cy="3.892" r="1"></circle>
                                <path
                                    d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z">
                                </path>
                                <path
                                    d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z">
                                </path>
                            </g>
                        </svg> </a> </div>
            </div>
            <div class="flex flex-col justify-between text-center md:flex-row">
                <p class="order-last text-sm leading-tight text-gray-500 md:order-first"> Created by <a
                        href="https://blackburn-co.com" class="text-black">Blackburn</a>. Built with ❤️ by our team.
                </p>
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                    <li> <a href="/" class="px-4 text-gray-500 hover:text-black">Home</a> </li>
                    <li> <a href="/about" class="px-4 text-gray-500 hover:text-black">About</a> </li>
                    <li> <a href="https://blackburn-co.com/contactus?"
                            class="px-4 text-gray-500 hover:text-black">Contact</a></li>
                </ul>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
</body>

</html>
