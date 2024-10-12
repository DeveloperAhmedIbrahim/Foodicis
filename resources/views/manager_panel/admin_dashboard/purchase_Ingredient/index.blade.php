@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

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
            <h1 class="page-title fw-semibold fs-18 mb-0">Dish</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dish</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Purchase Ingredient Name</h4>
                <a href="{{ route('manager.PurchaseIngredidient.add') }}" class="btn btn-primary ms-auto">Add</a>
            </div>
            <div class="card-body">
                <div class="table-responsive dataview">
                    <table class="table dashboard-expired-products">
                        <thead>
                            <tr>
                                <th class="no-sort">
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Purchased Amount</th> <!-- New Column for Purchased Amount -->
                                <th>Available Stock</th> <!-- Adjusted Column for Available Stock -->
                                <th>Price per Unit</th>
                                <th class="no-sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingredient_purchase as $ingr)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{ $ingr->id }}</td>
                                    <td>
                                        <div class="productimgname">
                                            {{ $ingr->ingredient->name }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $ingr->amount }} AED <!-- Displaying purchased amount -->
                                    </td>
                                    <td>
                                        {{ $ingr->stock_availability }} {{ $ingr->unit->unit }} <!-- Available Stock -->
                                    </td>
                                    <td>
                                        @if ($ingr->stock_availability > 0)
                                            {{ number_format($ingr->amount / $ingr->stock_availability, 2) }} AED <!-- Price per unit calculation -->
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                            data-bs-target="#remove_data{{ $ingr->id }}">remove</button>
                                    </td>
                                </tr>
                                <div id="remove_data{{ $ingr->id }}" class="modal fade zoomIn" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="NotificationModalbtn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                        trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                                                        style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure
                                                            you
                                                            want to remove this ingredient?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button onclick="ajaxRequest(this)"
                                                        data-url="{{ route('manager.PurchaseIngredidient.destroy', $ingr->id) }}"
                                                        class="btn w-sm btn-danger"
                                                        id="delete-notification">Yes, Delete It!</button>
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
@endsection
