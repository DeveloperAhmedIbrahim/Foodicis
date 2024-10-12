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
                        <a href="{{ route('chef.dashboard') }}" class="side-menu__item">
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
                    <li class="slide__category"><span class="category-name">Dish Category</span></li>
                    <!-- End::slide__category -->
    
                <!-- Start::slide -->
                <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-map side-menu__icon"></i>
                            <span class="side-menu__label">Category</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Dish Category</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('chef.Category.all-Category') }}" class="side-menu__item">Category</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('chef.Subcategory.all-Subcategory') }}" class="side-menu__item">Sub Category</a>
                            </li>

                        </ul>
                    </li>
                    <!-- End::slide -->
    
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Manage Dishes</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-map side-menu__icon"></i>
                        <span class="side-menu__label">Manage Dishes</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Manage Dishes</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('chef.dish.all-dish') }}" class="side-menu__item">All Dish</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('chef.PrepareDish.index') }}" class="side-menu__item">Prepare Dish</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->

                
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Manage Order</span></li>
                <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-map side-menu__icon"></i>
                        <span class="side-menu__label">Manage Order</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Manage Order</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('chef.orders.active_order') }}" class="side-menu__item">Active Order</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('chef.orders.completed_order') }}" class="side-menu__item">Completed Order</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->


    

                                        <!-- Start::slide__category -->
                                        <li class="slide__category"><span class="category-name">Logout</span></li>
                                        <!-- End::slide__category -->
                        
 <!-- Start::slide -->  
