@extends('layout.client')
@section('content')
    <section class="bg-white dark:bg-gray-900 mt-20">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden rounded-lg" src="{{ asset('assets/images/book1.jpg') }}" alt="dashboard image" />

            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Discover Our Story
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur. Mattis faucibus
                    lobortis in mattis purus cursus id risus. Nibh morbi
                    molestie amet feugiat viverra eu lorem venenatis
                    volutpat. Id cras facilisi risus leo. Dictum odio congue
                    nam gravida nisl. Lectus orci diam id dui tortor
                    pulvinar gravida. In amet mauris tortor varius hendrerit
                    vitae sagittis rutrum mi. Habitasse at id nam feugiat
                    mauris ullamcorper. Lorem ipsum dolor sit amet
                    consectetur. Mattis faucibus lobortis in mattis purus
                    cursus id risus. Nibh morbi molestie amet feugiat.
                </p>
            </div>
        </div>
        <!-- End  -->

        <!-- Start -->
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Discover Our Story
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur. Mattis faucibus
                    lobortis in mattis purus cursus id risus. Nibh morbi
                    molestie amet feugiat viverra eu lorem venenatis
                    volutpat. Id cras facilisi risus leo. Dictum odio congue
                    nam gravida nisl. Lectus orci diam id dui tortor
                    pulvinar gravida. In amet mauris tortor varius hendrerit
                    vitae sagittis rutrum mi. Habitasse at id nam feugiat
                    mauris ullamcorper. Lorem ipsum dolor sit amet
                    consectetur. Mattis faucibus lobortis in mattis purus
                    cursus id risus. Nibh morbi molestie amet feugiat.
                </p>
            </div>
            <img class="w-full dark:hidden rounded-lg" src="{{ asset('assets/images/book2.jpg') }}" alt="dashboard image" />
        </div>
    </section>
@endsection
