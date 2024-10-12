<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodicis - AI RESTURENT MANAGEMENT SYSTEM</title>
    <link rel="icon" type="image/png" href="{{ asset('front_assets/images/logo/logo.avif') }}" />
    <meta name="description" content="Full-featured, professional-looking software, saas and startup website template.">
    <meta name="keywords"
        content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
    <link rel="canonical" href="https://unistudio.co/html/Lexend">
    <meta name="theme-color" content="#04243c">

    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lexend">
    <meta property="og:description"
        content="Full-featured, Professional-looking SaaS, Software and Startup Site Template.">
    <meta property="og:url" content="https://unistudio.co/html/lexend/">
    <meta property="og:site_name" content="Lexend">
    <meta property="og:image" content="{{ asset('front_assets/images/common/seo-image.jpg') }}">
    <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:image:type" content="image/png">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lexend">
    <meta name="twitter:description"
        content="Full-featured, Professional-looking SaaS, Software and Startup Site Template.">
    <meta name="twitter:image" content="{{ asset('front_assets/images/common/seo-image.jpg') }}">

    <link rel="canonical" href="https://unistudio.co/html/lexend/">

    <!-- preload head styles -->
    {{-- <link rel="preload" href="{{ asset('front_assets/css/unicons.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('front_assets/css/swiper-bundle.min.css') }}" as="style"> --}}

    <!-- preload footer scripts -->

    {{-- -------------------------google Api--------------------------------------- --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- -------------------------google Api--------------------------------------- --}}

    <link rel="preload" href="{{ asset('front_assets/js/libs/jquery.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/libs/scrollmagic.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/libs/swiper-bundle.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/libs/anime.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/helpers/data-attr-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/helpers/swiper-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/helpers/anime-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/helpers/anime-helper-defined-timelines.js') }}"
        as="script">
    <link rel="preload" href="{{ asset('front_assets/js/uikit-components-bs.js') }}" as="script">
    <link rel="preload" href="{{ asset('front_assets/js/app.js') }}" as="script">

    <!-- app head for bootstrap core -->
    <script src="{{ asset('front_assets/js/app-head-bs.js') }}"></script>

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{ asset('front_assets/js/uni-core/css/uni-core.min.css') }}">

    <!-- include styles -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/unicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/swiper-bundle.min.css') }}">

    <!-- include main style -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/theme/main.min.purge.css') }}">

    <!-- include scripts -->
    <script src="{{ asset('front_assets/js/uni-core/js/uni-core-bundle.min.js') }}"></script>
</head>

