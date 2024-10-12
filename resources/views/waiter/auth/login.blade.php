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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link rel="stylesheet" {{-- href="https://FoodICIS.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css"> --}} <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('asset/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- FontAwesome 6.4.2 (latest as of 2024) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .toast {
            background-color: #f5f5f5 !important;
            /* Light background */
            color: #333 !important;
            /* Darker text */
            border-radius: 8px !important;
            /* Rounded corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important;
            /* Subtle shadow */
        }

        .toast .toast-close-button {
            color: #555 !important;
            /* Close button color */
        }

        .toast-progress {
            background-color: #4caf50 !important;
            /* Green progress bar */
        }
    </style>
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
                            <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt>
                        </div>
                        <a href="index.html" class="login-logo logo-white">
                            <img src="{{ asset('front_assets/images/logo/logo.png') }}" alt>
                        </a>
                        <div class="login-userheading">
                            <h3> Order taker Login </h3>
                            <h4>Access the FoodICIS panel using your email and passcode.</h4>
                        </div>
                        <form method="POST" action="{{ route('waiter.login') }}">
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
                                            <a class="forgot-link" href="{{ route('admin.password.request') }}">Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Sign In</button>
                            </div>
                        </form>
                        <div class="signinform">
                            <h4>New on our platform? <a href="{{ route('waiter.register') }}" class="hover-a">Create
                                    an
                                    account</a></h4>
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
    <div class="modal fade" id="registrationPendingModal" tabindex="-1" aria-labelledby="registrationPendingLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationPendingLabel">Registration Pending</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your registration has been sent to the admin for approval. Please wait for your account to be
                    activated.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Modal ko open karne ke liye
            $('#openModalButton').on('click', function() {
                $('#registrationPendingModal').modal('show');
            });

            // Modal ko close karne ke liye
            $('#registrationPendingModal').on('hide.bs.modal', function() {
                console.log('Modal is closing');
            });
        });
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Include jQuery (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            @if (session('registration_pending'))
                $('#registrationPendingModal').modal('show');
            @endif
        });
    </script>
    <script>
        $(document).ready(function() {
            @if (session('status_error'))
                toastr.error("{{ session('status_error') }}");
            @endif
        });
    </script>

    <script src="{{ asset('asset/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/feather.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/theme-script.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="3cbd6268472181afad2209b2-|49" defer></script>
</body>

</html>
