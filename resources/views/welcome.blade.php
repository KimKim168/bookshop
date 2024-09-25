@extends('layout.client')
@section('content')
    <div id="controls-carousel" class="relative w-full mt-20  ">
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/5] md:aspect-[16/5]  md:hidden w-full overflow-hidden ">
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
                                SHOP
                            </h1>
                            {{-- <p
                            class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                            eum iure reprehenderit qui in ea voluptate velit From
                            City living Quis autem vel Quis autem vel eum iure
                        </p>
                        <div class="mt-1 md:mt-7">
                            <a href="{{ url('/mobile_app_development') }}"
                                class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                Shop Now
                            </a>
                        </div> --}}
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
                                SHOP
                            </h1>
                            {{-- <p
                            class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                            eum iure reprehenderit qui in ea voluptate velit From
                            City living Quis autem vel Quis autem vel eum iure
                        </p>
                        <div class="mt-1 md:mt-7">
                            <a href="{{ url('/mobile_app_development') }}"
                                class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                Shop Now
                            </a>
                        </div> --}}
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>

            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>
    <!-- Catecgories -->
    <div class="max-w-screen-xl mx-auto mt-5 md:mt-24 lg:px-0">
        <div class="grid grid-cols-12 px-4 md:px-10  gap-6 sm:gap-5">

            {{-- Category Section --}}
            <div class="col-span-12 md:col-span-4 lg:col-span-3 px-2 lg:px-0 mb-6 w-full md:w-auto">
                {{-- Category Header --}}
                <div class="md:max-w-[400px]  text-sm items-center justify-between   flex md:flex-col gap-2 font-serif ">
                    <a href="#" class="">
                        <img src="{{ asset('assets/logo/Cora_logo.png') }}" class="w-24 mx-auto">
                    </a>
                    <div>
                        <p>Email: <a href="mailto:info@yourdomain.com"
                                class="text-blue-600 underline">info@yourdomain.com</a>
                        </p>
                        <p>Address: 1234 Main Street, City, Country</p>
                    </div>
                </div>
                {{-- Latest Product Section --}}
                <hr class="my-4" />
                <div class="space-y-7 mt-4">
                    <div class="flex items-center">
                        <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                            class="w-20" />
                        <div class="ml-4">
                            <p class="text-sm">Sach Kahun Toh Sach Kahun Toh</p>
                            <p class="text-sm">$10.00</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                            class="w-20" />
                        <div class="ml-4">
                            <p class="text-sm">Sach Kahun Toh Sach Kahun Toh</p>
                            <p class="text-sm">$10.00</p>
                        </div>
                    </div>
                    <!-- Repeat for other products -->
                </div>
            </div>

            {{-- Right Content (Books Display) --}}
            <div class="col-span-12 md:col-span-8 p-4">
                <div id="controls-carousel" class="relative w-full mt-10">
                    <!-- Carousel wrapper -->
                    <div class="relative aspect-[16/5] md:aspect-[16/5] hidden md:block w-full overflow-hidden ">
                        <!-- Swiper -->
                        <swiper-container class="mySwiper w-full h-full" centered-slides="true" autoplay-delay="4000"
                            autoplay-disable-on-interaction="false">
                            <!-- slide 1 -->
                            <swiper-slide class="w-full h-full bg-[#fff4d3]">
                                <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply"
                                    data-carousel-item style="background-image: url('assets/images/banner1.png');">
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
                                            SHOP
                                        </h1>
                                        {{-- <p
                                            class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                                            eum iure reprehenderit qui in ea voluptate velit From
                                            City living Quis autem vel Quis autem vel eum iure
                                        </p>
                                        <div class="mt-1 md:mt-7">
                                            <a href="{{ url('/mobile_app_development') }}"
                                                class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                                Shop Now
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </swiper-slide>
                            <!-- slide 3 -->
                            <swiper-slide class="w-full h-full bg-[#fff4d3]">
                                <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply"
                                    data-carousel-item style="background-image: url('assets/images/banner1.png');">
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
                                            SHOP
                                        </h1>
                                        {{-- <p
                                            class="md:mt-3 mt-1 line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 text-[10px] md:text-[12px] lg:text-sm  text-gray-700 mt-1  max-w-[30ch] sm:max-w-[60ch] ">
                                            eum iure reprehenderit qui in ea voluptate velit From
                                            City living Quis autem vel Quis autem vel eum iure
                                        </p>
                                        <div class="mt-1 md:mt-7">
                                            <a href="{{ url('/mobile_app_development') }}"
                                                class="text-[8px] sm:text-sm md:text-lg   rounded-md p-1 px-2 md:px-3 md:py-1  text-black duration-300 border bg-[#FFC30E]  transition button-hover">
                                                Shop Now
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </swiper-slide>
                        </swiper-container>

                        <!-- Swiper JS -->
                        <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                    </div>
                </div>

                <div class="mt-8 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">
                    {{-- Item 1 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 2 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 3 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 4 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 5 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 2 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 3 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Item 4 --}}
                    <div
                        class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <a href="#">
                                <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                    src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                    alt="" />
                            </a>

                            <div class="pt-2 space-y-2">
                                <div>
                                    <p class="hover:text-[#FFC30E] transition cursor-pointer line-clamp-2">
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                        Beautiful Things’ A Memoir.
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 items-center w-full">
                                    <div class="col-span-1">
                                        <p class="text-gray-800">
                                            $20.00
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat similar structure for other items -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Detail -->
@endsection
