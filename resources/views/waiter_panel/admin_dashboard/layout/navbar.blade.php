<div class="header">

    <div class="header-left active">
        <a href="https://dreamspos.dreamstechnologies.com/html/template/index.html" class="logo logo-normal">
            <img src="{{ asset('frontendassets/images/logo.png') }}" alt>
        </a>
        <a href="https://dreamspos.dreamstechnologies.com/html/template/index.html" class="logo logo-white">
            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/logo-white.png" alt>
        </a>
        <a href="https://dreamspos.dreamstechnologies.com/html/template/index.html" class="logo-small">
            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/logo-small.png" alt>
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#" class="dropdown">
                    <div class="searchinputs dropdown-toggle" id="dropdownMenuClickable" data-bs-toggle="dropdown"
                        data-bs-auto-close="false">
                        <input type="text" placeholder="Search">
                        <div class="search-addon">
                            <span><i data-feather="x-circle" class="feather-14"></i></span>
                        </div>
                    </div>
                    <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                        <div class="search-info">
                            <h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
                            </h6>
                            <ul class="search-tags">
                                <li><a href="javascript:void(0);">Products</a></li>
                                <li><a href="javascript:void(0);">Sales</a></li>
                                <li><a href="javascript:void(0);">Applications</a></li>
                            </ul>
                        </div>
                        <div class="search-info">
                            <h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
                            <p>How to Change Product Volume from 0 to 200 on Inventory management</p>
                            <p>Change Product Name</p>
                        </div>
                        <div class="search-info">
                            <h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
                            <ul class="customers">
                                <li>
                                    <a href="javascript:void(0);">Aron Varu<img
                                            src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avator1.jpg"
                                            alt class="img-fluid"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Jonita<img
                                            src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-01.jpg"
                                            alt class="img-fluid"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Aaron<img
                                            src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-10.jpg"
                                            alt class="img-fluid"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </li>
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
        

        <a class="" id="google_translate_element"></a>

        <li class="nav-item nav-item-box">
            <a href="javascript:void(0);" id="btnFullscreen">
                <i data-feather="maximize"></i>
            </a>
        </li>
       
     

        <li class="nav-item nav-item-box">
            <a href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html"><i
                    data-feather="settings"></i></a>
        </li>


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
 
    

 
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-info">
                    <span class="user-letter">
                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avator1.jpg"
                            alt class="img-fluid">
                    </span>
                    <span class="user-detail">
                        <span class="user-name">John Smilga</span>
                        <span class="user-role">Super Admin</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img"><img
                                src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avator1.jpg"
                                alt>
                            <span class="status online"></span></span>
                        <div class="profilesets">
                            <h6>John Smilga</h6>
                            <h5>Super Admin</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item"
                        href="{{ url('waiter/profile-setting') }}"> <i class="me-2"
                            data-feather="user"></i> My Profile</a>
 
                    <hr class="m-0">
                    <form method="POST" action="{{ route('waiter.logout') }}">
                        @csrf
                        <a class="dropdown-item" href="route('waiter.logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();"><i
                                class="me-2" data-feather="settings"></i>Logout</a>

                        {{-- 
                        <x-dropdown-link :href="route('chef.logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link> --}}
                    </form>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="https://dreamspos.dreamstechnologies.com/html/template/profile.html">My
                Profile</a>
            <a class="dropdown-item"
                href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html">Settings</a>
            <a class="dropdown-item"
                href="https://dreamspos.dreamstechnologies.com/html/template/signin.html">Logout</a>
        </div>
    </div>

</div>
