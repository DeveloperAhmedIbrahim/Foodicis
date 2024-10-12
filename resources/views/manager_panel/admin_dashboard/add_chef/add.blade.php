@extends('manager_panel.admin_dashboard.layout.layout')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<style>
    .badge {
        padding: .25rem .45rem;
        font-weight: 600;
        border-radius: .25rem;
        color: #000 !important;
    }
</style>

<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Chef</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Chef</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <form action="{{ route('manager.chef.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="manager_id" value="{{ auth()->id() }}">
            @isset($chef)
                <input type="hidden" name="chef_id" value="{{ $chef->id }}">
            @endisset

            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion-card-one accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
                                    <div class="text-editor add-list">
                                        <div class="addproduct-icon list">
                                            <h6 >Add Employees</h6>
                                            <a href="javascript:void(0);">
 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="text-editor add-list add">
                                        <div class="row">
                                            <!-- Name Field -->
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $chef->name ?? '') }}" required>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <!-- Email Field -->
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $chef->email ?? '') }}" required>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <!-- Password Field -->
                                            <div class="col-lg-6 col-sm-6 col-12 mt-2">
                                                <div class="input-blocks add-product">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control" required>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <!-- Role Selection -->
                                            <div class="col-lg-6 col-sm-6 col-12 mt-2">
                                                <div class="input-blocks add-product">
                                                    <label for="role">Role</label>
                                                    <select name="role" id="role" required class="form-control">
                                                        <option value="">Select Role</option>
                                                        <option value="chef" {{ isset($chef) && $chef->role == 'chef' ? 'selected' : '' }}>Chef</option>
                                                        <option value="order_taker" {{ isset($chef) && $chef->role == 'order_taker' ? 'selected' : '' }}>Order Taker</option>
                                                    </select>
                                                    @error('role')
                                                        <span class="text-danger">{{ $message }}</span>
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

                <div class="col-lg-12" style="margin-top: 20px;"> <!-- Adjust margin as needed -->
                    <div class="btn-addproduct mb-4">
                        <button type="button" class="btn btn-cancel me-2" style="background-color: #f8d7da; color: #721c24; border: none;">Cancel</button>
                        <input type="submit" value="Submit" class="btn btn-submit" style="background-color: #28a745; color: white; border: none;">
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</div>

<style>
    .toastr {
        font-family: 'Arial', sans-serif;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .toastr-success {
        background-color: #28a745;
    }
    .toastr-error {
        background-color: #dc3545;
    }
</style>

<!-- Toastr CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        // Configure Toastr options
        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: true,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: true,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        };

        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    toastr.success(response.message); // Show success toast
                    // Optionally, redirect or reset the form
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
