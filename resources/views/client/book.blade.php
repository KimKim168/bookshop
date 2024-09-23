@extends('layout.client')
@section('content')
    <!-- Catecgories -->
    <div class="max-w-screen-xl mx-auto my-12 mt-24 px-2 lg:px-0">
        <div class="grid grid-cols-12 gap-14">
            <div class="col-span-3 px-2 lg-px-0 mr-2 items-center mb-6">
                <div class="max-w-[400px] flex flex-col gap-2 font-serif text-xl">
                    Catacgories
                </div>
                <hr />
                <dir class="grid p-0 text-[14px] text-slate-500 space-y-2">
                    <a href="#">economics</a>
                    <a href="#">humorous</a>
                    <a href="#">Mystery</a>
                    <a href="#">Paranormal</a>
                    <a href="#">Books</a>
                    <a href="#">Food Recipe</a>
                    <a href="#">Love Story</a>
                    <a href="#">Biography</a>
                    <a href="#">Fairytale</a>
                    <a href="#">Western </a>
                    <a href="#">drama</a>
                </dir>
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
