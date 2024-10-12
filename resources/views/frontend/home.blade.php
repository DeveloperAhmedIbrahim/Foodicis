@extends('front_layout.app')
@section('title', 'Home')
@section('content')
<style>
    .uc-accordion-title::before {
        content: "\f107" !important;
        /* Font Awesome chevron-down icon */
        font-family: 'Font Awesome 6 Free';
        /* Font Awesome 6 Free for solid icons */
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 0;
        font-family: Unicons;
        width: 24px;
        height: 24px;
        font-size: 24px;
        text-transform: none;
        line-height: 1;
        transform: translateY(-50%) rotate(0);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        transition: transform .2s ease;
        background-color: rgba(155, 155, 155, .25);
        border-radius: 100%;
    }

    .uc-accordion.uc-accordion-chevron .uc-accordion-title::before {
        content: "\f107";
        /* Font Awesome chevron-down icon */
        font-family: 'Font Awesome 6 Free';
        /* Font Awesome 6 Free for solid icons */
        background: 0 0;
        font-size: 80%;
        font-weight: 700;
    }

    .uc-accordion-title::before {
        content: "\f078";
        /* Font Awesome chevron-down icon */
        font-family: 'Font Awesome 6 Free';
        /* Font Awesome 6 Free for solid icons */
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 0;
        font-family: Unicons;
        width: 24px;
        height: 24px;
        font-size: 24px;
        text-transform: none;
        line-height: 1;
        transform: translateY(-50%) rotate(0);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        transition: transform .2s ease;
        background-color: rgba(155, 155, 155, .25);
        border-radius: 100%;
    }
