@extends('chef_panel.admin_dashboard.layout.layout')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <style>
        .badge {
            padding: .25rem .45rem;
            font-weight: 600;
            border-radius: .25rem;
            color: #000 !important;
        }

        .input-blocks {
            margin-bottom: 15px;
        }

        .btn-submit {
            background-color: #28a745;
            border: none;
        }

        .btn-cancel {
            background-color: #dc3545;
            border: none;
        }

        .accordion-header {
            cursor: pointer;
        }

        .accordion-button:not(.collapsed) {
            color: #0d6efd;
            background-color: #e9ecef;
        }
    </style>

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Add Category</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->

            <form action="{{ route('chef.Category.store_Category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
                <input type="hidden" name="manager_id" value="{{ Auth::user()->manager_id }}">

                @isset($Category)
                    <input type="hidden" value="{{ $Category->id }}" name="Category_id">
                @endisset

                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-controls="collapseFour">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list">
                                                <h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-list add-info">
                                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                    </svg>
                                                    <span>Category Name</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <div class="text-editor add-list add">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks">
                                                        <label for="categoryName">Category Name</label>
                                                        <input type="text" class="form-control" id="categoryName" name="cat"
                                                            value="{{ $Category->cat ?? '' }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks">
                                                        <label for="imageInput">Image</label>
                                                        <input type="file" class="form-control" id="imageInput" name="image">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-blocks">
                                                        <!-- Display the existing image if it exists -->
                                                        @isset($Category->image)
                                                            <div class="mb-2">
                                                                <img src="{{ asset('category_images/' . $Category->image) }}"
                                                                    alt="Category Image"
                                                                    style="max-width: 150px; height: auto;">
                                                            </div>
                                                        @endisset

                                                        @error('image')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="btn-addproduct mb-4">
                        <button type="button" class="btn btn-cancel me-2" onclick="window.history.back();">Cancel</button>
                        <input type="submit" value="Submit" class="btn btn-submit">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "3000"
            };

            // Handle form submission via AJAX (if required)
            $('#categoryForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('chef.Category.store_Category') }}", // Use the correct route for form submission
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.success);
                            setTimeout(function() {
                                window.location.href = response.redirect; // Redirect after success
                            }, 1500);
                        }
                    },
                    error: function(response) {
                        toastr.error("Something went wrong!");
                    }
                });
            });
        });
    </script>
@endsection
