<!DOCTYPE html>
<html lang="en">

@include('admin_panel.admin_dashboard.layout.header')

<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        @include('admin_panel.admin_dashboard.layout.navbar')


        @include('admin_panel.admin_dashboard.layout.sidebar')

        @yield('content')


        <div class="customizer-links" id="setdata">
            <ul class="sticky-sidebar">
                <li class="sidebar-icons">
                    <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="Theme">
                        <i data-feather="settings" class="feather-five"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    @include('admin_panel.admin_dashboard.layout.footer')
</body>


</html>
