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

    .form-label {
        font-weight: bold;
    }

    .btn-cancel {
        background-color: #f44336; /* Red color */
        color: white;
    }

    .btn-submit {
        background-color: #4CAF50; /* Green color */
        color: white;
    }
</style>

<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Prepare Dish</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Prepare Dish</li>
                    </ol>
                </nav>
            </div>
        </div>

        <form action="{{ route('chef.dish.store_dish') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
            <input type="hidden" name="manager_id" value="{{ Auth::user()->manager_id }}">
            @isset($dish)
                <input type="hidden" value="{{ $dish->id }}" name="dish_id">
            @endisset

            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion-card-one accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-controls="collapseFour">
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
                                        <span>Dish Details</span>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="text-editor add-list">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                                <div class="input-blocks add-product">
                                                    <label class="form-label">Dish Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $dish->name ?? '' }}" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                                <div class="input-blocks add-product">
                                                    <label class="form-label">Category</label>
                                                    <select name="category" class="form-control" id="category-select"
                                                        data-selected-subcategory="{{ $dish->subcategory_id ?? '' }}" required>
                                                        <option value="">Select Category</option>
                                                        @foreach ($category as $c)
                                                            <option value="{{ $c->id }}"
                                                                {{ isset($dish) && $dish->category_id == $c->id ? 'selected' : '' }}>
                                                                {{ $c->cat }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                                <div class="input-blocks add-product">
                                                    <label class="form-label">Subcategory</label>
                                                    <select name="subcategory" class="form-control"
                                                        id="subcategory-select" required>
                                                        <option value="">Select Subcategory</option>
                                                        @if (isset($subcategories))
                                                            @foreach ($subcategories as $s)
                                                                <option value="{{ $s->id }}"
                                                                    {{ isset($dish) && $dish->subcategory_id == $s->id ? 'selected' : '' }}>
                                                                    {{ $s->subcat }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                                <div class="input-blocks add-product">
                                                    <label class="form-label">Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>

                                            @isset($dish)
                                                <div class="col-md-12 mb-3">
                                                    <img style="width: 200px; height: 100px;"
                                                        src="{{ asset('dish_images') }}/{{ $dish->image }}">
                                                </div>
                                            @endisset
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        function loadSubcategories(categoryId) {
            if (categoryId) {
                $.ajax({
                    url: '/get-subcategories-dish/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#subcategory-select').empty();
                        $('#subcategory-select').append('<option value="">Select Subcategory</option>');
                        $.each(data, function(key, subcategory) {
                            $('#subcategory-select').append('<option value="' +
                                subcategory.id + '">' + subcategory.subcat + '</option>');
                        });

                        var selectedSubcategory = $('#category-select').data('selected-subcategory');
                        if (selectedSubcategory) {
                            $('#subcategory-select').val(selectedSubcategory);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            } else {
                $('#subcategory-select').empty();
                $('#subcategory-select').append('<option value="">Select Subcategory</option>');
            }
        }

        $('#category-select').on('change', function() {
            var categoryId = $(this).val();
            loadSubcategories(categoryId);
        });

        var selectedCategoryId = $('#category-select').val();
        loadSubcategories(selectedCategoryId);
    });
</script>
@endsection
