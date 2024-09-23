@extends('layout.client')
@section('content')
    <!-- Catecgories -->
    <div class="max-w-screen-xl mx-auto my-12 mt-24 px-2 lg:px-0">
        <div class="grid grid-cols-12 gap-14">
            {{-- category --}}
            <div class="col-span-3 px-2 lg-px-0 mr-2 items-center mb-6">
                {{-- category --}}
                <div class="max-w-[400px] flex flex-col gap-2 font-serif text-xl">
                    Catacgories
                </div>
                <hr />
                {{-- sub category --}}
                <div class="grid p-0 text-[14px] text-slate-500 space-y-2">
                    <div
                        class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <ul class="space-y-2">
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
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                                    {{-- <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Kids Books</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Art/architecture

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            Autobiography

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Biography

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                                    {{-- <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg> --}}
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Love Story</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            Cookbook </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Corruption</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Autobiography</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-green-100 p-4 col-span-1 mt-10">
                    <p class="text-sm">Flat 30% Off On Story Book</p>
                    <h2 class="text-xl font-semibold mt-2">
                        The Most Popular Book By Vive Viajando
                    </h2>

                    <div class="">
                        <img src="{{ asset('assets/images/book3.jpg') }}" alt="Vive Viajando Book" class="my-4" />
                    </div>
                </div>
                <div class="max-w-[400px] flex flex-col gap-2 font-serif text-xl mt-8">
                    Latest Product
                </div>
                <hr />
                <div class="space-y-7 mt-8">
                    <div class="flex items-center justify-center">
                        <div>
                            <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                class="w-20" />
                        </div>
                        <div class="space-y-2">

                            <p class="line-clamp-1 text-[12px]">
                                Sach Kahun Toh Sach Kahun Toh
                            </p>
                            <p class="line-clamp-2 text-[12px]">$10.00</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div>
                            <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/04-342x369.jpg"
                                class="w-20" />
                        </div>
                        <div class="space-y-2">

                            <p class="line-clamp-1 text-[12px]">
                                Sach Kahun Toh Sach Kahun Toh
                            </p>
                            <p class="line-clamp-2 text-[12px]">$10.00</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div>
                            <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/16-342x369.jpg"
                                class="w-20" />
                        </div>
                        <div class="space-y-2">

                            <p class="line-clamp-1 text-[12px]">
                                Sach Kahun Toh Sach Kahun Toh
                            </p>
                            <p class="line-clamp-2 text-[12px]">$10.00</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right comtent --}}
            <div class="col-span-8">
                <div class="mt-8 grid grid-cols-4 gap-10">
                    <div>
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
                    </div>
                    <div>
                        <div
                            class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                            <div class="">
                                <a href="#">
                                    <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/04-342x369.jpg"
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
                    </div>
                    <div>
                        <div
                            class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                            <div class="">
                                <a href="#">
                                    <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/09-342x369.jpg"
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

                    </div>
                    <div>
                        <div
                            class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                            <div class="">
                                <a href="#">
                                    <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/10-640x690.jpg"
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
                    </div>
                    <div>
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
                    </div>
                    <div>
                        <div
                            class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                            <div class="">
                                <a href="#">
                                    <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/06-342x369.jpg"
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
                    </div>
                    <div>
                        <div
                            class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                            <div class="">
                                <a href="#">
                                    <img class="mx-auto h-full aspect-[6/9] object-cover rounded-lg"
                                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/10-640x690.jpg"
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
                    </div>
                    <div>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Detail -->
@endsection
