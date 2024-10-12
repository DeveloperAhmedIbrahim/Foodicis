<aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ route('chef.dashboard') }}" class="header-logo">
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
                        <a href="{{ route('manager.dashboard') }}" class="side-menu__item">
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
                    <li class="slide__category"><span class="category-name">Manage POS</span></li>
                    <!-- End::slide__category -->
    
                <!-- Start::slide -->
                <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bi bi-cart4"></i>
    
                            <span class="side-menu__label"> Manage POS</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Manager POS</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('manager.pos.index') }}" class="side-menu__item">POS</a>
                            </li>

                        </ul>
                    </li>
                    <!-- End::slide -->
    
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Inventory Management</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-map side-menu__icon"></i>
                        <span class="side-menu__label">Inventory </span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Inventory </a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.IngredientName.index') }}" class="side-menu__item">Ingredidients name</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.PurchaseIngredidient.index') }}" class="side-menu__item">Purchase
                                Ingredidients</a>
                        </li>
                        <li class="slide">
                                <a href="{{ route('manager.PurchaseIngredidient.total') }}" class="side-menu__item">Total Purchase
                                        Ingredidients</a>
                            </li>

                    </ul>
                </li>
                <!-- End::slide -->
               

                
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Menu Management</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-map side-menu__icon"></i>
                        <span class="side-menu__label">Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.menu.index') }}" class="side-menu__item">View
                                Menu</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.menu.add') }}" class="side-menu__item">Insert Dish</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->



                
                
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Order Managementt</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-map side-menu__icon"></i>
                        <span class="side-menu__label">Order </span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Order</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.orders.index') }}" class="side-menu__item">View
                                Orders</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('manager.orders.active_order') }}" class="side-menu__item">Active
                                Order</a>
                        </li>
                        <li class="slide">
                                <a href="{{ route('manager.orders.completed_order') }}" class="side-menu__item">Completed Order</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('manager.orders.pending_order') }}" class="side-menu__item">Return Order</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('manager.orders.cancelled_order') }}" class="side-menu__item">Cancelled Order</a>
                            </li>

                    </ul>
                </li>
                <!-- End::slide -->
    
    

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Reports Management</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="bx bx-map side-menu__icon"></i>
                    <span class="side-menu__label">Reports </span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Reports</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.waste_report_view') }}" class="side-menu__item">Wastage
                                Report</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.purchase_report_view') }}" class="side-menu__item">Purchase Report
                            </a>
                    </li>
                    <li class="slide">
                            <a href="{{ route('manager.sales_report_view') }}" class="side-menu__item">Sales Report</a>
                        </li>


                </ul>
            </li>
            <!-- End::slide -->



                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Employee Managment</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="bx bx-map side-menu__icon"></i>
                    <span class="side-menu__label">Employee Managment </span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Employee Managment</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.chef.add') }}" class="side-menu__item">Add Employees</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.chef.index') }}" class="side-menu__item">All Employees
                            </a>
                    </li>
 

                </ul>
            </li>
            <!-- End::slide -->


            
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Ordertaker Managment</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <i class="bx bx-map side-menu__icon"></i>
                    <span class="side-menu__label">Ordertaker Managment </span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Ordertaker Managmentt</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.chef.add') }}" class="side-menu__item">Add Ordertaker</a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('manager.ordertaker.index') }}" class="side-menu__item">All Ordertaker
                            </a>
                    </li>
 

                </ul>
            </li>
            <!-- End::slide -->


                                        <li class="slide__category"><span class="category-name">Logout</span></li>
                                        <!-- End::slide__category -->
                        
 <!-- Start::slide -->  
<li class="slide">
        <form method="POST" action="{{ route('manager.logout') }}" class="side-menu__item">
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