</style>


    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Section start -->
        <div id="hero_header" class="hero-header hero-five-scene section panel overflow-hidden">
            <div class="position-cover bg-gradient-to-t from-secondary to-white dark:from-gray-800 dark:to-gray-900">
            </div>
            <div class="section-outer panel pb-6 sm:pb-8 pt-9 xl:pt-10 xl:pb-9">
                <div class="container max-w-xl">
                    <div class="section-inner panel">
                        <div class="row child-cols-12 justify-center lg:justify-between items-center g-6 lg:g-0">
                            <div class="sm:col-8 lg:col-5">
                                <div class="panel vstack gap-2 text-center lg:text-start rtl:lg:text-end xl:me-4"
                                    data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                                    <h1 class="h2 sm:display-6 xl:display-4 fw-light mb-1 xl:mb-2">Revolutionize Your
                                        Restaurant Management with AI</h1>
                                    <p class="fs-6 xl:fs-4">
                                        Simplify management, reduce waste,and boost profitability with our integrated
                                        AI-driven solution

                                        <br class="d-none lg:d-block">

                                    </p>
                                    <div class="vstack gap-1 mt-2 xl:mt-4">
                                        <form class="row child-cols g-1" method="POST" action="{{ route('subscriptions.store') }}">
                                            @csrf
                                            <div>
                                                <div class="form-group inline-block">
                                                    <input type="email" name="email" class="form-control rounded-default h-48px w-full text-black bg-white" placeholder="Your email.." required="">
                                                </div>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <input type="submit" value="Submit" class="btn btn-md btn-primary rounded-default w-full h-48px text-white" />
                                            </div>
                                        </form>
                                        <p class="fs-7 text-dark dark:text-white text-opacity-70">We care about your
                                            data in our <a class='uc-link text-underline dark:text-secondary'
                                                href='page-privacy.html'>privacy policy</a>.</p>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="sm:col-auto">
                                <div class="hero-scroll-scene panel sm:w-550px sm:h-600px lg:w-450px lg:h-500px xl:w-600px xl:h-650px"
                                    data-anime="translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                                    <figure
                                        class="featured-image m-0 rounded ratio ratio-1x1 rounded-3 h-100 overflow-hidden">
                                        <img class="media-cover image" src="{{ asset('front_assets/images/media/1.jpg') }}"
                                            alt="image">
                                    </figure>
                                    <div class="hero-five-contries position-absolute sm:w-300px lg:w-250px xl:w-350px d-none sm:d-block"
                                        data-anime="translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 750; delay: 750;"
                                        style="top: 20%">

                                    </div>
                                    <div class="hero-five-account position-absolute sm:w-250px lg:w-200px xl:w-300px d-none sm:d-block"
                                        data-anime="translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 750; delay: 750;"
                                        style="bottom: 20%">
                                        <img src="{{ asset('front_assets/images/template/hero-05-account.png') }}"
                                            alt="Account"
                                            data-anime="onscroll: .hero-scroll-scene; onscroll-offset: -200; onscroll-trigger: 0; onscroll-duration: 400%; translateY: [100, 0];">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

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
                            <h2 class="h3 sm:h2 lg:h1 xl:display-6 m-0">AI Restaurant Management </h2>
                            <p class="fs-7 sm:fs-6 lg:fs-5 xl:fs-4 text-opacity-70">Our comprehensive solution
                                integrates inventory management, waste reduction, staff scheduling, and real-time
                                analytics into one easy-to-use platform, designed to help your restaurant thrive

                            </p>
                        </div>
                        <div class="features-items row child-cols-12 sm:child-cols-6 lg:child-cols-4 g-0 col-match"
                            data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 400});">
                            <div class="order-1 lg:order-0">
                                <div class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/zap.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Fast and Reliable</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Enhance your restaurant operations
                                                with lightning-fast, real-time data processing. Whether you manage a team of
                                                2 or 200, our platform ensures seamless communication and data
                                                accessibility, improving team collaboration and operational efficiency.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-0">
                                <div
                                    class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5 bg-gradient-45 from-secondary to-transparent dark:from-gray-700 sm:rounded-bottom-end-0 lg:rounded-bottom-0">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/database.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Discover Data Everywhere</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Access vital restaurant data from
                                                any device, at any time. Our system provides real-time insights into
                                                inventory, waste, and performance metrics, ensuring you stay informed
                                                whether you’re in the kitchen or managing remotely.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-2 sm:order-1 lg:order-0">
                                <div class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/puzzle.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Enrich Data with Context</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Turn raw data into actionable
                                                insights. Our AI-powered analytics provide context to every data point,
                                                enabling smarter decisions that reduce waste, optimize inventory, and boost
                                                restaurant profitability.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-1 lg:order-0">
                                <div
                                    class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5 bg-gradient-45 from-secondary to-transparent dark:from-gray-700 sm:rounded-start-0 lg:rounded-top-end-0 lg:rounded-start-1-5">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/target.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Risk Management</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Stay ahead of potential risks with
                                                advanced monitoring tools. Detect issues early, receive instant alerts, and
                                                prevent operational disruptions to maintain smooth restaurant management and
                                                reduce costly errors.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-3 lg:order-0">
                                <div class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/line-chart.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Privacy Compliance</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Protect your customer data with
                                                industry-leading privacy compliance. Our platform ensures your restaurant
                                                adheres to the latest data protection regulations while safeguarding
                                                sensitive information with robust security features.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-2 lg:order-0">
                                <div
                                    class="features-item vstack justify-between gap-6 xl:gap-8 p-4 xl:p-6 rounded-1-5 bg-gradient-45 from-secondary to-transparent dark:from-gray-700 sm:rounded-top-end-0 lg:rounded-top-start-0 lg:rounded-top-end-1-5">
                                    <div class="icon-box w-48px h-48px rounded-1-5 cstack bg-primary">
                                        <img class="w-20px xl:w-24px text-white"
                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/settings.svg"
                                            alt="feature-icon" data-uc-svg>
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-1">
                                            <h3 class="title h5 xl:h4 m-0">Third-Party Management</h3>
                                            <p class="desc fs-7 xl:fs-6 text-opacity-70">Manage external relationships and
                                                operations from a single platform, simplifying inventory orders, payments,
                                                and overall restaurant efficiency.</p>
                                            <a class='uc-link dark:text-secondary fs-7 xl:fs-6 fw-bold hstack gap-1 sm:mt-1'
                                                href='page-features.html'>
                                                <span>Learn more</span>
                                                <i class="fas fa-chevron-right accordion-icon"></i>

                                            </a>
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
                                                    src="{{ asset('front_assets/images/media/2.jpg') }}"
                                                    alt="image title">
                                            </figure>
                                        </div>
                                        <div
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 200;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">Restaurant Management
                                                </h3>
                                                <p class="fs-6 lg:fs-5">Our AI-powered system streamlines inventory, waste
                                                    management, real-time analytics, and staff monitoring, boosting
                                                    efficiency and profitability. It keeps your restaurant connected and
                                                    optimized at every level.</p>
                                                <div class="panel w-100 mt-2 lg:mt-4">
                                          
                                                    <ul class="uc-accordion-divider uc-accordion-chevron gap-5"
                                                        data-uc-accordion="collapsible: false"
                                                        style="--divider-gap: 40px">
                                                        <li>
                                                            <a class="uc-accordion-title h5 lg:h4 m-0">
                                                                <span class="hstack gap-1 lg:gap-2">
                                                                    <span
                                                                        class="cstack w-36px h-36px bg-primary rounded-circle">
                                                                        <img class="icon icon-1 text-white"
                                                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/zap.svg"
                                                                            alt="feature-icon" data-uc-svg>
                                                                    </span>
                                                                    <span>AI-Powered Inventory Management

                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Optimize your
                                                                stock with AI-driven inventory management. Our system uses
                                                                artificial intelligence to predict stock needs, avoid
                                                                shortages, and automate reordering, ensuring you reduce
                                                                costs and prevent waste.

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a class="uc-accordion-title h5 lg:h4 m-0">
                                                                <span class="hstack gap-1 lg:gap-2">
                                                                    <span
                                                                        class="cstack w-36px h-36px bg-primary rounded-circle">
                                                                        <img class="icon icon-1 text-white"
                                                                            src="https://unistudio.co/html/lexend/assets/images/common/icons/target.svg"
                                                                            alt="feature-icon" data-uc-svg>
                                                                    </span>
                                                                    <span>AI-Driven Waste Management
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Leverage AI to
                                                                track and minimize food waste. Our advanced algorithms
                                                                analyze waste patterns, helping you reduce food costs and
                                                                run a more sustainable restaurant with real-time waste
                                                                monitoring.
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
                                                                    <span>Real-Time Analytics
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Harness the
                                                                power of AI to gain real-time insights into your
                                                                restaurant's performance. Make data-driven decisions with
                                                                up-to-the-minute reports and optimize operations on the fly
                                                                for maximum profitability.

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
                                                                    <span>AI Staff Monitoring

                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="uc-accordion-content mt-1 lg:mt-2">Monitor staff
                                                                performance using AI. Our intelligent system tracks
                                                                attendance and productivity, providing you with actionable
                                                                insights to improve team efficiency and restaurant
                                                                operations.



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
                                                    src="{{ asset('front_assets/images/media/3.jpg') }}"
                                                    alt="image title">
                                            </figure>
                                        </div>
                                        <div class="order-1"
                                            data-anime="onview: -100; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 400;">
                                            <div class="panel vstack items-start gap-2 lg:gap-3 p-3 md:p-4 lg:p-6 xl:p-8 xl:px-9 my-2 lg:my-0"
                                                data-anime="onview: -100; targets: >*; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                                <h3 class="h3 lg:h2 m-0">Innovative AI Restaurant Management Solutions
                                                </h3>
                                                <p class="fs-6 lg:fs-5">At Foodicis, we specialize in AI-driven
                                                    restaurant management systems that streamline operations and provide
                                                    insightful reporting to enhance your restaurant's performance and
                                                    decision-making.

                                                </p>
                                                <div class="panel mt-2 lg:mt-4">
                                                    <div class="row child-cols-12 lg:child-cols-6 g-4">

                                                        <div>
                                                            <div class="panel vstack items-start gap-2">

                                                                <div class="vstack gap-1 lg:gap-2">
                                                                    <h5 class="h5 lg:h4 m-0">Preload</h5>

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

        <!-- Section start -->
        <div id="faq" class="faq section panel overflow-hidden pt-4">
            <div class="section-outer panel">
                <div class="container max-w-md">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                        <div class="panel vstack gap-6 xl:gap-8">
                            <div class="vstack gap-2 text-center">
                                <span class="fw-bold text-primary dark:text-secondary">FAQ</span>
                                <h2 class="h4 sm:h3 xl:h2 m-0 text-center">Frequenlty asked questions:</h2>
                                <p class="fs-6 xl:fs-5">Everything you need to know about the product.</p>
                            </div>
                            <div class="panel">
                                <ul class="uc-accordion-divider uc-accordion-chevron gap-5 uc-accordion"
                                    data-uc-accordion="collapsible: false" style="--divider-gap: 40px">
                                    <li class="uc-open">
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-1" role="button"
                                            aria-controls="uc-accordion-2" aria-expanded="true" aria-disabled="true">
                                            <span class="hstack gap-1 lg:gap-2">


                                                <span>How can your system help me reduce food waste?

                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" id="uc-accordion-2" role="region"
                                            aria-labelledby="uc-accordion-1">Our AI-powered waste management system tracks
                                            food waste patterns in real time, providing actionable insights to minimize
                                            waste, optimize portion control, and improve sustainability.

                                        </div>
                                    </li>
                                    <li>
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-3" role="button"
                                            aria-controls="uc-accordion-4" aria-expanded="false" aria-disabled="false">
                                            <span class="hstack gap-1 lg:gap-2">

                                                <span>Does the AI automatically handle reordering for low-stock items?
                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" hidden="" id="uc-accordion-4"
                                            role="region" aria-labelledby="uc-accordion-3">Yes, the AI predicts stock
                                            levels and automatically triggers reorders when inventory is low, ensuring
                                            you're always stocked.
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-5" role="button"
                                            aria-controls="uc-accordion-6" aria-expanded="false" aria-disabled="false">
                                            <span class="hstack gap-1 lg:gap-2">

                                                <span>Can I access real-time performance data remotely?
                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" hidden="" id="uc-accordion-6"
                                            role="region" aria-labelledby="uc-accordion-5">Absolutely! You can access
                                            live analytics and reports from any device, allowing you to monitor your
                                            restaurant’s performance from anywhere.

                                        </div>
                                    </li>
                                    <li>
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-7" role="button"
                                            aria-controls="uc-accordion-8" aria-expanded="false" aria-disabled="false">
                                            <span class="hstack gap-1 lg:gap-2">
                                                <span>Does your system integrate with my current POS or other restaurant
                                                    software?

                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" hidden="" id="uc-accordion-8"
                                            role="region" aria-labelledby="uc-accordion-7">Yes, our platform seamlessly
                                            integrates with most POS systems and third-party software to streamline your
                                            restaurant operations.



                                        </div>
                                    </li>
                                    <li>
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-7" role="button"
                                            aria-controls="uc-accordion-8" aria-expanded="false" aria-disabled="false">
                                            <span class="hstack gap-1 lg:gap-2">
                                                <span>How does the AI identify waste patterns and provide actionable
                                                    insights?

                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" hidden="" id="uc-accordion-8"
                                            role="region" aria-labelledby="uc-accordion-7">The AI continuously analyzes
                                            your operations, identifying waste trends and inefficiencies, and provides
                                            recommendations to reduce food waste and improve profitability.



                                        </div>
                                    </li>
                                    </li>
                                    <li>
                                        <a class="uc-accordion-title h5 lg:h4 m-0" id="uc-accordion-7" role="button"
                                            aria-controls="uc-accordion-8" aria-expanded="false" aria-disabled="false">
                                            <span class="hstack gap-1 lg:gap-2">
                                                <span>What are the benefits of using AI in restaurant management?

                                                </span>
                                            </span>
                                        </a>
                                        <div class="uc-accordion-content mt-1 lg:mt-2" hidden="" id="uc-accordion-8"
                                            role="region" aria-labelledby="uc-accordion-7">AI improves efficiency by
                                            automating tasks, optimizing inventory, reducing waste, providing real-time
                                            insights, and streamlining staff management, saving you time and money.



                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="support_cta" class="support-cta section panel overflow-hidden">
            <div class="section-outer panel py-2 sm:py-6 xl:py-9">
                <div class="container max-w-lg">

                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="support_cta" class="support-cta section panel overflow-hidden">

            <div class="panel rounded-3 overflow-hidden bg-secondary dark:bg-gray-800"
                style="transform: translateY(0px); opacity: 1;">
                <div class="panel row child-cols-12 lg:child-cols-6 g-0">
                    <div class="order-1 lg:order-0">
                        <div class="panel overflow-hidden rounded-3 h-100 min-h-350px">
                            <figure class="panel h-100 m-0 rounded">
                                <canvas class="h-100 w-100"></canvas>
                                <img class="media-cover image"
                                    src="{{ asset('front_assets') }}/images/template/hero-contact.jpg" alt="Hero image">
                            </figure>
                            <div class="position-cover text-white vstack justify-end p-4 lg:p-6 xl:p-9">
                                <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-50">
                                </div>
                                <div class="panel z-1">
                                    <div class="vstack gap-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-0 lg:order-1">
                        <form id="inquiry-form" class="vstack gap-2 p-3 sm:p-6 xl:p-8"
                            action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <p class="fs-6 text-dark dark:text-white text-opacity-70 mb-2">Have a question or feedback?
                                Fill out the form below, and we'll get back to you as soon as possible.</p>
                            <div class="row child-cols-12 sm:child-cols-6 g-2">
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="text" placeholder="Full name" name="firstname" required="">
                                </div>
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="text" placeholder="Last Name" name="lastname" required="">
                                </div>
                            </div>
                            <div class="row child-cols-12 sm:child-cols-6 g-2">
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="email" placeholder="Email" name="email" required="">
                                </div>
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="text" name="phone" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="row child-cols-12 sm:child-cols-6 g-2">
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="text" placeholder="Business Name" name="business_name" required="">
                                </div>
                                <div>
                                    <input
                                        class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-10 dark:border-opacity-0 dark:text-white"
                                        type="number" name="branches" placeholder="How Many Branches" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label for="country">Country Name</label> --}}
                                    <select name="country_id" class="form-control select2" id="country"
                                        style="color: black !important;">
                                        @foreach ($countries as $c)
                                            <option value="{{ $c->id }}"> {{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary btn-md text-white mt-2">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Wrapper end -->

@endsection
