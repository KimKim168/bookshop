@extends('layout.client')
@section('content')
    <!-- Start hero -->
    <div id="controls-carousel" class="relative w-full mt-[80px] md:mt-[85px]">
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/5] md:aspect-[16/5]  w-full overflow-hidden ">
            <!-- Swiper -->
            <swiper-container class="mySwiper w-full h-full" centered-slides="true" autoplay-delay="4000"
                autoplay-disable-on-interaction="false">
                <!-- slide 1 -->
                <swiper-slide class="w-full h-full bg-[#fff4d3]">
                    <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="background-image: url('assets/images/banner1.png');">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                        <!-- Content -->
                        <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <p
                                class="text-[12px] sm:text-sm md:text-xl lg:text-xl font-costum1 text-gray-700 max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Get 25% Off On Every Book
                            </p>
                            <h1
                                class="md:mt-3 mt-1  text-sm sm:text-xl md:text-2xl lg:text-4xl font-costum1 text-black max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Book Collections
                            </h1>
                            <p
                                class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                                eum iure reprehenderit qui in ea voluptate velit From
                                City living Quis autem vel Quis autem vel eum iure
                            </p>
                            <div class="mt-1 md:mt-7">
                                <a href="{{ url('/mobile_app_development') }}"
                                    class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <!-- slide 3 -->
                <swiper-slide class="w-full h-full bg-[#fff4d3]">
                    <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="background-image: url('assets/images/banner1.png');">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                        <!-- Content -->
                        <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <p
                                class="text-[12px] sm:text-sm md:text-xl lg:text-xl font-costum1 text-gray-700 max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Get 25% Off On Every Book
                            </p>
                            <h1
                                class="md:mt-3 mt-1  text-sm sm:text-xl md:text-2xl lg:text-4xl font-costum1 text-black max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Book Collections
                            </h1>
                            <p
                                class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                                eum iure reprehenderit qui in ea voluptate velit From
                                City living Quis autem vel Quis autem vel eum iure
                            </p>
                            <div class="mt-1 md:mt-7">
                                <a href="{{ url('/mobile_app_development') }}"
                                    class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>

            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>
    <!-- End hero -->
    <!-- Start Find Your Book -->
    <div class="mt-10 max-w-screen-lg mx-auto">
        <div class="text-center text-4xl">
            <p>Find Your Book</p>
        </div>
        <div class="grid grid-cols-2 gap-5 px-5 pt-5 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5">
            <!-- Item 1 -->
            <a href="{{ url('/book') }}"
                class="flex flex-col items-center justify-center space-y-2 bg-blue-100 col-span-1 cursor-pointer hover:-translate-y-3 transition-all duration-300">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/cat-01-70x70.png"
                    alt="Biography" />
                <h2>Biography</h2>
            </a>
            <!-- Item 2 -->
            <div
                class="flex flex-col items-center justify-center space-y-2 bg-red-50 col-span-1 cursor-pointer hover:-translate-y-3 transition-all duration-300">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/cat-02-70x70.png"
                    alt="Food Recipe" />
                <h2>Food Recipe</h2>
            </div>
            <!-- Item 3 -->
            <div
                class="flex flex-col items-center justify-center space-y-2 bg-purple-50 col-span-1 cursor-pointer hover:-translate-y-3 transition-all duration-300">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/cat-05-70x70.png"
                    alt="Education" />
                <h2>Education</h2>
            </div>
            <!-- Item 4 -->
            <div
                class="flex flex-col items-center justify-center space-y-2 bg-blue-50 col-span-1 cursor-pointer hover:-translate-y-3 transition-all duration-300">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/cat-04-70x70.png"
                    alt="Kids Story" />
                <h2>Kids Story</h2>
            </div>
            <!-- Item 5 -->
            <div
                class="flex flex-col items-center justify-center space-y-2 bg-lime-50 col-span-1 cursor-pointer hover:-translate-y-3 transition-all duration-300 p-7 px-14">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/cat-03-70x70.png"
                    alt="Love Story" />
                <h2>Love Story</h2>
            </div>
        </div>
    </div>
    <!-- End Find Your Book -->


    <!-- Start category -->
    <section class="max-w-screen-xl mx-auto mt-10 space-y-6">
        <div>
            <p class="text-center text-4xl">
                Our Categories
            </p>
        </div>
        <div class="container mx-auto px-4 ">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:gride-col-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                <!-- Art & Photography -->
                <div>
                    <!-- Include the component for Art & Photography here -->
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between text-nowrap">
                        <div class="flex items-center">
                            <div class="bg-purple-100 rounded-full p-3">
                                <img src="{{ asset('assets/images/photography_4098856.png') }}" alt="Art Icon"
                                    class="w-6 h-6">
                            </div>
                            <div class="ml-4">
                                <h2 class="font-semibold text-gray-800">Art & Photography</h2>
                                <p class="text-sm text-gray-500">1200+ books</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biographies -->
                <div>
                    <!-- Include the component for Biographies here -->
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between text-nowrap">
                        <div class="flex items-center">
                            <div class="bg-purple-100 rounded-full p-3">
                                <img src="{{ asset('assets/images/dna_16955702.png') }}" alt="Biographies Icon"
                                    class="w-6 h-6">
                            </div>
                            <div class="ml-4">
                                <h2 class="font-semibold text-gray-800">Biographies</h2>
                                <p class="text-sm text-gray-500">1200+ books</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business & Money -->
                <div>
                    <!-- Include the component for Business & Money here -->
                    <div
                        class="bg-white rounded-lg row-span-2 shadow-md p-6 flex items-center justify-between text-nowrap ">
                        <div class="flex items-center">
                            <div class="bg-purple-100 rounded-full p-3">
                                <img src="{{ asset('assets/images/finance-book_2693889.png') }}" alt="Business Icon"
                                    class="w-6 h-6">
                            </div>
                            <div class="ml-4">
                                <h2 class="font-semibold text-gray-800">Business & Money</h2>
                                <p class="text-sm text-gray-500">1200+ books</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Children's Book -->
                <div>
                    <!-- Include the component for Children's Book here -->
                    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between text-nowrap">
                        <div class="flex items-center">
                            <div class="bg-purple-100 rounded-full p-3">
                                <img src="{{ asset('assets/images/alphabet_6478184.png') }}" alt="Children's Book Icon"
                                    class="w-6 h-6">
                            </div>
                            <div class="ml-4">
                                <h2 class="font-semibold text-gray-800">Children's Book</h2>
                                <p class="text-sm text-gray-500">1200+ books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-screen-xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">

            <!-- Item 1 -->
            <div
                class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                <a href="{{ url('/view') }}">
                    <div class="">
                        <a href="{{ url('/view') }}">
                            <img class="mx-auto h-full aspect-[6/9] rounded-lg"
                                src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                                alt="" />
                        </a>
                        <div class="pt-2 space-y-2">
                            <div>
                                <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                    Beautiful Things’ A Memoir. Beautiful
                                    Things’ A Memoir. Beautiful Things’ A
                                    Memoir.
                                </p>
                            </div>
                            <div class="grid grid-cols-2 items-center w-full">
                                <div class="col-span-1">
                                    <p class="text-gray-800 text-xl">$20.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div
                class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-3.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                            <!-- Add to card -->
                            <!-- <div class="font-medium text-sm col-span-1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <button
                                                                                                                                                                                                                                                                                                                                                                                                                                                                class="text-gray-800 border bg-[#FFC30E] hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition rounded-full text-sm p-1 px-2 flex items-center justify-center"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <svg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    width="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    height="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    viewBox="0 0 24 24"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-width="2"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="lucide lucide-shopping-cart"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="8" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="19" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Add to Card
                                                                                                                                                                                                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div
                class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                            <!-- Add to card -->
                            <!-- <div class="font-medium text-sm col-span-1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <button
                                                                                                                                                                                                                                                                                                                                                                                                                                                                class="text-gray-800 border bg-[#FFC30E] hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition rounded-full text-sm p-1 px-2 flex items-center justify-center"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <svg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    width="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    height="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    viewBox="0 0 24 24"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-width="2"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="lucide lucide-shopping-cart"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="8" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="19" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Add to Card
                                                                                                                                                                                                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div
                class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-3.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                            <!-- Add to card -->
                            <!-- <div class="font-medium text-sm col-span-1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <button
                                                                                                                                                                                                                                                                                                                                                                                                                                                                class="text-gray-800 border bg-[#FFC30E] hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition rounded-full text-sm p-1 px-2 flex items-center justify-center"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <svg
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    width="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    height="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    viewBox="0 0 24 24"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-width="2"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    class="lucide lucide-shopping-cart"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="8" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <circle cx="19" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                Add to Card
                                                                                                                                                                                                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div
                class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category -->

    <!-- Start Section -->
    <div class="max-w-screen-xl mx-auto grid grid-cols-3 gap-4 mt-20 overflow-hidden">
        <div class="bg-green-100 p-4 col-span-1">
            <p class="text-sm">Flat 30% Off On Story Book</p>
            <h2 class="text-xl font-semibold mt-2">
                The Most Popular Book By Vive Viajando
            </h2>
            <a href="{{ url('/shop') }}" class="text-blue-500 mt-4 block">SHOP NOW</a>
            <img src="{{ asset('assets/images/sub-banner-1-removebg-preview.png') }}" alt="Vive Viajando Book"
                class="mt-4 aspect-square object-cover p-4" />
        </div>
        <div class="grid col-span-2 grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Lords Of The Rings -->
            <div class="bg-gray-100 p-4 flex items-center">
                <div>
                    <h2 class="text-xl font-semibold">
                        Lords Of The Rings Lords Of The Rings
                    </h2>
                    <a href="#" class="text-blue-500 mt-2 block">SHOP NOW</a>
                </div>
                <div>
                    <img src="{{ asset('assets/images/sub-banner-2-removebg-preview.png') }}" alt="Lords Of The Rings"
                        class="w-56" />
                </div>
            </div>
            <!-- Lords Of The Rings -->
            <div class="bg-pink-100 p-4 flex items-center">
                <div>
                    <h2 class="text-xl font-semibold">
                        Lords Of The Rings Lords Of The Rings
                    </h2>
                    <a href="#" class="text-blue-500 mt-2 block">SHOP NOW</a>
                </div>
                <div>
                    <img src="{{ asset('assets/images/sub-banner-2-removebg-preview.png') }}" alt="Lords Of The Rings"
                        class="w-56" />
                </div>
            </div>

            <!-- The Scarlet Pimpernel -->
            <div class="col-span-2 bg-yellow-100 p-4 flex items-center gap-5">
                <div>
                    <p class="text-sm">Choose Your Favourite Book</p>
                    <h2 class="text-xl font-semibold mt-2">
                        The Scarlet Pimpernel Emma Orexy
                    </h2>
                    <a href="#" class="text-blue-500 mt-4 block">SHOP NOW</a>
                </div>
                <div class="flex mt-4 space-x-4">
                    <img src="{{ asset('assets/images/sub-banner-1-removebg-preview.png') }}" alt="Book 1"
                        class="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Start Seaction -->

    <!-- Start seaction -->
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 max-w-screen-lg mx-auto mt-20 gap-5">
        <!-- Item 1 -->
        <div class="flex gap-3 flex-col group cursor-pointer items-center justify-center">
            <div class="">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/catalog/view/theme/Bookie/image/webdigify/service-01.png"
                    class="w-12 group-hover:animate-bounce" />
            </div>
            <div class="text-sm space-y-2 text-center">
                <p>Free Delivery</p>
                <p class="text-slate-500">
                    Free, fast, reliable delivery on over order $99.00
                </p>
            </div>
        </div>
        <!-- Item 1 -->
        <div class="flex gap-3 flex-col cursor-pointer group items-center justify-center">
            <div class="">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/catalog/view/theme/Bookie/image/webdigify/service-02.png"
                    class="w-12 group-hover:animate-bounce" />
            </div>
            <div class="text-sm space-y-2 text-center">
                <p>Secure Payment</p>
                <p class="text-slate-500">
                    Refer a friend our web & get a surprise Gifts
                </p>
            </div>
        </div>
        <!-- Item 1 -->
        <div class="flex gap-3 flex-col cursor-pointer group items-center justify-center">
            <div class="">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/catalog/view/theme/Bookie/image/webdigify/service-03.png"
                    class="w-12 group-hover:animate-bounce" />
            </div>
            <div class="text-sm space-y-2 text-center">
                <p>24/7 Help Center</p>
                <p class="text-slate-500">
                    Feel fre to Call Us & Get best support service
                </p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="flex gap-3 flex-col cursor-pointer group items-center justify-center">
            <div class="">
                <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/catalog/view/theme/Bookie/image/webdigify/service-04.png"
                    class="w-12 group-hover:animate-bounce" />
            </div>
            <div class="text-sm space-y-2 text-center">
                <p>Shop with our App</p>
                <p class="text-slate-500">
                    Safe, faster & more secure way to pay online with us
                </p>
            </div>
        </div>
    </div>
    <!-- End seaction -->

    <!-- Start Newest Edition -->
    <div class="flex items-center flex-col justify-center mt-20">
        <div class="text-4xl ">Newest Edition</div>
        <div class="mt-4">
            <button class="border p-2 text-[12px] bg-[#FFC30E] transition">
                NEW PRODUCTS
            </button>
            <button class="border p-2 text-[12px] hover:bg-[#FFC30E] transition">
                FEATURED
            </button>
        </div>
        <div class="max-w-screen-xl mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mt-4">
            <!-- Item 1 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                            <!-- Add to card -->
                            <!-- <div class="font-medium text-sm col-span-1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                    <button
                                                                                                                                                                                                                                                                                                                                                                                                                                                        class="text-gray-800 border bg-[#FFC30E] hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition rounded-full text-sm p-1 px-2 flex items-center justify-center"
                                                                                                                                                                                                                                                                                                                                                                                                                                                    >
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <svg
                                                                                                                                                                                                                                                                                                                                                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            width="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            height="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            viewBox="0 0 24 24"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-width="2"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            class="lucide lucide-shopping-cart"
                                                                                                                                                                                                                                                                                                                                                                                                                                                        >
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <circle cx="8" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <circle cx="19" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            />
                                                                                                                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        Add to Card
                                                                                                                                                                                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                            <!-- Add to card -->
                            <!-- <div class="font-medium text-sm col-span-1">
                                                                                                                                                                                                                                                                                                                                                                                                                                                    <button
                                                                                                                                                                                                                                                                                                                                                                                                                                                        class="text-gray-800 border bg-[#FFC30E] hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition rounded-full text-sm p-1 px-2 flex items-center justify-center"
                                                                                                                                                                                                                                                                                                                                                                                                                                                    >
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <svg
                                                                                                                                                                                                                                                                                                                                                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            width="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            height="13"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            viewBox="0 0 24 24"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke="currentColor"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-width="2"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            class="lucide lucide-shopping-cart"
                                                                                                                                                                                                                                                                                                                                                                                                                                                        >
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <circle cx="8" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <circle cx="19" cy="21" r="1" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <path
                                                                                                                                                                                                                                                                                                                                                                                                                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"
                                                                                                                                                                                                                                                                                                                                                                                                                                                            />
                                                                                                                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        Add to Card
                                                                                                                                                                                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <a href="#">
                        <img class="mx-auto h-full aspect-[6/9] object-cover border rounded-lg"
                            src="https://uiparadox.co.uk/templates/book_store/v2/assets/media/arrivals/book-2.png"
                            alt="" />
                    </a>

                    <div class="pt-2 space-y-2">
                        <div>
                            <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                Beautiful Things’ A Memoir. Beautiful
                                Things’ A Memoir. Beautiful Things’ A
                                Memoir.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 items-center w-full">
                            <div class="col-span-1">
                                <p class="text-gray-800 text-xl">$20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newest Edition -->

    <!-- Start Blogs -->
    <div class="mt-20">
        <div class="max-w-screen-xl mx-auto p-4 text-center">
            <p class="text-4xl mb-2">From the community</p>
            <p class="text-sm text-black">
                We are a rapidly growing community of members from various
                libraries in Cambodia, united as one digital library
                community.
            </p>
        </div>

        <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="mb-4 grid gap-5 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-3">
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/blog2-1400x986.jpg"
                                    alt="" />
                            </a>
                            <div class="mt-4">
                                <a class="hover:text-[#FFC30E] transition cursor-pointer">
                                    Literary Escapes: Exploring New Worlds
                                    Through Books
                                </a>
                            </div>
                            <button
                                class="border px-3 bg-[#FFC30E] text-sm p-2 hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition mt-4 rounded-full">
                                Read More
                            </button>
                        </div>
                    </div>
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/blog4-1400x986.jpg"
                                    alt="" />
                            </a>
                            <div class="mt-4">
                                <p class="hover:text-[#FFC30E] transition cursor-pointer">
                                    Literary Escapes: Exploring New Worlds
                                    Through Books
                                </p>
                            </div>
                            <button
                                class="border px-3 bg-[#FFC30E] text-sm p-2 hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition mt-4 rounded-full">
                                Read More
                            </button>
                        </div>
                    </div>
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/blog1-1400x986.jpg"
                                    alt="" />
                                <img class="mx-auto hidden h-full dark:block"
                                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                    alt="" />
                            </a>
                            <div class="mt-4">
                                <p class="hover:text-[#FFC30E] transition cursor-pointer">
                                    Literary Escapes: Exploring New Worlds
                                    Through Books
                                </p>
                            </div>
                            <button
                                class="border px-3 bg-[#FFC30E] text-sm p-2 hover:bg-white hover:text-[#FFC30E] hover:shadow-lg transition mt-4 rounded-full">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Seaction -->

    <!-- Start Publisher-->
    <div class="my-20 space-y-10">
        <div>
            <p class="text-center text-4xl ">Publisher</p>
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 max-w-screen-lg mx-auto gap-5">
            <!-- Item 1 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                    <div class="">
                        <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/5-131x119.png"
                            class="w-24" />
                    </div>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                    <div class="">
                        <img src="	https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/6-131x119.png"
                            class="w-24" />
                    </div>
                </div>
            </div>
            <!-- Item 1 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                    <div class="">
                        <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/3-131x119.png"
                            class="w-24" />
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="">
                    <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/5-131x119.png"
                        class="w-24" />
                </div>
            </div>
            <!-- Item 1 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                    <div class="">
                        <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/3-131x119.png"
                            class="w-24" />
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="flex gap-3 flex-col cursor-pointer items-center justify-center">
                <div class="">
                    <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/5-131x119.png"
                        class="w-24" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Publisher-->
@endsection
