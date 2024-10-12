@extends('front_layout.app')
@section('title', 'Ai page')
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
                              <h2 class="h3 sm:h2 lg:h1 xl:display-6 m-0">AI Restaurant Management </h2>
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
                                <div class="panel">
                                    <div class="row child-cols-12 lg:child-cols-6 col-match items-center g-0">
                                        <div
                                            data-anime="onview: -100; translateX: [-48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 100;">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-1-5 lg:rounded-2 lg:rounded-bottom-end-0">
                                                <img class="media-cover image"
                                                    src="{{ asset('front_assets/images/media/3.jpg') }}" alt="image title">
                                            </figure>
                                        </div>
                                        <div
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 200;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">AI Resturent Solutions
                                                </h3>
                                                <p class="fs-6 lg:fs-5">Transform your restaurant management with our
                                                    AI-driven system for enhanced efficiency and insightful reporting.
                                                </p>
                                                <div class="panel w-100 mt-2 lg:mt-4">
                                                    <ul class="uc-accordion-divider uc-accordion-chevron gap-5"
                                                        data-uc-accordion="collapsible: false" style="--divider-gap: 40px">
                                                        <li>
                                                            <a class="uc-accordion-title h5 lg:h4 m-0">
                                                                <span class="hstack gap-1 lg:gap-2">
                                                                    <span
                                                                        class="cstack w-36px h-36px bg-primary rounded-circle">
                                                                        <img class="icon icon-1 text-white"
                                                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/zap.svg"
                                                                            alt="feature-icon" data-uc-svg>
                                                                    </span>
                                                                    <span>Pre Order Now

                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Secure your
                                                                access to our innovative restaurant management system
                                                                and elevate your business operations today.
                                                            </div>
                                                        </li>


                                                        <li>
                                                            <a class="uc-accordion-title h5 lg:h4 m-0">
                                                                <span class="hstack gap-1 lg:gap-2">
                                                                    <span
                                                                        class="cstack w-36px h-36px bg-primary rounded-circle">
                                                                        <img class="icon icon-1 text-white"
                                                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/settings.svg"
                                                                            alt="feature-icon" data-uc-svg>
                                                                    </span>
                                                                    <span>Smart Reporting Tools
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Utilize AI
                                                                to analyze restaurant needs, providing tailored
                                                                suggestions and comprehensive reports for improvement.

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel">
                                    <div class="row child-cols-12 lg:child-cols-6 col-match items-center g-0">
                                        <div class="lg:order-2"
                                            data-anime="onview: -100; translateX: [-48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 300;">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-1-5 lg:rounded-2 lg:rounded-top-start-0">
                                                <img class="media-cover image"
                                                    src="{{ asset('front_assets/images/media/4.jpg') }}"
                                                    alt="image title">
                                            </figure>
                                        </div>
                                        <div class="order-1"
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 400;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">AI Solutions
                                                </h3>
                                                <p class="fs-6 lg:fs-5">Revolutionizing restaurant management with
                                                    AI-driven insights and reporting.s

                                                </p>
                                                <div class="panel mt-2 lg:mt-4">
                                                    <div class="row child-cols-12 lg:child-cols-6 g-4">

                                                        <div>
                                                            <div class="panel vstack items-start gap-2">

                                                                <div class="vstack gap-1 lg:gap-2">
                                                                    {{-- <h5 class="h5 lg:h4 m-0">Preload</h5> --}}

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
        </div>

        <!-- Section end -->
    </div>

    <!-- Wrapper end -->
@endsection
