@extends('chef_panel.admin_dashboard.layout.layout')
@section('content')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
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
            <h1 class="page-title fw-semibold fs-18 mb-0"> Dish</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-i tem active" aria-current="page">Dish</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->



        <div class="card table-list-card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            {{-- <a href="" class="btn btn-searchset"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></a> --}}
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search"
                                        class="form-control form-control-sm" placeholder="Search"
                                        aria-controls="DataTables_Table_0"></label></div>
                        </div>
                    </div>

                    
                </div>

                <div class="card" id="filter_inputs">

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper"
                        class="dataTables_wrapper dt-bootstrap5 no-footer table-responsive">
        <table id="orderTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="no-sort sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending">
                        <label class="checkboxs">
                            <input type="checkbox" id="select-all" aria-label="Select all orders">
                            <span class="checkmarks"></span>
                        </label>
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending">Order ID</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending">Customer Code</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tax: activate to sort column ascending">Tax</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sub Total: activate to sort column ascending">Sub Total</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending">Total</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Chef: activate to sort column ascending">Chef</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created On: activate to sort column ascending">Created On</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                    <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            <label class="checkboxs">
                                <input type="checkbox" name="order_ids[]" value="{{ $order->id }}" aria-label="Select order {{ $order->id }}">
                                <span class="checkmarks"></span>
                            </label>
                        </td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_code }}</td>
                        <td>{{ number_format($order->tax, 2) }}</td>
                        <td>{{ number_format($order->subtotal, 2) }}</td>
                        <td>{{ number_format($order->total, 2) }}</td>
                        <td>
                            @php
                                $chefName = DB::table('chefs')->where('id', $order->chef_id)->pluck('name')->first();
                            @endphp
                            {{ $chefName ?? 'No Chef Assigned' }}
                        </td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
                            @if ($order->status == '1')
                                <span class="badge bg-success">Completed</span>
                            @elseif ($order->status == '2')
                                <span class="badge bg-warning">Pending</span>
                            @elseif($order->status == '3')
                                <span class="badge bg-danger">Cancelled</span>
                            @else
                                <span class="badge bg-primary">Active</span>
                            @endif
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="btn btn-info btn-sm view-order-btn" data-id="{{ $order->id }}" aria-label="View order {{ $order->id }}">View</a>
                            <div class="dropdown d-inline">
                                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="statusDropdown{{ $order->id }}" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Change status for order {{ $order->id }}">
                                    Status
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="statusDropdown{{ $order->id }}">
                                    <li><a class="dropdown-item" href="javascript:void(0);" data-status="0" data-id="{{ $order->id }}">Active</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" data-status="1" data-id="{{ $order->id }}">Completed</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" data-status="2" data-id="{{ $order->id }}">Pending</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" data-status="3" data-id="{{ $order->id }}">Cancelled</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="dataTables_length" id="DataTables_Table_0_length">
            <label>
                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </label>
        </div>

        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                    <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                    <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>
        </div>

        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
            1 - 10 of {{ count($orders) }} items
        </div>
    </div>
</div>

                </div>
                <!-- Order Details Modal -->
                <div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog"
                    aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderDetailsModalLabel">Order Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Order Items will be loaded here via AJAX -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>extra Item</th>
                                            <th>Extra items price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order-items-table">
                                        <!-- Order items will be appended here -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // View order items
            $('.view-order-btn').on('click', function() {
                var orderId = $(this).data('id');

                $.ajax({
                    url: '/orders/' + orderId + '/items',
                    type: 'GET',
                    success: function(response) {
                        $('#order-items-table').empty();

                        $.each(response.items, function(index, item) {
                            $('#order-items-table').append(
                                '<tr>' +
                                '<td><img src="/dish_images/' + item.image +
                                '" alt="' + item.name +
                                '" style="width: 50px; height: auto;"> ' + item
                                .name + '</td>' +
                                '<td>' + item.quantity + '</td>' +
                                '<td>$' + item.price + '</td>' +
                                '<td>' + item.extra_item + '</td>' +
                                '<td>' + item.extra_item_price + '</td>' +
                                '</tr>'
                            );
                        });

                        $('#orderDetailsModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            });

            // Update order status
            $(document).on('click', '.dropdown-item', function() {
                var orderId = $(this).data('id');
                var status = $(this).data('status');

                $.ajax({
                    url: '/orders/' + orderId + '/update-status',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status
                    },
                    success: function(response) {
                        // Optionally, you can update the UI or show a success message
                        alert('Order status updated successfully!');
                        location.reload(); // Reload the page to reflect changes
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            });
        });
    </script>

    {{-- <script>
        $(document).ready(function() {
            $('.view-order-btn').on('click', function() {
                var orderId = $(this).data('id');

                $.ajax({
                    url: '/orders/' + orderId + '/items', // The route to get order items
                    type: 'GET',
                    success: function(response) {
                        // Clear previous items
                        $('#order-items-table').empty();

                        // Append new items to the table
                        $.each(response.items, function(index, item) {
                            $('#order-items-table').append(
                                '<tr>' +
                                '<td><img src="/dish_images/' + item.image +
                                '" alt="' + item.name +
                                '" style="width: 50px; height: auto;"> ' + item
                                .name + '</td>' +
                                '<td>' + item.quantity + '</td>' +
                                '<td>$' + item.price + '</td>' +
                                '</tr>'
                            );
                        });

                        // Open the modal
                        $('#orderDetailsModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            });
        });

        
    </script> --}}
@endsection