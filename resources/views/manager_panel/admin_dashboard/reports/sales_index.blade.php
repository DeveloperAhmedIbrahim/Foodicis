@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
   
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
            <h1 class="page-title fw-semibold fs-18 mb-0">Ingredidient</h1>
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
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>sales Report</h4>
                    </div>
                </div>
                <ul class="table-top-head">

                </ul>
            </div>

            <form class="" action="{{ route('manager.sales_report') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion-card-one accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-controls="collapseFour">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list">
                                                <h6>
                                                    <span>Sales Report</span>
                                                </h6>
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
                                                        <label>Start Date</label>
                                                        <input type="date" class="form-control" name="start_date"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product">
                                                        <label>End Date</label>
                                                        <input type="date" class="form-control" name="end_date"
                                                            value="">
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
                        <button type="button" class="btn btn-cancel me-2" style="background-color: #f8d7da; color: #721c24; border: none;">Cancel</button>
                        <input type="submit" value="Submit" class="btn btn-submit" style="background-color: #28a745; color: white; border: none;">
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
