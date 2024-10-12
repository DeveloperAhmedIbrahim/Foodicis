<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - POS Admin Template</title>
    <link rel="stylesheet" {{-- href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css"> --}} <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('asset/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- FontAwesome 6.4.2 (latest as of 2024) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>

<body class="account-page">
    <!-- <div id="global-loader">
        <div class="whirly-loader"></div>
    </div> -->

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper bg-img">
                <div class="login-content">
                    <div class="login-userset">

                        <a href="index.html" class="login-logo logo-white">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/asset/img/logo-white.png"
                                alt="Logo">
                        </a>
                        <div class="login-userheading">
                            <h3>Sign In</h3>
                            <h4>Access the panels using your email and passcode.</h4>
                        </div>



                        <div class="form-login">
                            <a href="{{ route('admin.login') }}" class="btn btn-login">Admin</a>
                            <a href="{{ route('manager.login') }}" class="btn btn-login">manager</a>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="{{ asset('asset/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/feather.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/theme-script.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="3cbd6268472181afad2209b2-|49" defer></script>
</body>

</html>
