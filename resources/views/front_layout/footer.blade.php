<!-- Footer start -->
<footer id="uc-footer" class="uc-footer panel overflow-hidden uc-dark">
    <div class="footer-outer pb-4 lg:pb-6 dark:text-white">
        <div class="uc-footer-cta py-4 sm:py-6 border-bottom">
            <div class="container max-w-xl">
                <div
                    class="uc-footer-inner panel vstack lg:hstack justify-between items-center text-center ltr:lg:text-start rtl:lg:text-end gap-3 sm:gap-4">
                    <div class="vstack gap-2">
                        <h2 class="h3 xl:h2 m-0">Sign up now or never!</h2>
                        <p class="fs-6 xl:fs-4 text-dark dark:text-white text-opacity-70 dark:text-white">Stay up
                            to date with the latest news, announcements, and articles.</p>
                    </div>
                    <div class="panel w-100 sm:w-350px xl:w-450px">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="uc-footer-content pt-6 lg:pt-8">
            <div class="container max-w-xl">
                <div class="uc-footer-inner vstack gap-4 lg:gap-6 xl:gap-8">
                    <div class="uc-footer-widgets panel">
                        <div class="row child-cols-6 md:child-cols col-match g-4">
                            <div class="col-12 lg:col-4">
                                <div class="panel vstack items-start gap-3 xl:gap-4 ltr:md:pe-8 rtl:md:ps-8">
                                    <div>
                                        <a href='index.html' style='width: 140px'>
                                            <img class="text-primary"
                                                src="{{ asset('front_assets/images/logo/logo.avif') }}" alt="Lexend">
                                        </a>
                                        <p class="mt-2">Design amazing digital experiences that create more
                                            happy
                                            in the world.</p>
                                        <p>Telephone : 058 584 0433</p>
                                        <p>Email : info@foodicis.com</p>
                                    </div>
                                    <div class="d-inline-block">


                                    </div>
                                </div>
                            </div>

                            <div>
                                <ul class="nav-y gap-2 fw-medium">
                                    <li><a class='fs-7 dark:text-gray-300' href='request-demo.html'>Pages</a>
                                    </li>
                                    <li><a href='{{ route('home') }}'>Home</a></li>
                                    <li><a href='{{ route('about') }}'>About us</a></li>
                                    <li><a href='{{ route('ai_page') }}'>AI Restaurant Management</a></li>
                                    <li><a href='{{ route('reporting_analytics') }}'>Reporting & Analytics</a></li>

                                    <li><a href='{{ route('contact') }}'>Contact</a></li>

                                </ul>
                            </div>
                            <div>
                                <ul class="nav-y gap-2 fw-medium">
                                    <li><a class='fs-7 dark:text-gray-300' href='blog.html'>Social</a></li>

                                    <li><a href='404.html'>Facebook</a></li>
                                    <li><a href='coming-soon.html'>Instagram</a></li>
                                    <li><a href='page-terms.html'>Tiktok</a></li>
                                    <li><a href='page-privacy.html'>Twitter</a></li>
                                </ul>
                            </div>
                            <div class="d-none lg:d-block">
                                <ul class="nav-y gap-2 fw-medium">
                                    <li><a class='fs-7 dark:text-gray-300' href='blog.html'>Legal</a></li>
                                    <li><a href='blog-details.html'>Terms</a></li>
                                    <li><a href='page-faq.html'>Privacy</a></li>
                                    <li><a href='404.html'>Cookies</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="uc-footer-bottom panel vstack lg:hstack gap-4 justify-between text-center pt-4 lg:pt-6 border-top dark:text-white">
                        <p class="opacity-60">FoodICIS © 2024, All rights reserved.</p>
                        <ul class="nav-x justify-center gap-2 text-gray-300">
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>

                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .uc-navbar-main {
        background-color: white !important;
    }

    .uc-navbar-top.bg-primary-700.text-white.uc-dark.d-none.lg\:d-block {
        background-color: #04243c !important;
    }

    a.btn.btn-md.btn-primary.rounded-default.lg\:px-3.text-none.shadow-xs.d-none.lg\:d-inline-flex {
        background-color: #04243c !important;
    }

    button.btn.btn-primary.btn-md.text-white.mt-2 {
        background-color: #04243c;
    }

    button.btn.btn-md.btn-primary.rounded-default.w-full.h-48px.text-white {
        background-color: #04243c;

    }

    input.btn.btn-primary.btn-md.text-white.mt-2 {
        background-color: #04243c !important;

    }

    a.btn.btn-md.btn-primary.rounded-default.text-white.shadow-xs.mt-1.lg\:mt-2 {
        background-color: #04243c !important;


    }

    button.btn.btn-md.btn-primary.rounded-default.h-48px.w-100.lg\:min-w-150px.text-white {
        background-color: #04243c !important;

    }

    .icon-box.w-48px.h-48px.rounded-1-5.cstack.bg-primary {

        background-color: #c7ab65 !important;
    }

    span.cstack.w-36px.h-36px.bg-primary.rounded-circle {
        background-color: #c7ab65 !important;
    }

    a.btn.btn-sm.bg-primary.text-white.w-40px.h-40px.rounded-circle {
        background-color: #c7ab65 !important;

    }

    header.header-component.smartphone.apple-iphone-13-pro-2021.white.day {
        background-color: white !important;
    }

    span {
        color: #04243c !important;
    }

    footer#uc-footer {
        background-color: #d5d1d1 !important;
    }

    .opacity-60 {
        opacity: .6 !important;
        color: #000;
    }

    .mt-2 {
        margin-top: 1rem !important;
        color: #000;
    }

    p+p {
        margin-top: 1rem;
        color: #000;
    }

    h2.h3.xl\:h2.m-0 {
        color: #000;
    }

    :where(.uc-dark) .dark\:text-gray-300 {
        --bs-text-opacity: 1;
        color: #000 !important;
        /* color: rgba(var(--bs-gray-300-rgb), var(--bs-text-opacity)) !important; */
    }

    p.fs-6.xl\:fs-4.text-dark.dark\:text-white.text-opacity-70.dark\:text-white {
        color: #000 !important;
    }

    ul.nav-y.gap-2.fw-medium {
        color: black !important;
    }

    .w-32px {
        width: 76px !important;
    }
</style>

<!-- include jquery & bootstrap js -->
<script defer src="{{ asset('front_assets/js/libs/jquery.min.js') }}"></script>
<script defer src="{{ asset('front_assets/js/libs/bootstrap.min.js') }}"></script>

<!-- include scripts -->
<script defer src="{{ asset('front_assets/js/libs/anime.min.js') }}"></script>
<script defer src="{{ asset('front_assets/js/libs/swiper-bundle.min.js') }}"></script>
<script defer src="{{ asset('front_assets/js/libs/scrollmagic.min.js') }}"></script>
<script defer src="{{ asset('front_assets/js/helpers/data-attr-helper.js') }}"></script>
<script defer src="{{ asset('front_assets/js/helpers/swiper-helper.js') }}"></script>
<script defer src="{{ asset('front_assets/js/helpers/anime-helper.js') }}"></script>
<script defer src="{{ asset('front_assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
<script defer src="{{ asset('front_assets/js/uikit-components-bs.js') }}"></script>

<!-- include app script -->
<script defer src="{{ asset('front_assets/js/app.js') }}"></script>

<!-- -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- jQuery (necessary for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    // Schema toggle via URL
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const getSchema = urlParams.get("schema");
    if (getSchema === "dark") {
        setDarkMode(1);
    } else if (getSchema === "light") {
        setDarkMode(0);
    }
</script>
</body>

</html>
