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
    <section>
        <nav class="bg-white fixed w-full z-40 top-0 start-0 shadow">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between p-5">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('assets/logo/DGLogo.png') }}" class="h-8" alt="" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EBook</span>
                    </a>
                </div>
                <div class="flex items-center ">
                    <!-- Menu for larger screens -->
                    <ul class="hidden lg:flex gap-8 text-[17px] 2xl:text-[18px] items-center ">
                        <li>
                            <a href="{{ url('/') }}"
                                class="{{ request()->is('/') ? ' decoration-[#ffc30e] underline underline-offset-8 text-black' : 'decoration-[#ffc30e] hover:underline underline-offset-8 text-black' }}">
                                Home</a>
                        </li>
                        <li>
                            <button id="mega-menu-full-dropdown-button" //data-collapse-toggle="mega-menu-full-dropdown"
                                id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                                data-dropdown-trigger="hover"
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
                        </li>
                        <li>
                            <a href="{{ url('/book') }}"
                                class="{{ request()->is('book') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">Biography</a>
                        </li>
                        <li>
                            <a href="{{ url('/kidsbook') }}"
                                class="{{ request()->is('kidsbook') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">Kid
                                Books</a>
                        </li>
                        <li>
                            <a href="{{ url('/about_us') }}"
                                class="{{ request()->is('about_us') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">About
                                Us</a>
                        </li>
                    </ul>
                    <!-- Chat Button - visible on all screen sizes -->
                    <section class="mr-2">
                        <div class="items-center md:ml-8  flex justify-between gap-2 w-full md:w-auto md:order-1">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search h-full">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </button>
                            <button
                                class="border p-2 rounded-full bg-[#ffca2c] items-center justify-center text-center hover:bg-[#e9ba2e] transition cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart">
                                    <circle cx="8" cy="21" r="1" />
                                    <circle cx="19" cy="21" r="1" />
                                    <path
                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                </svg>
                            </button>
                        </div>
                    </section>
                    <!-- Mobile Menu Toggle -->
                    <div class="lg:hidden ">
                        <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false"
                            class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
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
        {{-- mobile menu --}}
        <div id="mobile-menu"
            class="border fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label"
                class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>

            <button type="button" id="close-menu-button" aria-controls="drawer-navigation"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
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
                        <a href="{{ url('/') }}"
                            class="{{ request()->is('/') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/house.png') }}" class="w-5">
                            <span class="ms-3">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/book') }}"
                            class="{{ request()->is('book') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/book.png') }}" class="w-5">
                            <span class="ms-3">Books</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="{{ request()->is('education') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/education.png') }}" class="w-5">
                            <span class="ms-3">Education</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/lovebook.png') }}" class="w-5">
                            <span class="ms-3">Love Story</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/book') }}"
                            class="{{ request()->is('biology') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/biography.png') }}" class="w-5">
                            <span class="ms-3">Biography</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/book') }}"
                            class="{{ request()->is('') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/lovebook.png') }}" class="w-5">
                            <span class="ms-3">Kid Book</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about_us') }}"
                            class="{{ request()->is('about_us') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/kidsbook.png') }}" class="w-5">
                            <span class="ms-3">About Us</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <script>
            const menuButton = document.getElementById('mobile-menu-button');
            const closeButton = document.getElementById('close-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('-translate-x-full');
            });

            closeButton.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full');
            });
        </script>


    </section>
    @yield('content')

    <!-- Start Footer -->
    <footer class="bg-[#2b334a] text-gray-400 py-12">
        <div class="container max-w-screen-xl mx-auto justify-between flex flex-col  md:flex-row gap-8 px-4">
            <!-- Information Section -->
            <div>
                <h2 class="text-white font-bold mb-4">Information</h2>
                <ul class="space-y-2">
                    <li class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Phnom Penh, Cambodia
                    </li>
                    <li class="flex items-center  gap-5 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone-call">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            <path d="M14.05 2a9 9 0 0 1 8 7.94" />
                            <path d="M14.05 6A5 5 0 0 1 18 10" />
                        </svg>
                        010775589
                    </li>
                    <li class="flex items-center  gap-5 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock-3">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16.5 12" />
                        </svg>
                        Mon – Sat: 8 am – 5 pm, Sunday: CLOSED
                    </li>
                    <!-- Add other contact items similarly -->
                </ul>
            </div>

            <!-- Menu Section -->
            {{-- <div>
                <h2 class="text-white font-bold mb-4">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about_us') }}" class="hover:text-white"> About Us</a></li>
                    <li><a href="{{ url('/service') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/product') }}" class="hover:text-white">Products</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div> --}}
            {{-- Social Media --}}
            <div>
                <h2 class="text-white font-bold mb-4">Social Media</h2>
                <div class="flex gap-4 mt-6 md:mt-0">
                    <!-- Facebook icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg> --}}
                        <img src="{{ asset('assets/images/telegram.png') }}" class="w-12">
                    </a>
                    <!-- Email icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-youtube">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg> --}}
                        <img src="{{ asset('assets/images/facebook.png') }}" class="w-12">
                    </a>
                    <!-- Telegram icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-send">
                            <path
                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                            <path d="m21.854 2.147-10.94 10.939" />
                        </svg> --}}
                        <img src="{{ asset('assets/images/youtube.png') }}" class="w-12">
                    </a>
                    <!-- Add other social media icons similarly -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <hr class="w-[15%] mx-auto mt-5">
        <div class="max-w-screen-xl mt-5  text-center mx-auto px-4">
            <p class="text-xs ">&copy; Corasoft | All Rights Reserved</p>
        </div>
    </footer>
    <!-- End Footer -->

</body>

</html>
