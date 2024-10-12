<aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="desktop-logo">
                <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="toggle-logo">
                <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="desktop-dark">
                <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt="logo" class="toggle-dark">
            </a>
        </div>
        <!-- End::main-sidebar-header -->
    
        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">
    
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->
    
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                            <i class="bx bx-home side-menu__icon"></i>
                            <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2"></span></span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Dashboards</a>
                            </li>

                        </ul>
                    </li>
                    <!-- End::slide -->
    
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Manager Requests</span></li>
                    <!-- End::slide__category -->
    
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="{{ route('admin.manager_request') }}" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">View
                                Requests</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            {{-- <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Pages</a>
                            </li> --}}
                            
                        </ul>
                    </li>
                    <!-- End::slide -->

    
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Leads Requests</span></li>
                    <!-- End::slide__category -->
    
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="{{ route('admin.contact.contact_request') }}" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">View
                               Leads Requests</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            {{-- <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Pages</a>
                            </li> --}}
                            
                        </ul>
                    </li>
                    <!-- End::slide -->
    

                        
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Contact Requests</span></li>
                    <!-- End::slide__category -->
    
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="{{ route('admin.contact.lead_contact_request') }}" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label">View
                               Contact Requests</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            {{-- <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Pages</a>
                            </li> --}}
                            
                        </ul>
                    </li>
                    <!-- End::slide -->

                                        <!-- Start::slide__category -->
                                        <li class="slide__category"><span class="category-name">Logout</span></li>
                                        <!-- End::slide__category -->
                        
 <!-- Start::slide -->  
<li class="slide">
        <form method="POST" action="{{ route('admin.logout') }}" class="side-menu__item">
            @csrf
            <button type="submit" class="side-menu__link" style="background: none; border: none; cursor: pointer;">
                <i class="bx bx-log-out side-menu__icon"></i>
                <span class="side-menu__label">Logout</span>
            </button>
        </form>
    </li>
    <!-- End::slide -->

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
            </nav>
            <!-- End::nav -->
    
        </div>
        <!-- End::main-sidebar -->
    
    </aside>