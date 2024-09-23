<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EBook</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../tailwind/tailwind.config.js" />
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/DGLogo.png') }}">
    <!-- Start Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <style>
        .light-color-gradient {
            position: relative;
            background-color: rgb(240, 237, 232);
            background-image: linear-gradient(54deg,
                    rgba(255, 220, 25, 0.25),
                    rgba(198, 168, 1, 0) 28%),
                linear-gradient(241deg,
                    rgba(255, 223, 0, 0.25),
                    rgba(216, 190, 15, 0) 36%);
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .slide-in {
            animation: slideIn 1s ease-in-out;
        }

        .button-hover:hover {
            animation: buttonHover 0.3s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes buttonHover {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>

<body style="font-family: Poppins, Arial, Helvetica, sans-serif">
    <!-- Start Navbar -->
    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/logo/DGLogo.png') }}" class="h-8" alt="" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EBook</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="items-center flex justify-between gap-2 w-full md:w-auto md:order-1">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-search h-full">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                    <button
                        class="border p-2 rounded-full bg-[#FFC30E] items-center justify-center text-center hover:bg-[#e9ba2e] transition cursor-pointer">
                        Your Cart
                    </button>
                </div>

                <div>
                    <button type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky"
                id="mega-menu-full">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 underline underline-offset-8 text-gray-900 p-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:bg-transparent decoration-[#ffc30e]"
                            aria-current="page">Home</a>
                    </li>
                    <!-- Book -->
                    <li>
                        <button id="mega-menu-full-dropdown-button" //data-collapse-toggle="mega-menu-full-dropdown"
                            id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                            class="flex
                            items-center justify-between w-full py-2 px-3
                            text-gray-900 rounded md:w-auto hover:bg-gray-100
                            md:hover:bg-transparent md:border-0 md:p-0
                            dark:text-white dark:hover:bg-gray-700
                            hover:underline underline-offset-8
                            md:dark:hover:bg-transparent dark:border-gray-700
                            decoration-[#ffc30e]">
                            Books
                            <svg class="w-[8px] h-[8px] ms-2.5 translate-y-0.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                    </li>
                    <!-- End Book -->

                    <!-- Education -->
                    <li>
                        <button id="mega-menu-full-dropdown-button" //data-collapse-toggle="mega-menu-full-dropdown"
                            id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2"
                            data-dropdown-trigger="hover"
                            class="flex
                            items-center justify-between w-full py-2 px-3
                            text-gray-900 rounded md:w-auto hover:bg-gray-100
                            md:hover:bg-transparent md:border-0 md:p-0
                            dark:text-white dark:hover:bg-gray-700
                            md:dark:hover:bg-transparent hover:underline
                            underline-offset-8 dark:border-gray-700
                            decoration-[#ffc30e]">
                            Education
                            <svg class="w-[8px] h-[8px] ms-2.5 translate-y-0.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                    </li>
                    <!-- End Education -->

                    <li>
                        <a href="#"
                            class="block hover:underline underline-offset-8 decoration-[#ffc30e]py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:bg-transparent decoration-[#ffc30e]">Love
                            Story</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block hover:underline underline-offset-8 decoration-[#ffc30e]py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:bg-transparent decoration-[#ffc30e]">Biography</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block hover:underline underline-offset-8 decoration-[#ffc30e]py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:bg-transparent decoration-[#ffc30e]">Kids
                            Book</a>
                    </li>
                    <li>
                        <a href="{{ url('/about_us') }}"
                            class="block hover:underline underline-offset-8 decoration-[#ffc30e]py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:bg-transparent decoration-[#ffc30e]">About
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Dropdown 1 -->
        <div id="dropdownHover" class="hidden mx-auto p-4">
            <div aria-labelledby="dropdownHoverButton"
                class="grid w-full px-4 py-2 mx-auto bg-gray-50 border gap-20 shadow-md rounded-md text-gray-900 dark:text-white sm:grid-cols-3 md:px-6">
                <!-- Food Recips -->
                <ul class="">
                    <li>
                        <a href="#" class="block p-3 rounded-lg space-y-3 dark:hover:bg-gray-700">
                            <div class="font-semibold">Food Recipe</div>
                            <p class="hover:underline">Fairytale</p>
                            <p class="hover:underline">Fantasy</p>
                            <p class="hover:underline">Graphic novel</p>
                            <p class="hover:underline">
                                Historical fiction
                            </p>
                            <p class="hover:underline">Horror</p>
                            <p class="hover:underline">Motivations</p>
                        </a>
                    </li>
                </ul>
                <!-- End Food Recips -->

                <!-- Kids Story -->
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg space-y-3 dark:hover:bg-gray-700">
                            <div class="font-semibold">Kids Story</div>
                            <p class="hover:underline">Art/architecture</p>
                            <p class="hover:underline">Autobiography</p>
                            <p class="hover:underline">Biography</p>
                            <p class="hover:underline">Cookbook</p>
                            <p class="hover:underline">Corruption</p>
                            <p class="hover:underline">Diary</p>
                        </a>
                    </li>
                </ul>
                <!-- End Kids Story -->
                <!-- Education -->
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg space-y-3 dark:hover:bg-gray-700">
                            <div class="font-semibold">Kids Story</div>
                            <p class="hover:underline">Art/architecture</p>
                            <p class="hover:underline">Autobiography</p>
                            <p class="hover:underline">Biography</p>
                            <p class="hover:underline">Cookbook</p>
                            <p class="hover:underline">Corruption</p>
                            <p class="hover:underline">Diary</p>
                        </a>
                    </li>
                </ul>
                <!-- End Education -->
            </div>
        </div>
        <!-- End Dropdown -->
        <!-- Dropdown 2 -->
        <div id="dropdownHover2" class="hidden mx-auto p-4">
            <div aria-labelledby="dropdownHoverButton2"
                class="grid w-full px-4 py-2 space-x-6 mx-auto bg-gray-50 border shadow-md rounded-md text-gray-900 dark:text-white sm:grid-cols-5 md:px-6">
                <!-- Item 1 -->
                <div class="rounded-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <a href="viewPage.html">
                            <img class="mx-auto h-[200px] duration-300 hover:scale-105 aspect-[6/9] rounded-lg"
                                src="{{ asset('assets/images/06-342x369.jpg') }}" alt="" />
                        </a>
                        <p class="text-[13px] w-48 text-center line-clamp-1">
                            Beautiful Things’ A Memoir Beautiful
                        </p>
                        <p class="text-[13px] text-center text-gray-400">
                            $10.00
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="rounded-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <a href="viewPage.html">
                            <img class="mx-auto h-[200px] duration-300 hover:scale-105 aspect-[6/9] rounded-lg"
                                src="{{ asset('assets/images/10-342x369.jpg') }}" alt="" />
                        </a>
                        <p class="text-[13px] w-48 text-center line-clamp-1">
                            Beautiful Things’ A Memoir Beautiful
                        </p>
                        <p class="text-[13px] text-center text-gray-400">
                            $10.00
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="rounded-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <a href="viewPage.html">
                            <img class="mx-auto h-[200px] duration-300 hover:scale-105 aspect-[6/9] rounded-lg"
                                src="{{ asset('assets/images/06-342x369.jpg') }}" alt="" />
                        </a>
                        <p class="text-[13px] w-48 text-center line-clamp-1">
                            Beautiful Things’ A Memoir Beautiful
                        </p>
                        <p class="text-[13px] text-center text-gray-400">
                            $10.00
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="rounded-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <a href="viewPage.html">
                            <img class="mx-auto h-[200px] duration-300 hover:scale-105 aspect-[6/9] rounded-lg"
                                src="{{ asset('assets/images/06-342x369.jpg') }}" alt="" />
                        </a>
                        <p class="text-[13px] w-48 text-center line-clamp-1">
                            Beautiful Things’ A Memoir Beautiful
                        </p>
                        <p class="text-[13px] text-center text-gray-400">
                            $10.00
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="rounded-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="space-y-2">
                        <a href="viewPage.html">
                            <img class="mx-auto h-[200px] duration-300 hover:scale-105 aspect-[6/9] rounded-lg"
                                src="{{ asset('assets/images/06-342x369.jpg') }}" alt="" />
                        </a>
                        <p class="text-[13px] w-48 text-center line-clamp-1">
                            Beautiful Things’ A Memoir Beautiful
                        </p>
                        <p class="text-[13px] text-center text-gray-400">
                            $10.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Dropdown -->
    </nav>
    <!-- Start Drawer -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
            Menu
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Home</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 21">
                            <rect width="8" height="18" x="3" y="3" rx="1" />
                            <path d="M7 3v18" />
                            <path
                                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                        </svg>

                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Books</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="viewPage.html"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Education</a>
                        </li>
                        <li>
                            <a href="viewPage.html"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Biography</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Love
                                Story</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kids
                                Book</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./aboutUs.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">About Us</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Drawer -->
    @yield('content')

    <!-- Start Footer -->
    <footer class="bg-slate-100 p-4 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between grid grid-cols-2 gap-5">
                <div class="md:mb-0 grid items-center">
                    <a href="#" class="flex items-center justify-center space-x-1 rtl:space-x-reverse">
                        <img src="{{ asset('assets/logo/DGLogo.png') }}" class="overflow-hidden h-[60px]" />
                        <img src="{{ asset('assets/logo/textLogo.png') }}" class="overflow-hidden h-[50px]" />
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-medium">Store Information</h3>
                    <div class="text-sm space-y-2">
                        <p class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                <path
                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            123 Street, Anytown, USA.
                        </p>
                        <p class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>(+00) 123-456-789
                        </p>
                        <p>Email us:demo@example.com</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h2 class="mb-3 text-sm font-semibold uppercase dark:text-white lg:text-center">
                        Social Link
                    </h2>

                    <div class="flex flex-wrap gap-2 mb-4 lg:justify-center sm:mt-0">
                        <a href="#" class="hover:text-gray-900 dark:hover:text-white">
                            <img class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                                src="{{ asset('assets/images/youtube.png') }}" alt="Facebook page" />
                            <span class="sr-only">Youtube</span>
                        </a>
                        <a href="#" class="hover:text-gray-900 dark:hover:text-white">
                            <img class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                                src="{{ asset('assets/images/telegram.png') }}" alt="Facebook page" />
                            <span class="sr-only">Telegram</span>
                        </a>
                        <a href="#" class="hover:text-gray-900 dark:hover:text-white">
                            <img class="h-[55px] aspect-square object-contain rounded-full border border-white hover:scale-110 transition-all"
                                src="{{ asset('assets/images/facebook.png') }}" alt="Facebook page" />
                            <span class="sr-only">WWW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 max-w-screen-xl  border-gray-700 mx-auto dark:border-gray-700 lg:my-6">
            <hr class="my-3   border-gray-700  dark:border-gray-700 lg:my-6" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-700 sm:text-center dark:text-gray-400">© 2024 . All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

</html>
