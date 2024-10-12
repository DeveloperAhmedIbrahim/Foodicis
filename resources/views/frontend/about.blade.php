@extends('front_layout.app')
@section('title', 'About')
@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Section start -->
        <div id="companies_sponsores"
            class="companies-sponsores section panel overflow-hidden rounded-bottom-3 bg-secondary dark:bg-gray-700 dark:bg-opacity-50">
            <div class="section-outer panel pb-4 sm:pb-8 xl:pb-9">
                <div class="container sm:max-w-lg xl:max-w-xl">
                    <div class="section-inner panel">
                        <div class="brands panel vstack gap-3 sm:gap-4 xl:gap-5 text-center"
                            data-anime="onview: -100; translateY: [-16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 350;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="main_features" class="main-features section panel overflow-hidden">
            <div class="section-outer panel py-4 md:py-6 xl:py-9">
                <div class="container sm:max-w-lg xl:max-w-xl">
                    <div class="section-inner panel">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-6 lg:mb-8 sm:max-w-600px lg:max-w-700px xl:max-w-800px mx-auto text-center"
                            data-anime="onview: -200; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                            <!-- <span class="fw-bold py-narrow px-2 border rounded-pill text-primary dark:text-secondary">Features</span> -->
                            <h2 class="h3 sm:h2 lg:h1 xl:display-6 m-0">About us </h2>
                            <p class="fs-7 sm:fs-6 lg:fs-5 xl:fs-4 text-opacity-70">Our comprehensive solution
                                integrates inventory management, waste reduction, staff scheduling, and real-time
                                analytics into one easy-to-use platform, designed to help your restaurant thrive

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <hr class="w-100 m-0 d-block lg:d-none">


        <!-- Section start -->
        <div id="how_it_works"
            class="how-it-works section panel overflow-hidden rounded-1-5 lg:rounded-2 bg-secondary dark:bg-gray-800 dark:text-white">
            <div class="section-outer panel">
                <div class="container container-full">
                    <div class="section-inner panel">
                        <div class="row child-cols-12 col-match g-0">
                            <div>
                            </div>
                            <div>
                                <div class="panel">
                                    <div class="row child-cols-12 lg:child-cols-6 col-match items-center g-0">
                                        <div class="lg:order-2"
                                            data-anime="onview: -100; translateX: [-48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 300;">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-1-5 lg:rounded-2 lg:rounded-top-start-0">
                                                <img class="media-cover image"
                                                    src="{{ asset('front_assets/images/media/3.jpg') }}"
                                                    alt="image title">
                                            </figure>
                                        </div>
                                        <div class="order-1"
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 400;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">Innovative AI Solutions for Restaurants

                                                </h3>
                                                <p class="fs-6 lg:fs-5">At Foodicis, we specialize in AI-driven restaurant
                                                    management systems, providing tailored solutions that enhance
                                                    operational efficiency and deliver insightful reporting to meet your
                                                    restaurant's unique needs.



                                                </p>
                                                <div class="panel mt-2 lg:mt-4">
                                                    <div class="row child-cols-12 lg:child-cols-6 g-4">

                                                        <div>
                                                            <div class="panel vstack items-start gap-2">

                                                                <a class="btn btn-md btn-primary rounded-default lg:px-3 text-none shadow-xs d-none lg:d-inline-flex"
                                                                    href="page-contact.html">ContactUs</a>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

    </div>

    <!-- Wrapper end -->

@endsection