<li class="slide">
        <form method="POST" action="{{ route('chef.logout') }}" class="side-menu__item">
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
{{-- <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="{{ url('/chef/dashboard') }}" class="subdrop active"><i
                                    data-feather="grid"></i><span>Dashboard</span></a>

                        </li>

                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Dishes Category</h6>
                    <ul>
                        <li><a href="{{ route('chef.Category.all-Category') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>
                                <span>
                                    Catrgory
                                </span></a></li>

                        <li><a href="{{ route('chef.Subcategory.all-Subcategory') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-speaker"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><circle cx="12" cy="14" r="4"></circle><line x1="12" y1="6" x2="12.01" y2="6"></line></svg>
                                <span>
                                    Sub Catrgory
                                </span></a></li>

                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Manage Dishes</h6>
                    <ul>
                        <li><a href="{{ route('chef.dish.all-dish') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>
                                    Add Dish
                                </span></a></li>

                        <li><a href="{{ route('chef.PrepareDish.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>
                                    prepare Dish
                                </span></a></li>

                </li>

                <li class="submenu-open">
                    <h6 class="submenu-hdr">Manage Orders</h6>
                    <ul>
                        <li>
                            <a href="{{ route('chef.orders.active_order') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Active Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chef.orders.completed_order') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Completed Order</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div> --}}

{{-- 
<div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/menu-icon.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#messages" id="messages-tab" data-bs-toggle="tab"
                            data-bs-target="#product" role="tab" aria-selected="false">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/product.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#profile" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#sales" role="tab" aria-selected="false">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/sales1.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab"
                            data-bs-target="#purchase" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/purchase1.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab"
                            data-bs-target="#user" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/users1.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set2" id="set-tab2" data-bs-toggle="tab"
                            data-bs-target="#employee" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/calendars.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab"
                            data-bs-target="#report" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/printer.svg"
                                alt>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab"
                            data-bs-target="#document" role="tab" aria-selected="true">
                            <i data-feather="file-minus"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set5" id="set-tab6" data-bs-toggle="tab"
                            data-bs-target="#permission" role="tab" aria-selected="true">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set6" id="set-tab5" data-bs-toggle="tab"
                            data-bs-target="#settings" role="tab" aria-selected="true">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);" class="active"><span>Dashboard</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/index.html"
                                    class="active">Admin Dashboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-dashboard.html">Sales
                                    Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chat.html">Chat</a>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/video-call.html">Video
                                            Call</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/audio-call.html">Audio
                                            Call</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/call-history.html">Call
                                            History</a></li>
                                </ul>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/calendar.html">Calendar</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/email.html">Email</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/todo.html">To
                                    Do</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/notes.html">Notes</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/file-manager.html">File
                                    Manager</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="product" aria-labelledby="messages-tab">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/product-list.html"><span>Products</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/add-product.html"><span>Create
                                Product</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expired-products.html"><span>Expired
                                Products</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/low-stocks.html"><span>Low
                                Stocks</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/category-list.html"><span>Category</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sub-categories.html"><span>Sub
                                Category</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/brand-list.html"><span>Brands</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/units.html"><span>Units</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/varriant-attributes.html"><span>Variant
                                Attributes</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/warranty.html"><span>Warranties</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/barcode.html"><span>Print
                                Barcode</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/qrcode.html"><span>Print
                                QR Code</span></a></li>
                </ul>
                <ul class="tab-pane" id="sales" aria-labelledby="profile-tab">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/sales-list.html"><span>Sales</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/invoice-report.html"><span>Invoices</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-returns.html"><span>Sales
                                Return</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/quotation-list.html"><span>Quotation</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/pos.html"><span>POS</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/coupons.html"><span>Coupons</span></a>
                    </li>
                </ul>
                <ul class="tab-pane" id="purchase" aria-labelledby="report-tab">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/purchase-list.html"><span>Purchases</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/purchase-order-report.html"><span>Purchase
                                Order</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/purchase-returns.html"><span>Purchase
                                Return</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/manage-stocks.html"><span>Manage
                                Stock</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/stock-adjustment.html"><span>Stock
                                Adjustment</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/stock-transfer.html"><span>Stock
                                Transfer</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/expense-list.html">Expenses</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expense-category.html">Expense
                                    Category</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="user" aria-labelledby="set-tab">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/customers.html"><span>Customers</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/suppliers.html"><span>Suppliers</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/store-list.html"><span>Stores</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/warehouse.html"><span>Warehouses</span></a>
                    </li>
                </ul>
                <ul class="tab-pane" id="employee" aria-labelledby="set-tab2">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/employees-grid.html"><span>Employees</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/department-grid.html"><span>Departments</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/designation.html"><span>Designation</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/shift.html"><span>Shifts</span></a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/attendance-employee.html">Employee
                                    Attendence</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/attendance-admin.html">Admin
                                    Attendence</a></li>
                        </ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leaves-admin.html">Admin
                                    Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leaves-employee.html">Employee
                                    Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leave-types.html">Leave
                                    Types</a></li>
                        </ul>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/holidays.html"><span>Holidays</span></a>
                    </li>
                    <li class="submenu">
                        <a href="https://dreamspos.dreamstechnologies.com/html/template/payroll-list.html"><span>Payroll</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/payroll-list.html">Employee
                                    Salary</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/payslip.html">Payslip</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="report" aria-labelledby="set-tab3">
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-report.html"><span>Sales
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/purchase-report.html"><span>Purchase
                                report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/inventory-report.html"><span>Inventory
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/invoice-report.html"><span>Invoice
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/supplier-report.html"><span>Supplier
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/customer-report.html"><span>Customer
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expense-report.html"><span>Expense
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/income-report.html"><span>Income
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tax-reports.html"><span>Tax
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/profit-and-loss.html"><span>Profit
                                & Loss</span></a></li>
                </ul>
                <ul class="tab-pane" id="permission" aria-labelledby="set-tab4">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/users.html"><span>Users</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/roles-permissions.html"><span>Roles
                                & Permissions</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/delete-account.html"><span>Delete
                                Account Request</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span>Base UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-alerts.html">Alerts</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-accordion.html">Accordion</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-avatar.html">Avatar</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-badges.html">Badges</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-borders.html">Border</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-buttons-group.html">Button
                                    Group</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-breadcrumb.html">Breadcrumb</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-cards.html">Card</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-carousel.html">Carousel</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-colors.html">Colors</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-dropdowns.html">Dropdowns</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-grid.html">Grid</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-images.html">Images</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-lightbox.html">Lightbox</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-media.html">Media</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-modals.html">Modals</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-offcanvas.html">Offcanvas</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-pagination.html">Pagination</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-popovers.html">Popovers</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-progress.html">Progress</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-placeholders.html">Placeholders</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-rangeslider.html">Range
                                    Slider</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-spinner.html">Spinner</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-sweetalerts.html">Sweet
                                    Alerts</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-nav-tabs.html">Tabs</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-toasts.html">Toasts</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-tooltips.html">Tooltips</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-typography.html">Typography</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-video.html">Video</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span>Advanced UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-ribbon.html">Ribbon</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-clipboard.html">Clipboard</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-drag-drop.html">Drag
                                    & Drop</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-rangeslider.html">Range
                                    Slider</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-rating.html">Rating</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-text-editor.html">Text
                                    Editor</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-counter.html">Counter</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-scrollbar.html">Scrollbar</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-stickynote.html">Sticky
                                    Note</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-apex.html">Apex
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-c3.html">Chart
                                    C3</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-js.html">Chart
                                    Js</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-morris.html">Morris
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-flot.html">Flot
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-peity.html">Peity
                                    Charts</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-fontawesome.html">Fontawesome
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-feather.html">Feather
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-ionic.html">Ionic
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-material.html">Material
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-pe7.html">Pe7
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-simpleline.html">Simpleline
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-themify.html">Themify
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-weather.html">Weather
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-typicon.html">Typicon
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-flag.html">Flag
                                    Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span>Forms</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);">Form Elements<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-basic-inputs.html">Basic
                                            Inputs</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-checkbox-radios.html">Checkbox
                                            & Radios</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-input-groups.html">Input
                                            Groups</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-grid-gutters.html">Grid
                                            & Gutters</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-select.html">Form
                                            Select</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-mask.html">Input
                                            Masks</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-fileupload.html">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);">Layouts<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-horizontal.html">Horizontal
                                            Form</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-vertical.html">Vertical
                                            Form</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-floating-labels.html">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/form-validation.html">Form
                                    Validation</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/form-select2.html">Select2</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/form-wizard.html">Form
                                    Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tables-basic.html">Basic
                                    Tables </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/data-tables.html">Data
                                    Table </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane" id="document" aria-labelledby="set-tab5">
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/profile.html"><span>Profile</span></a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email
                                    Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step
                                    Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/lock-screen.html">Lock
                                    Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/error-404.html">404
                                    Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/error-500.html">500
                                    Error </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/countries.html">Countries</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/states.html">States</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/html/template/blank-page.html"><span>Blank
                                Page</span> </a>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/html/template/coming-soon.html"><span>Coming
                                Soon</span> </a>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/html/template/under-maintenance.html"><span>Under
                                Maintenance</span> </a>
                    </li>
                </ul>
                <ul class="tab-pane" id="settings" aria-labelledby="set-tab6">
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>General Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html">Profile</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/security-settings.html">Security</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/notification.html">Notifications</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/connected-apps.html">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Website Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/system-settings.html">System
                                    Settings</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/company-settings.html">Company
                                    Settings </a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/localization-settings.html">Localization</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/prefixes.html">Prefixes</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/preference.html">Preference</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/appearance.html">Appearance</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/social-authentication.html">Social
                                    Authentication</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/language-settings.html">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/invoice-settings.html">Invoice</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/printer-settings.html">Printer</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/pos-settings.html">POS</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/custom-fields.html">Custom
                                    Fields</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/email-settings.html">Email</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sms-gateway.html">SMS
                                    Gateways</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/otp-settings.html">OTP</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/gdpr-settings.html">GDPR
                                    Cookies</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Financial Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/payment-gateway-settings.html">Payment
                                    Gateway</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/bank-settings-grid.html">Bank
                                    Accounts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tax-rates.html">Tax
                                    Rates</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/currency-settings.html">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/storage-settings.html">Storage</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ban-ip-address.html">Ban
                                    IP Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Level 3.1</a></li>
                                            <li><a href="javascript:void(0);">Level 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="sidebar horizontal-sidebar">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <ul class="nav">
            <li class="submenu">
                <a href="https://dreamspos.dreamstechnologies.com/html/template/index.html" class="active subdrop"><i
                        data-feather="grid"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/index.html"
                                    class="active">Admin Dashboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-dashboard.html">Sales
                                    Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chat.html">Chat</a>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/video-call.html">Video
                                            Call</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/audio-call.html">Audio
                                            Call</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/call-history.html">Call
                                            History</a></li>
                                </ul>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/calendar.html">Calendar</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/email.html">Email</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/todo.html">To
                                    Do</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/notes.html">Notes</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/file-manager.html">File
                                    Manager</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img
                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/product.svg"
                        alt="img"><span> Inventory
                    </span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/product-list.html"><span>Products</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/add-product.html"><span>Create
                                Product</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expired-products.html"><span>Expired
                                Products</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/low-stocks.html"><span>Low
                                Stocks</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/category-list.html"><span>Category</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sub-categories.html"><span>Sub
                                Category</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/brand-list.html"><span>Brands</span></a>
                    </li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/units.html"><span>Units</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/varriant-attributes.html"><span>Variant
                                Attributes</span></a></li>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/warranty.html"><span>Warranties</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/barcode.html"><span>Print
                                Barcode</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/qrcode.html"><span>Print
                                QR Code</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img
                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/purchase1.svg"
                        alt="img"><span>Sales &amp; Purchase</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/sales-list.html"><span>Sales</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/invoice-report.html"><span>Invoices</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-returns.html"><span>Sales
                                        Return</span></a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/quotation-list.html"><span>Quotation</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/pos.html"><span>POS</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/coupons.html"><span>Coupons</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/purchase-list.html"><span>Purchases</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/purchase-order-report.html"><span>Purchase
                                        Order</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/purchase-returns.html"><span>Purchase
                                        Return</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/manage-stocks.html"><span>Manage
                                        Stock</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/stock-adjustment.html"><span>Stock
                                        Adjustment</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/stock-transfer.html"><span>Stock
                                        Transfer</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/expense-list.html">Expenses</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expense-category.html">Expense
                                    Category</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img
                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/users1.svg"
                        alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/customers.html"><span>Customers</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/suppliers.html"><span>Suppliers</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/store-list.html"><span>Stores</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/warehouse.html"><span>Warehouses</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Roles &amp; Permissions</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/roles-permissions.html"><span>Roles
                                        & Permissions</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/delete-account.html"><span>Delete
                                        Account Request</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-alerts.html">Alerts</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-accordion.html">Accordion</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-avatar.html">Avatar</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-badges.html">Badges</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-borders.html">Border</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-buttons-group.html">Button
                                    Group</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-breadcrumb.html">Breadcrumb</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-cards.html">Card</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-carousel.html">Carousel</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-colors.html">Colors</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-dropdowns.html">Dropdowns</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-grid.html">Grid</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-images.html">Images</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-lightbox.html">Lightbox</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-media.html">Media</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-modals.html">Modals</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-offcanvas.html">Offcanvas</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-pagination.html">Pagination</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-popovers.html">Popovers</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-progress.html">Progress</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-placeholders.html">Placeholders</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-rangeslider.html">Range
                                    Slider</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-spinner.html">Spinner</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-sweetalerts.html">Sweet
                                    Alerts</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-nav-tabs.html">Tabs</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-toasts.html">Toasts</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-tooltips.html">Tooltips</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-typography.html">Typography</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-video.html">Video</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Advanced UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-ribbon.html">Ribbon</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-clipboard.html">Clipboard</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-drag-drop.html">Drag
                                    & Drop</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-rangeslider.html">Range
                                    Slider</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-rating.html">Rating</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-text-editor.html">Text
                                    Editor</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-counter.html">Counter</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-scrollbar.html">Scrollbar</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ui-stickynote.html">Sticky
                                    Note</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/ui-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-apex.html">Apex
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-c3.html">Chart
                                    C3</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-js.html">Chart
                                    Js</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-morris.html">Morris
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-flot.html">Flot
                                    Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/chart-peity.html">Peity
                                    Charts</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Primary Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-fontawesome.html">Fontawesome
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-feather.html">Feather
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-ionic.html">Ionic
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-material.html">Material
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-pe7.html">Pe7
                                    Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Secondary Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-simpleline.html">Simpleline
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-themify.html">Themify
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-weather.html">Weather
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-typicon.html">Typicon
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/icon-flag.html">Flag
                                    Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"><span>Form Elements</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-basic-inputs.html">Basic
                                            Inputs</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-checkbox-radios.html">Checkbox
                                            & Radios</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-input-groups.html">Input
                                            Groups</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-grid-gutters.html">Grid
                                            & Gutters</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-select.html">Form
                                            Select</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-mask.html">Input
                                            Masks</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-fileupload.html">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"><span> Layouts</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-horizontal.html">Horizontal
                                            Form</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-vertical.html">Vertical
                                            Form</a></li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/form-floating-labels.html">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/form-validation.html">Form
                                    Validation</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/form-select2.html">Select2</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/form-wizard.html">Form
                                    Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tables-basic.html">Basic
                                    Tables </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/data-tables.html">Data
                                    Table </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i data-feather="user"></i><span>Profile</span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li><a
                            href="https://dreamspos.dreamstechnologies.com/html/template/profile.html"><span>Profile</span></a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/signin-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/register-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/forgot-password-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/reset-password-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email
                                    Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/email-verification-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step
                                    Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification.html">Cover</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification-2.html">Illustration</a>
                                    </li>
                                    <li><a
                                            href="https://dreamspos.dreamstechnologies.com/html/template/two-step-verification-3.html">Basic</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/lock-screen.html">Lock
                                    Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/error-404.html">404
                                    Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/error-500.html">500
                                    Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/blank-page.html"><span>Blank
                                        Page</span> </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/coming-soon.html"><span>Coming
                                        Soon</span> </a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/under-maintenance.html"><span>Under
                                        Maintenance</span> </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/countries.html">Countries</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/states.html">States</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/employees-grid.html"><span>Employees</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/department-grid.html"><span>Departments</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/designation.html"><span>Designation</span></a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/shift.html"><span>Shifts</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/attendance-employee.html">Employee
                                    Attendence</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/attendance-admin.html">Admin
                                    Attendence</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leaves-admin.html">Admin
                                    Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leaves-employee.html">Employee
                                    Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/leave-types.html">Leave
                                    Types</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/holidays.html"><span>Holidays</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="https://dreamspos.dreamstechnologies.com/html/template/payroll-list.html"><span>Payroll</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/payroll-list.html">Employee
                                    Salary</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/payslip.html">Payslip</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img
                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/printer.svg"
                        alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sales-report.html"><span>Sales
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/purchase-report.html"><span>Purchase
                                report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/inventory-report.html"><span>Inventory
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/invoice-report.html"><span>Invoice
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/supplier-report.html"><span>Supplier
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/customer-report.html"><span>Customer
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/expense-report.html"><span>Expense
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/income-report.html"><span>Income
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tax-reports.html"><span>Tax
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/html/template/profit-and-loss.html"><span>Profit
                                & Loss</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><img
                        src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/settings.svg"
                        alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>General Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/general-settings.html">Profile</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/security-settings.html">Security</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/notification.html">Notifications</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/connected-apps.html">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Website Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/system-settings.html">System
                                    Settings</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/company-settings.html">Company
                                    Settings </a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/localization-settings.html">Localization</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/prefixes.html">Prefixes</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/preference.html">Preference</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/appearance.html">Appearance</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/social-authentication.html">Social
                                    Authentication</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/language-settings.html">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/invoice-settings.html">Invoice</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/printer-settings.html">Printer</a>
                            </li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/pos-settings.html">POS</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/custom-fields.html">Custom
                                    Fields</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/email-settings.html">Email</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/sms-gateway.html">SMS
                                    Gateways</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/otp-settings.html">OTP</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/gdpr-settings.html">GDPR
                                    Cookies</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Financial Settings</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/payment-gateway-settings.html">Payment
                                    Gateway</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/bank-settings-grid.html">Bank
                                    Accounts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/tax-rates.html">Tax
                                    Rates</a></li>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/currency-settings.html">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a
                                    href="https://dreamspos.dreamstechnologies.com/html/template/storage-settings.html">Storage</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/html/template/ban-ip-address.html">Ban
                                    IP Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Level 3.1</a></li>
                                            <li><a href="javascript:void(0);">Level 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div> --}}