<body class="uni-body panel bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200 overflow-x-hidden">

    <!--  Search modal -->
    <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white"
            data-uc-height-viewport="">
            <div class="uc-modal-close-full m-1 p-0 vstack gap-narrow text-center">
                <button
                    class="icon-3 btn btn-md btn-dark dark:bg-white dark:text-dark w-24px sm:w-32px h-24px sm:h-32px rounded-circle flex-1"
                    type="button">
                    <i class="unicon-close"></i>
                </button>
                <span class="ft-tertiary fs-7">ESC</span>
            </div>

            <div class="panel w-100 sm:w-500px px-2 py-10">
                <h3 class="h4 sm:h2 text-center">What are you looking for?</h3>
                <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700"
                    action="https://unistudio.co/html/lexend/main/index-5?">
                    <span
                        class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i
                            class="unicon-search icon-3"></i></span>
                    <input type="search" name="q"
                        class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white"
                        placeholder="Type your keyword.." aria-label="Search" autofocus>
                </form>
            </div>
        </div>
    </div>

    <!--  Newsletter modal -->
    <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
        <div
            class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded-3 p-1 overflow-hidden">
            <button
                class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="row md:child-cols-6 col-match g-0">
                <div class="d-none md:d-flex">
                    <div class="position-relative w-100 ratio-1x1 rounded-2 overflow-hidden">
                        <img class="media-cover" src="{{ asset('front_assets/images/common/newsletter.jpg') }}"
                            alt="Newsletter image">
                    </div>
                </div>
                <div>
                    <div class="panel vstack self-center p-4 md:py-8 text-center">
                        <h3 class="h3 md:h2">Subscribe to our Newsletter</h3>
                        <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and updates.</p>
                        <div class="panel mt-2 lg:mt-4">
                            <form class="vstack gap-1">
                                <input type="email"
                                    class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700"
                                    placeholder="Your email address..">
                                <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                            </form>
                            <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Menu panel -->
    <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
        <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
            <header class="uc-offcanvas-header hstack justify-between items-center pb-2 bg-white dark:bg-gray-900">
                <div class="uc-logo">
                    <a class='h5 text-none text-gray-900 dark:text-white' href='index.html'>
                        <img class="w-32px" src="{{ asset('front_assets/images/logo/logo.avif') }}" alt="Lexend">
                    </a>
                </div>
                <button
                    class="uc-offcanvas-close rtl:end-auto rtl:start-0 m-1 mt-2 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                    type="button">
                    <i class="unicon-close"></i>
                </button>
            </header>

            <div class="panel">
                <form id="search-panel" class="form-icon-group vstack gap-1 mb-2" data-uc-sticky="">
                    <input type="email" class="form-control form-control-sm fs-7 rounded-default"
                        placeholder="Search..">
                    <span class="form-icon text-gray">
                        <i class="unicon-search icon-1"></i>
                    </span>
                </form>
                <ul class="nav-y gap-narrow fw-medium fs-6" data-uc-nav>
                    <li><a href='{{ route('home') }}'>Home</a></li>
                    <li><a href='{{ route('about') }}'>About us</a></li>
                    <li><a href='{{ route('ai_page') }}'>AI Restaurant Management</a></li>
                    <li><a href='{{ route('reporting_analytics') }}'>Reporting & Analytics</a></li>

                    <li><a href='{{ route('contact') }}'>Contact</a></li>

                    <li class="hr opacity-10 my-1"></li>
                    <li><a href='sign-up.html'>Create an account</a></li>
                    <li><a href='sign-in.html'>Log in</a></li>
                </ul>

                <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                    <div class="vstack gap-1">
                        <span class="fs-7 opacity-60">Select theme:</span>
                        <div class="darkmode-trigger" data-darkmode-switch="">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider fs-5"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Cart panel -->
    <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
        <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
            <button
                class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90"
                type="button">
                <i class="unicon-close"></i>
            </button>

            <div class="mini-cart-content vstack justify-between panel h-100">
                <div class="mini-cart-header">
                    <h3 class="title h5 m-0 text-dark dark:bg-gray-900">Shopping cart</h3>
                </div>
                <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                    <p class="alert alert-warning" hidden>Your cart empty!</p>
                    <div class="panel vstack gap-3">
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('front_assets/images/common/products/img-07.jpg') }}"
                                            alt="Laptop Cover">
                                        <a class='position-cover' data-caption='Laptop Cover'
                                            href='shop-product-detail.html'></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class='text-none text-dark dark:text-white'
                                                href='shop-product-detail.html'>Laptop Cover</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$24.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('front_assets/images/common/products/img-08.jpg') }}"
                                            alt="Disney Toys">
                                        <a class='position-cover' data-caption='Disney Toys'
                                            href='shop-product-detail.html'></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class='text-none text-dark dark:text-white'
                                                href='shop-product-detail.html'>Disney Toys</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$5.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('front_assets/images/common/products/img-09.jpg') }}"
                                            alt="Screen Axe">
                                        <a class='position-cover' data-caption='Screen Axe'
                                            href='shop-product-detail.html'></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class='text-none text-dark dark:text-white'
                                                href='shop-product-detail.html'>Screen Axe</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$19.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 rounded ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('front_assets/images/common/products/img-10.jpg') }}"
                                            alt="Airpods Pro">
                                        <a class='position-cover' data-caption='Airpods Pro'
                                            href='shop-product-detail.html'></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class='text-none text-dark dark:text-white'
                                                href='shop-product-detail.html'>Airpods Pro</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$49.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer panel pt-3 border-top">
                    <div class="panel vstack gap-3 justify-between">
                        <div class="mini-cart-total hstack justify-between">
                            <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                            <b class="fs-5">$97.00</b>
                        </div>
                        <div class="mini-cart-actions vstack gap-1">
                            <a class='btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700'
                                href='shop-cart.html'>View cart</a>
                            <a class='btn btn-md btn-primary text-white' href='shop-checkout.html'>Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Favorites modal -->
    <div id="uc-favorites-panel" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
            <button
                class="uc-modal-close-default top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90"
                type="button">
                <i class="unicon-close"></i>
            </button>

            <div class="panel vstack justify-center items-center gap-2 text-center py-8">
                <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                <h2 class="h4 md:h3 m-0">Your favorites</h2>
                <p class="fs-5 opacity-60">You have not yet added any recipe to your favorites list.</p>
                <a href="#"
                    class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 mt-2 uc-modal-close">Browse
                    recipes</a>
            </div>
        </div>
    </div>

    <!--  Contact modal -->
    <div id="uc-contact-modal" data-uc-modal="overlay: true">
        <div
            class="uc-modal-dialog lg:max-w-650px bg-secondary text-dark dark:bg-gray-800 dark:text-white rounded-1-5">
            <button
                class="uc-modal-close-default top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90"
                type="button">
                <i class="unicon-close"></i>
            </button>

            <div class="panel vstack gap-2 md:gap-4 text-center">
                <div class="panel cstack px-3 md:px-4 py-4 md:py-8 m-0 lg:mx-auto">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h4 class="h5 lg:h4 m-0">Schedule your 15-minute demo now</h4>
                        <div class="panel w-100 sm:w-350px md:w-500px mx-auto">
                            <form class="vstack gap-2">
                                <div class="vstack lg:hstack gap-2">
                                    <input
                                        class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark"
                                        type="text" placeholder="Full name*" required>
                                    <input
                                        class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark"
                                        type="text" placeholder="Last name*" required>
                                </div>
                                <div class="vstack lg:hstack gap-2">
                                    <input
                                        class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark"
                                        type="email" placeholder="Your email*" required>
                                    <input
                                        class="form-control h-48px w-100 md:w-1/2 rtl:text-end bg-white dark:border-white dark:text-dark"
                                        type="tel" placeholder="Phone number*" required>
                                </div>
                                <input class="form-control h-48px w-full bg-white dark:border-white dark:text-dark"
                                    type="text" placeholder="Company name*" required>
                                <textarea class="form-control min-h-150px w-full bg-white dark:border-white dark:text-dark"
                                    placeholder="Your message.."></textarea>
                                <button class="btn btn-primary btn-md text-white mt-2" type="submit">Schedule my
                                    demo</button>
                                <p class="fs-7 opacity-70 mt-2 text-center">We’ll tailor your demo to your immediate
                                    needs and answer all your questions. Get ready to see how it works!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Bottom Actions Sticky -->
    <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
        <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white"
            data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">


                <i class="fas fa-lightbulb"></i>
            </label>
        </div>
        <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top.html" data-uc-backtotop>
            <i class="icon-2 fas fa-chevron-up"></i>

        </a>
    </div>

    <!-- Header start -->
    <header class="uc-header header-five uc-navbar-sticky-wrap z-999"
        data-uc-sticky="start: 100vh; show-on-up: true; animation: uc-animation-slide-top; sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
        <nav class="uc-navbar-container uc-navbar-float ft-tertiary z-1"
            data-anime="translateY: [-40, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: 0;">
           
            <div class="uc-navbar-main" style="--uc-nav-height: 80px">
                <div class="container container-expand max-w-1440px">
                    <div class="uc-navbar min-h-64px lg:min-h-80px text-gray-900 dark:text-white"
                        data-uc-navbar="mode: click; animation: uc-animation-slide-top-small; duration: 150;">
                        <div class="uc-navbar-left">
                            <div class="uc-logo text-dark dark:text-white">
                                <a class='panel text-none' href='index-5.html' style='width: 140px'>
                                    <img class="dark:d-none" src="{{ asset('front_assets/images/logo/logo.avif') }}"
                                        alt="Lexend">
                                    <img class="d-none dark:d-block"
                                        src="{{ asset('front_assets/images/logo/logo.avif') }}" alt="Lexend">
                                </a>
                            </div>
                            <ul
                                class="uc-navbar-nav gap-3 xl:gap-4 d-none lg:d-flex fw-medium ltr:ms-2 ltr:xl:ms-4 rtl:me-2 rtl:xl:me-4">

                                <li><a href='{{ route('home') }}'>Home</a></li>
                                <li><a href='{{ route('about') }}'>About us</a></li>
                                <li><a href='{{ route('ai_page') }}'>AI Restaurant Management</a></li>
                                <li><a href='{{ route('reporting_analytics') }}'>Reporting & Analytics</a></li>

                                <li><a href='{{ route('contact') }}'>Contact</a></li>

                            </ul>
                        </div>
                        {{-- <div class="uc-navbar-right">
                             <ul class="uc-navbar-nav gap-3 xl:gap-4 d-none lg:d-flex fw-medium ltr:ms-2 ltr:xl:ms-4 rtl:me-2 rtl:xl:me-4">
                                <li class="d-inline-block">
                                    <a href="#" class="hstack gap-1 text-none fw-medium">
                                        <i class="fas fa-arrow-down"></i>
                                        <span>{{ strtoupper(app()->getLocale()) }}</span> <!-- Displays current language -->
                                    </a>
                                    <div class="py-1 bg-white dark:bg-gray-800 shadow-xs w-200px" data-uc-drop="mode: click; offset: 0; pos: top-right; boundary: !.uc-navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                        <ul class="nav-y gap-0 fs-7">
                                            <li>
                                                <a href="#" class="w-100 p-1 px-2" onclick="changeLanguage('en'); return false;">
                                                    <img class="w-20px me-1" src="https://unistudio.co/html/lexend/assets/images/common/en.svg" alt="English">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="w-100 p-1 px-2" onclick="changeLanguage('ar'); return false;">
                                                    <img class="w-20px me-1" src="https://unistudio.co/html/lexend/assets/images/common/ar.svg" alt="Arabic">Arabic (العربية)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> 
                            <a class="" id="google_translate_element"></a>
                            <a class='btn btn-md btn-primary rounded-default lg:px-3 text-none shadow-xs d-none lg:d-inline-flex' href='#inquiry-form'>Send inquiry</a>
                            <a class="d-block lg:d-none" href="#uc-menu-panel" data-uc-navbar-toggle-icon data-uc-toggle></a>
                        </div> --}}
                        <div class="uc-navbar-right">
                            <!-- Removed Google Translate element -->
                        
                            <!-- Example dropdown for language selection -->
                            {{-- <ul class="uc-navbar-nav gap-3 xl:gap-4 d-none lg:d-flex fw-medium ltr:ms-2 ltr:xl:ms-4 rtl:me-2 rtl:xl:me-4">
                                <li class="d-inline-block">
                                    <a href="#" class="language-dropdown hstack gap-1 text-none fw-medium">
                                        <i class="fas fa-arrow-down"></i>
                                        <span>{{ strtoupper(app()->getLocale()) }}</span> <!-- Displays current language -->
                                    </a>
                                    <div class="py-1 bg-white dark:bg-gray-800 shadow-xs w-200px" data-uc-drop="mode: click; offset: 0; pos: top-right; boundary: !.uc-navbar-container; animation: uc-animation-slide-top-small; duration: 150;">
                                        <ul class="nav-y gap-0 fs-7">
                                            <li>
                                                <a href="#" class="w-100 p-1 px-2" onclick="changeLanguage('en'); return false;">
                                                    <img class="w-20px me-1" src="https://unistudio.co/html/lexend/assets/images/common/en.svg" alt="English">English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="w-100 p-1 px-2" onclick="changeLanguage('ar'); return false;">
                                                    <img class="w-20px me-1" src="https://unistudio.co/html/lexend/assets/images/common/ar.svg" alt="Arabic">Arabic (العربية)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>  --}}
{{-- 
                            <div class="language-dropdown">
                                <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language
                                </button>
                                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <a class="dropdown-item" href="#">
                                        <img src="https://unistudio.co/html/lexend/assets/images/common/en.svg" alt="English Flag" style="width: 20px; margin-right: 5px;"> English
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="https://unistudio.co/html/lexend/assets/images/common/ar.svg" alt="Arabic Flag" style="width: 20px; margin-right: 5px;"> Arabic
                                    </a>
                                </div>
                            </div> --}}
                            <a class="" id="google_translate_element"></a>

                            <a class='btn btn-md btn-primary rounded-default lg:px-3 text-none shadow-xs d-none lg:d-inline-flex' href='#inquiry-form'>Send inquiry</a>
                            <a class="d-block lg:d-none" href="#uc-menu-panel" data-uc-navbar-toggle-icon data-uc-toggle></a>
   
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <style>
    /* Hide the Google Translate toolbar */
    .skiptranslate > iframe.skiptranslate {
        display: none !important; /* Hide the iframe */
    }
    
    body {
        top: 0px !important; /* Prevent body from shifting */
    }

    .goog-te-banner-frame {
        display: none !important; /* Hide the banner frame */
    }
</style>


    <!-- Header end -->

        <!-- Other head elements -->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,ar', // Add other languages as needed
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
    
