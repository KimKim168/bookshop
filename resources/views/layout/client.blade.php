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
                            <a href="{{ url('/product') }}"
                                class="{{ request()->is('product') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">Biography</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}"
                                class="{{ request()->is('contact') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">Kid
                                Books</a>
                        </li>

                        <li><a href="{{ url('/about_us') }}"
                                class="{{ request()->is('about_us') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }}">About
                                Us</a>
                        </li>
                    </ul>
                    <!-- Chat Button - visible on all screen sizes -->
                    <section>
                        <div class="items-center md:ml-8 mr-2 flex justify-between gap-2 w-full md:w-auto md:order-1">
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
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false"
                            class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
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
                        <a href="#"
                            class="{{ request()->is('biology') ? 'decoration-[#ffc30e] underline underline-offset-8 text-black' : 'text-black' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <img src="{{ asset('assets/images/biography.png') }}" class="w-5">
                            <span class="ms-3">Biography</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
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
