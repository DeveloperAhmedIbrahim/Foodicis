<header class="app-header">
    <div class="main-header-container container-fluid">
        <div class="header-content-left d-flex align-items-center">
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="{{ route('chef.dashboard') }}" class="header-logo">
                        <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="desktop-logo">
                        <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="toggle-logo">
                        <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="desktop-dark">
                        <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="toggle-dark">
                    </a>
                </div>
            </div>
            <div class="header-element">
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                    <span></span>
                </a>
            </div>
        </div>

        <div class="header-content-right d-flex align-items-center">
            <div class="header-element header-search">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bx bx-search-alt-2 header-link-icon"></i>
                </a>
            </div>

            <div class="header-element country-selector d-flex align-items-center">
                <a class="" id="google_translate_element"></a>
                <li class="nav-item nav-item-box">
                    <a href="javascript:void(0);" id="btnFullscreen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
            </div>

            <div class="header-element header-theme-mode">
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <i class="bx bx-moon header-link-icon"></i>
                    </span>
                    <span class="dark-layout">
                        <i class="bx bx-sun header-link-icon"></i>
                    </span>
                </a>
            </div>

            <div class="header-element notifications-dropdown">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" id="messageDropdown" aria-expanded="false">
                    <i class="bx bx-bell header-link-icon"></i>
                    <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span>
                </a>
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                            <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        <!-- Notification items -->
                        <!-- Example of a notification item -->
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has Been Shipped</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Order No: 123456 Has Shipped To Your Delivery Address</span>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Add more notification items as needed -->
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid">
                            <a href="notifications.html" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-element header-fullscreen">
                <a onclick="openFullscreen();" href="#" class="header-link">
                    <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                    <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                </a>
            </div>

            <div class="header-element">
                <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                            <img src="../assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle">
                        </div>
                        <div class="d-sm-block d-none">
                            <p class="fw-semibold mb-0 lh-1">{{ Auth::user() ? Auth::user()->name : 'Profile' }}</p>
                            <span class="op-7 fw-normal d-block fs-11">Admin</span>
                        </div>
                    </div>
                </a>
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end">
                    <li><a class="dropdown-item d-flex" href="{{ url('chef/profile-setting') }}"><i class="ti ti-user-circle fs-18 me-2 op-7"></i> My Profile</a></li>
                    <hr class="m-0">
                    <li>
                        <form method="POST" action="{{ route('chef.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex" style="border: none; background: none; cursor: pointer;">
                                <i class="ti ti-logout fs-18 me-2 op-7"></i> Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div class="header-element">
                <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                    <i class="bx bx-cog header-link-icon"></i>
                </a>
            </div>
        </div>
    </div>
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
</header>
