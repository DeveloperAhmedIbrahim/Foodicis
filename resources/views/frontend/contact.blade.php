@extends('front_layout.app')
@section('title', 'Contact Us')
@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Section start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden">
            <div class="position-absolute top-0 start-0 end-0 min-h-600px bg-secondary dark:bg-opacity-0 z-0"></div>
            <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block"
                data-anime="targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
                <div class="position-absolute top-0 start-0 rotate-45"
                    style="top: 30% !important; left: 18% !important; transform: scale(1); opacity: 1;">
                    <img class="w-32px text-gray-900 dark:text-white"
                        src="https://unistudio.co/html/lexend/assets/images/template/star-1.svg" alt="star-1"
                        data-uc-svg="">
                </div>
                <div class="position-absolute top-0 end-0 rotate-45"
                    style="top: 15% !important; right: 18% !important; transform: scale(0.999797); opacity: 0.999797;">
                    <img class="w-24px text-gray-900 dark:text-white"
                        src="https://unistudio.co/html/lexend/assets/images/template/star-2.svg" alt="star-2"
                        data-uc-svg="">
                </div>
            </div>
            <div class="section-outer panel pt-9 lg:pt-10 pb-6 sm:pb-8 lg:pb-9">
                <div class="container max-w-xl">
                    <div class="section-inner panel mt-2 sm:mt-4 lg:mt-0"
                        data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                        <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center py-4"
                            style="transform: translateY(0px); opacity: 1;">
                            <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">Contact us</h1>
                            <p class="fs-6 sm:fs-5 text-dark dark:text-white text-opacity-70">Feel free to reach out to us
                                using the options below, and our dedicated team will respond to your inquiries promptly.</p>
                        </div>
                        <div class="panel max-w-750px mx-auto" style="transform: translateY(0px); opacity: 1;">
                            <form action="{{ route('contact.leadstore') }}" method="POST"
                                class="vstack gap-2 p-3 sm:p-6 xl:p-8 rounded-2 border bg-white dark:bg-gray-900 border-secondary dark:border-gray-300 dark:border-opacity-20">
                                @csrf
                                <p class="fs-6 text-dark dark:text-white text-opacity-70 mb-2">Have a question or feedback?
                                    Fill out the form below, and we'll get back to you as soon as possible.</p>
                                <div class="row child-cols-12 md:child-cols-6 g-2">
                                    <div>
                                        <input
                                            class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white"
                                            type="text" placeholder="Full name" name="name" required="">
                                    </div>
                                    <div>
                                        <input
                                            class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white"
                                            type="email" name="email" placeholder="Your email" required="">
                                    </div>
                                </div>
                                <input
                                    class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white"
                                    type="text" name="subject" placeholder="Subject">
                                <textarea
                                    class="form-control min-h-150px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white"
                                    placeholder="Your message.." required="" name="message"></textarea>
                                <input class="btn btn-primary btn-md text-white mt-2" value="Send message" type="submit">
                                {{-- <button class="btn btn-primary btn-md text-white mt-2" type="submit">Send message</button> --}}
                                <p class="text-center">Or drop us a message via <a class="uc-link"
                                        href="mailto:hello@lexend.co">email</a>.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper end -->

    <style>
        .toastr {
            font-family: 'Arial', sans-serif;
            border-radius: 5px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
        }

        .toastr-success {
            background-color: #28a745;
            /* Green background for success */
        }

        .toastr-error {
            background-color: #dc3545;
            /* Red background for error */
        }

        /* You can add more custom styles as needed */
    </style>


    <script>
        $(document).ready(function() {
            // Configure Toastr options
            toastr.options = {
                "closeButton": true, // Show close button
                "debug": false,
                "newestOnTop": true,
                "progressBar": true, // Show progress bar
                "positionClass": "toast-top-right", // Position the toast
                "preventDuplicates": true, // Prevent duplicates
                "onclick": null,
                "showDuration": "300", // Animation duration for showing toast
                "hideDuration": "1000", // Animation duration for hiding toast
                "timeOut": "5000", // Auto hide after 5 seconds
                "extendedTimeOut": "1000", // Time to wait before closing on mouse over
                "showEasing": "swing", // Animation easing for showing
                "hideEasing": "linear", // Animation easing for hiding
                "showMethod": "fadeIn", // Show method
                "hideMethod": "fadeOut" // Hide method
            };

            $('form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        toastr.success(response.message); // Show success toast
                        // Optionally, you could redirect or reset the form
                    },
                    error: function(xhr) {
                        // Handle validation errors and display them as toast messages
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                toastr.error(value[0]); // Show error toast
                            });
                        }
                    }
                });
            });
        });
    </script>

@endsection
