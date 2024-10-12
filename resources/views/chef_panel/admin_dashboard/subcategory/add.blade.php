@extends('chef_panel.admin_dashboard.layout.layout')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<style>
    .dataTables_filter {
        float: right;
        margin-bottom: 10px;
    }

    .dataTables_filter input {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-body {
        text-align: center;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

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
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Sub Category</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Sub Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <form action="{{ route('chef.Subcategory.store_Subcategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
            <input type="hidden" name="manager_id" value="{{ Auth::user()->manager_id }}">
            @isset($Subcategory)
                <input type="hidden" value="{{ $Subcategory->id }}" name="Subcategory_id">
            @endisset
            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                    <div class="text-editor add-list">
                                        <div class="addproduct-icon list">
                                            <h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list add-info">
                                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                </svg>
                                                <span>Sub Category Details</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label>Sub Category Name</label>
                                                <input type="text" class="form-control" name="subcat" value="{{ $Subcategory->subcat ?? '' }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label>Category Name</label>
                                                <select name="cat_id" class="form-control" required>
                                                    <option value="">Select a category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ (isset($Subcategory) && $Subcategory->cat_id == $category->id) ? 'selected' : '' }}>
                                                            {{ $category->cat }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
                    <button type="button" class="btn btn-cancel me-2">Cancel</button>
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

        $('form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('chef.Subcategory.store_Subcategory') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.success);
                        setTimeout(function() {
                            window.location.href = response.redirect;
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
<style>
    .btn-cancel {
        background-color: #f8f9fa; /* Light background for cancel button */
        color: #dc3545; /* Red text for visibility */
        border: 1px solid #dc3545; /* Red border */
    }

    .btn-cancel:hover {
        background-color: #e2e6ea; /* Darker shade on hover */
        color: #c82333; /* Darker red on hover */
    }

    .btn-submit {
        background-color: #007bff; /* Primary color */
        color: #ffffff; /* White text */
        border: none; /* Remove border */
    }

    .btn-submit:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
</style>

@endsection
