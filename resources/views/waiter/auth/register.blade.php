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
    <title>Login - Pos admin template</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body class="account-page">
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper register-wrap bg-img">
                <div class="login-content">
                    <form method="POST" action="{{ route('waiter.register') }}">
                        @csrf
                        <div class="login-userset">

                            <a href="index.html" class="login-logo logo-white">
                                <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt>
                            </a>
                            <div class="login-userheading">
                                <h3>Register Order taker</h3>
                                <h4>Create New Account</h4>
                            </div>
                            <div class="form-login">
                                <label>Name</label>
                                <div class="form-addons">
                                    <input name="name" type="text" class="form-control">
                                    {{-- <img src="assets/img/icons/user-icon.svg" alt="img"> --}}
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Email Address</label>
                                <div class="form-addons">
                                    <input name="email" type="text" class="form-control">
                                    <img src="{{ asset('asset/img/mail.svg') }}" alt="Email Icon">

                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="pass-input">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Confirm Passworrd</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-inputs">
                                    <span class="fas toggle-passwords fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login authentication-check">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="custom-control custom-checkbox justify-content-start">
                                            <div class="custom-control custom-checkbox">
                                                <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>I agree to the <a href="#"
                                                        class="hover-a">Terms & Privacy</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Sign Up</button>
                            </div>
                            <div class="signinform">
                                <h4>Already have an account ? <a href="{{ route('waiter.login') }}" class="hover-a">Sign
                                        In Instead</a>
                                </h4>
                            </div>


                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                            </div>
                        </div>
                    </form>
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
