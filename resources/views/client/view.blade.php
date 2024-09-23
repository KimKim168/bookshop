@extends('layout.client')
@section('content')
    <!-- Detail -->
    <div class="max-w-screen-lg mx-auto my-12 mt-24 px-2 lg:px-0">
        <div class="grid grid-cols-12 gap-4">
            <div class=" col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-5 lg-px-0 items-center mb-6">
                <div class="max-w-[400px] mx-auto flex flex-col gap-2">
                    <img class="w-full rounded-md cursor-pointer popup-image"
                        src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/03-640x690.jpg"
                        alt="Book Cover" />
                    <div class="grid grid-cols-4 ">
                        <img class="w-full aspect-[1/1] hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md popup-image"
                            src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/08-640x690.jpg"
                            alt="Thumbnail 1" />
                        <img class="w-full aspect-[1/1] hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md popup-image"
                            src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/19-640x690.jpg"
                            alt="Thumbnail 2" />
                        <img class="w-full aspect-[1/1] hover:scale-110 transition-transform duration-500 ease-in-out object-cover rounded-md popup-image"
                            src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/15-640x690.jpg"
                            alt="Thumbnail 3" />
                        <div
                            class="relative w-full aspect-[1/1] hover:scale-110 transition-transform duration-500 ease-in-out">
                            <button
                                class="absolute w-full h-full bg-gray-900/60 hover:bg-gray-900/20 transition-all duration-300 rounded-lg flex items-center justify-center">
                                <span class="text-xl font-medium text-white">+7</span>
                                <div id="download-image" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Download image
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </button>
                            <img src="https://opc.webdigify.com/OPC03/OPC082_bookie/image/cache/catalog/19-640x690.jpg"
                                class="rounded-lg w-full aspect-[1/1] popup-image" alt="Thumbnail 4" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-75 flex items-center justify-center">
                <span class="close-modal absolute top-4 right-4 text-white text-3xl cursor-pointer">&times;</span>
                <img class="modal-content max-w-full max-h-full rounded-md" />
                <button id="prevImage" class="absolute left-4 text-white text-3xl cursor-pointer">
                    &larr;
                </button>
                <button id="nextImage" class="absolute right-4 text-white text-3xl cursor-pointer">
                    &rarr;
                </button>
            </div>

            <!--End Left Item -->

            <!-- Rigth Item -->
            <div class="lg:col-span-7 col-span-12 sm:col-span-12 md:col-span-12">
                <h1 class="text-gray-800 font-serif dark:text-gray-100 block mt-1 text-2xl leading-tight font-medium mb-2">
                    Beautiful Things’ A Memoir
                </h1>

                <hr class="w-full" />

                <div class="flex flex-col gap-6 my-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                Author
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                Jim Collins
                            </p>
                        </div>


                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                Year
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                2001
                            </p>
                        </div>
                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                Pages
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                299
                            </p>
                        </div>
                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                ISBN
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                0712676090
                            </p>
                        </div>
                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                Last Update
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                14-Sep-2024
                            </p>
                        </div>
                        <div class="flex nowrap">
                            <p
                                class="w-[123px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                Keywords
                            </p>
                            <p class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                    finance
                                </span>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                    Accounting
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                        $15.00
                    </h2>
                </div>
                <div class="mt-8">
                    <div class="flex items-center space-x-2">
                        <!-- Quantity Control -->
                        <button class="px-3 py-1 border border-gray-300 text-gray-700 focus:outline-none">
                            -
                        </button>
                        <span class="px-3 py-1 border-t border-b border-gray-300">1</span>
                        <button class="px-3 py-1 border border-gray-300 text-gray-700 focus:outline-none">
                            +
                        </button>

                        <!-- Add to Cart Button -->
                        <button
                            class="px-4 py-2 bg-blue-700 text-[12px] transition hover:bg-[#ffc30e] text-white font-semibold rounded-md focus:outline-none">
                            ADD TO CART
                        </button>
                    </div>
                </div>
            </div>
            <!--End Rigth Item -->

            <script>
                const images = document.querySelectorAll(".popup-image");
                const modal = document.getElementById("imageModal");
                const modalContent = modal.querySelector(".modal-content");
                let currentIndex = 0;

                function openModal(index) {
                    currentIndex = index;
                    modalContent.src = images[currentIndex].src;
                    modal.classList.remove("hidden");
                }

                images.forEach((image, index) => {
                    image.addEventListener("click", () => openModal(index));
                });

                document.querySelector(".close-modal").addEventListener("click", () => {
                    modal.classList.add("hidden");
                });

                modal.addEventListener("click", (event) => {
                    if (event.target === modal) {
                        modal.classList.add("hidden");
                    }
                });

                function showNextImage() {
                    currentIndex = (currentIndex + 1) % images.length;
                    modalContent.src = images[currentIndex].src;
                }

                function showPrevImage() {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    modalContent.src = images[currentIndex].src;
                }

                document.getElementById("nextImage").addEventListener("click", showNextImage);
                document.getElementById("prevImage").addEventListener("click", showPrevImage);

                // Handle keyboard arrow keys
                document.addEventListener("keydown", (event) => {
                    if (!modal.classList.contains("hidden")) {
                        if (event.key === "ArrowRight") {
                            showNextImage();
                        } else if (event.key === "ArrowLeft") {
                            showPrevImage();
                        }
                    }
                });
            </script>

        </div>
        <!-- Related -->
        <div class="mt-8">
            <div class="">
                <p class="text-2xl my-2">Related</p>
                <hr />
            </div>
            <div class="mt-8 grid grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Item 1 -->
                <div
                    class="rounded-xl shadow-sm border border-gray-200 bg-white p-4 hover:scale-105 duration-300 dark:border-gray-700 dark:bg-gray-800">
                    <div class="">
                        <a href="viewPage.html">
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
                                    <p class="text-gray-800 text-sm">
                                        $20.00
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
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
                                    <p class="text-gray-800 text-sm">
                                        $20.00
                                    </p>
                                </div>

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
                                    <p class="text-gray-800 text-sm">
                                        $20.00
                                    </p>
                                </div>

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
                                    <p class="text-gray-800 text-sm">
                                        $20.00
                                    </p>
                                </div>

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
                                    <p class="text-gray-800 text-sm">
                                        $20.00
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Related -->
    </div>
    <!-- End Detail -->
@endsection
