@extends('layout.client')
@section('content')
    <!-- Catecgories -->
    <div class="max-w-screen-xl mx-auto mt-24 lg:px-0">
        <div class="grid grid-cols-12 px-4 md:px-10  gap-6 sm:gap-5">
            {{-- Category Section --}}
            <div class="col-span-12 md:col-span-4 lg:col-span-3 px-2 lg:px-0 mb-6 w-full md:w-auto">
                {{-- Category Header --}}
                <div class="font-serif text-xl">
                    Categories
                </div>
                <hr class="my-4" />

                {{-- Subcategories --}}
                <div class="space-y-2 text-sm text-slate-500">
                    <div
                        class="overflow-y-auto py-5 px-3 h-auto bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <ul class="space-y-2">
                            {{-- Item 1 --}}
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                    {{-- <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Food Recipe </span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fairytale</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fantasy</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Graphic
                                            novel</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Item 1 --}}
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-pages2" data-collapse-toggle="dropdown-pages2">
                                    {{-- <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Food Recipe </span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-pages2" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fairytale</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fantasy</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Graphic
                                            novel</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Item 1 --}}
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-pages3" data-collapse-toggle="dropdown-pages3">
                                    {{-- <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Food Recipe </span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-pages3" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fairytale</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Fantasy</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Graphic
                                            novel</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Add other categories as needed -->
                        </ul>
                    </div>
                </div>

                {{-- Featured Book Section --}}
                <div class="bg-green-100 p-4 mt-10">
                    <p class="text-sm">Flat 30% Off On Story Book</p>
                    <h2 class="text-xl font-semibold mt-2">
                        The Most Popular Book By Vive Viajando
                    </h2>
                    <img src="{{ asset('assets/images/book3.jpg') }}" alt="Vive Viajando Book" class="my-4" />
                </div>

                {{-- Latest Product Section --}}
                <div class="font-serif text-xl mt-8">Latest Product</div>
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
                    <!-- Repeat for other products -->
                </div>
            </div>

            {{-- Right Content (Books Display) --}}
            <div class="col-span-12 md:col-span-8 p-4">
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
