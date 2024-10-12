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
            <h1 class="page-title fw-semibold fs-18 mb-0">Profile Setting</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label" for="chef-name">First Name</label>
                    <input type="text" id="chef-name" class="form-control" value="{{ $chef->name }}" readonly>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label for="chef-email">Email</label>
                    <input type="email" id="chef-email" class="form-control" value="{{ $chef->email }}" readonly>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label" for="chef-password">Password</label>
                    <input type="text" id="chef-password" class="form-control" value="{{ $chef->password }}" readonly>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label" for="chef-status">Status</label>
                    <input type="text" id="chef-status" class="form-control" value="{{ $chef->status == 1 ? 'Active' : 'Inactive' }}" readonly>
                </div>
            </div>

            <div class="col-12">
                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection
