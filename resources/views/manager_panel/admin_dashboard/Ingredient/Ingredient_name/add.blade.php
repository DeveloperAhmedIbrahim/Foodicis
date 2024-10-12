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
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Ingredidient</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Ingredidient</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->


            <form class="ajaxForm" action="{{ route('manager.IngredientName.save') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="manager_id" value="{{ auth()->id() }}">
                @isset($ingredient_name)
                    <input type="hidden" value="{{ $ingredient_name->id }}" name="ingredient_name_id">
                @endisset
                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion-card-one accordion" id="accordionExample4">
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
                                                        <line x1="8" y1="6" x2="21" y2="6">
                                                        </line>
                                                        <line x1="8" y1="12" x2="21" y2="12">
                                                        </line>
                                                        <line x1="8" y1="18" x2="21" y2="18">
                                                        </line>
                                                        <line x1="3" y1="6" x2="3.01" y2="6">
                                                        </line>
                                                        <line x1="3" y1="12" x2="3.01" y2="12">
                                                        </line>
                                                        <line x1="3" y1="18" x2="3.01" y2="18">
                                                        </line>
                                                    </svg>
                                                    <span>Ingredient Name</span>
                                                </h5>
                                                <a href="javascript:void(0);">

                                                </a>
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
                                                    <div class="input-blocks add-product">
                                                        <label>Ingredient Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $ingredient_name->name ?? '' }}">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-6 col-sm-6 col-12">
                                                    <div class="input-blocks add-product">
                                                        <label> <span class="text-danger">*</span>Add price you sell in
                                                            (add extra) per Ingredidient </label>
                                                        <input type="number" class="form-control" name="price"
                                                            value="{{ $ingredient_name->price ?? '' }}">
                                                    </div>
                                                </div> --}}
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
                         <button type="button" class="btn btn-cancel me-2" style="background-color: #f8d7da; color: #721c24; border: none;">Cancel</button>
                        <input type="submit" value="Submit" class="btn btn-submit" style="background-color: #28a745; color: white; border: none;">
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
