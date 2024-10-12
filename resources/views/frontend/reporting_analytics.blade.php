@extends('front_layout.app')
@section('title', 'Reporting Analytics')
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
        <!-- Section start -->
        <div id="main_features" class="main-features section panel overflow-hidden">
            <div class="section-outer panel py-4 md:py-6 xl:py-9">
                <div class="container sm:max-w-lg xl:max-w-xl">
                    <div class="section-inner panel">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-6 lg:mb-8 sm:max-w-600px lg:max-w-700px xl:max-w-800px mx-auto text-center"
                            data-anime="onview: -200; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                            <h2 class="h3 sm:h2 lg:h1 xl:display-6 m-0">AI-Powered Insights
                            </h2>
                            <p class="fs-7 sm:fs-6 lg:fs-5 xl:fs-4 text-opacity-70">Transform your restaurant management
                                with our advanced AI reporting system for smarter decisions and growth.
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
                                                    src="{{ asset('front_assets/images/media/6.jpg') }}" alt="image title">
                                            </figure>
                                        </div>
                                        <div
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 200;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">AI Reporting Solutions

                                                </h3>
                                                <p class="fs-6 lg:fs-5">Use AI to generate instant reports that track
                                                    inventory, staff performance, customer behavior, and waste. Get
                                                    real-time insights to make smarter decisions and improve your
                                                    restaurant’s efficiency


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
                                                                    <span>Data-Driven Insights

                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Leverage AI to
                                                                analyze restaurant needs and receive tailored suggestions
                                                                for improved operations.

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
                                                                    <span>Smart Analytics Tools
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Utilize advanced
                                                                analytics tools to enhance your restaurant's performance and
                                                                streamline management processes.

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
                                                                    <span>Comprehensive Reporting

                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Our AI system
                                                                provides comprehensive reports to help you understand trends
                                                                and optimize your services.
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wrapper end -->


@endsection
