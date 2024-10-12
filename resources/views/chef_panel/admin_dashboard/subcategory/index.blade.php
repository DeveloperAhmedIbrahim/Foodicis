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
</style>


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
        <h1 class="page-title fw-semibold fs-18 mb-0">SubCategory</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-i tem active" aria-current="page">SubCategory</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header Close -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">SubCategory</h5>
                            <a href="{{ route('chef.Subcategory.add-Subcategory') }}"
                                class="btn btn-primary ms-auto">Add</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="managerTable" class="nowrap table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategory as $cat)
                                            <tr>
                                                <td>{{ $cat->id }}</td>
                                                <td class="customer_name">
                                                    @php

                                                        $cat_name = DB::table('categories')
                                                            ->where('id', $cat->cat_id)
                                                            ->pluck('cat')
                                                            ->first();
                                                    @endphp
                                                    {{ @$cat_name }}
                                                </td>
                                                <td>{{ $cat->subcat }}</td>


                                                <td>
                                                    <!-- Example actions like edit, delete, etc. -->
                                                    <a href="{{ route('chef.Subcategory.editSubcategory', $cat->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#remove_data{{ $cat->id }}">remove</button>
                                                </td>
                                            </tr>
                                            <div id="remove_data{{ $cat->id }}" class="modal fade zoomIn"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" id="NotificationModalbtn-close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mt-2 text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                    trigger="loop"
                                                                    colors="primary:#f7b84b,secondary:#f06548"
                                                                    style="width:100px;height:100px"></lord-icon>
                                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                    <h4>Are you sure ?</h4>
                                                                    <p class="text-muted mx-4 mb-0">Are you sure
                                                                        you
                                                                        want to remove this member ?</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                <button type="button" class="btn w-sm btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button onclick="ajaxRequest(this)"
                                                                    data-url="{{ route('chef.Subcategory.deleteSubcategory', $cat->id) }}"
                                                                    class="btn
                                                         w-sm btn-danger"
                                                                    id="delete-notification">Yes,
                                                                    Delete
                                                                    It!</button>
                                                            </div>
                                                        </div>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#managerTable').DataTable({
                paging: true, // Enable pagination
                searching: true, // Enable searching
                ordering: true, // Enable column ordering
            });
        });
    </script>
@endsection
