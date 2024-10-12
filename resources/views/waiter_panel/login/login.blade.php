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
                        <div class="login-logo logo-normal">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/asset/img/logo-white.png"
                                alt="Logo">
                        </div>
                        <a href="index.html" class="login-logo logo-white">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/asset/img/logo-white.png"
                                alt="Logo">
                        </a>
                        <div class="login-userheading">
                            <h3>Sign In</h3>
                            <h4>Access the Dreamspos panel using your email and passcode.</h4>
                        </div>
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-login mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="form-addons">
                                    <input type="text" class="form-control" name="email" required>
                                    <img src="{{ asset('asset/img/mail.svg') }}" alt="Email Icon">
                                </div>
                            </div>
                            <div class="form-login mb-3">
                                <label class="form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control" name="password" required>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login authentication-check">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                <input type="checkbox" class="form-check-input" name="remember">
                                                <span class="checkmarks"></span>Remember me
                                            </label>
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Sign In</button>
                            </div>
                        </form>
                        <div class="signinform">
                            <h4>New on our platform? <a href="register.html" class="hover-a">Create an account</a></h4>
                        </div>
                        {{-- <div class="form-setlogin or-text">
                            <h4>OR</h4>
                        </div> --}}
                        {{-- <div class="form-sociallink">
                            <ul class="d-flex">
                                <li>
                                    <a href="javascript:void(0);" class="facebook-logo">
                                        <img src="{{ asset('asset/img/icons/facebook-logo.svg') }}" alt="Facebook Logo">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('asset/img/icons/google.png') }}" alt="Google Logo">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="apple-logo">
                                        <img src="{{ asset('asset/img/icons/apple-logo.svg') }}" alt="Apple Logo">
                                    </a>
                                </li>
                            </ul>
                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                            </div>
                        </div> --}}
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
