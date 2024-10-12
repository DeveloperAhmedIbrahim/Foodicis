@extends('chef_panel.admin_dashboard.layout.layout')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery and Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>All Order List</h4>
                        <h6>Manage Your Order</h6>
                    </div>
                </div>

            </div>


            <div class="card table-list-card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a href="" class="btn btn-searchset"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></a>
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search"
                                            class="form-control form-control-sm" placeholder="Search"
                                            aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <div class="search-path">
                            <div class="d-flex align-items-center">
                                <a class="btn btn-filter" id="filter_search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-filter filter-icon">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                        </div>
                        <div class="form-sort">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-sliders info-img">
                                <line x1="4" y1="21" x2="4" y2="14"></line>
                                <line x1="4" y1="10" x2="4" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12" y2="3"></line>
                                <line x1="20" y1="21" x2="20" y2="16"></line>
                                <line x1="20" y1="12" x2="20" y2="3"></line>
                                <line x1="1" y1="14" x2="7" y2="14"></line>
                                <line x1="9" y1="8" x2="15" y2="8"></line>
                                <line x1="17" y1="16" x2="23" y2="16"></line>
                            </svg>
                            <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-cvbs"
                                tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-3-9i9k">Sort by Date</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="select2-data-2-1yx0" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                        aria-labelledby="select2-0cx5-container"
                                        aria-controls="select2-0cx5-container"><span class="select2-selection__rendered"
                                            id="select2-0cx5-container" role="textbox" aria-readonly="true"
                                            title="Sort by Date">Sort by Date</span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user info-img">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-4-icph" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-6-zq8c">Choose Name</option>
                                            <option>Lilly</option>
                                            <option>Benjamin</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-5-b0jt"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false" aria-labelledby="select2-ial4-container"
                                                    aria-controls="select2-ial4-container"><span
                                                        class="select2-selection__rendered" id="select2-ial4-container"
                                                        role="textbox" aria-readonly="true" title="Choose Name">Choose
                                                        Name</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-stop-circle info-img">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <rect x="9" y="9" width="6" height="6"></rect>
                                        </svg>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-7-nt1h" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-frh5">Choose Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-8-lf2o"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false" aria-labelledby="select2-4i5n-container"
                                                    aria-controls="select2-4i5n-container"><span
                                                        class="select2-selection__rendered" id="select2-4i5n-container"
                                                        role="textbox" aria-readonly="true" title="Choose Status">Choose
                                                        Status</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-zap info-img">
                                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                        </svg>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-10-vld1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-7ki7">Choose Role</option>
                                            <option>Store Keeper</option>
                                            <option>Salesman</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-11-7uap"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false" aria-labelledby="select2-0qft-container"
                                                    aria-controls="select2-0qft-container"><span
                                                        class="select2-selection__rendered" id="select2-0qft-container"
                                                        role="textbox" aria-readonly="true" title="Choose Role">Choose
                                                        Role</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <a class="btn btn-filters ms-auto"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg> Search </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper"
                            class="dataTables_wrapper dt-bootstrap5 no-footer table-responsive">
                            <table id="orderTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="no-sort sorting sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-sort="ascending" aria-label=": activate to sort column descending">
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Order ID: activate to sort column ascending">Order ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Customer Name: activate to sort column ascending">Customer code
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Total Amount: activate to sort column ascending">Tax
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Total Amount: activate to sort column ascending">Sub Total
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Total Amount: activate to sort column ascending">Total </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Created On: activate to sort column ascending">Created On</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through orders and display them here -->
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox" name="order_ids[]"
                                                        value="{{ $order->id }}">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->order_code }}</td>
                                            <td>{{ number_format($order->tax, 2) }}</td>

                                            <td>{{ number_format($order->subtotal, 2) }}</td>

                                            <td>{{ number_format($order->total, 2) }}</td>
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
                                                <a href="javascript:void(0);" class="btn btn-info btn-sm view-order-btn"
                                                    data-id="{{ $order->id }}">View</a>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-secondary dropdown-toggle btn-sm"
                                                        type="button" id="statusDropdown" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Status
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                                        <li><a class="dropdown-item" href="" data-status="0"
                                                                data-id="{{ $order->id }}">Active</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                data-status="1"
                                                                data-id="{{ $order->id }}">Completed</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                data-status="2" data-id="{{ $order->id }}">Pending</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                                data-status="3"
                                                                data-id="{{ $order->id }}">Cancelled</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                        name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                        class="form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></label></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                            aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                            class="page-link"><i class="fa fa-angle-left"></i> </a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_0" role="link" aria-current="page"
                                            data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                            data-dt-idx="next" tabindex="-1" class="page-link"> <i
                                                class=" fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                1
                                - 10 of 10 items</div>
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
@endsection
