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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Salse report</h4>
                            {{-- <a href="{{ route('chef.dish.add-dish') }}" class="btn btn-primary ms-auto">Add</a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="managerTable" class="nowrap table table-hover">
                                    <thead>

                                        <tr>
                                            <th>Order ID </th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Extra Item</th>
                                            <th>Extra item Price</th>
                                            <th>Manager Name</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            // Initialize total variables
                                            $totalQuantity = 0;
                                            $totalPrice = 0;
                                            $totalExtraItemPrice = 0;
                                        @endphp

                                        @foreach ($sales as $sale)
                                            <tr>
                                                <td>
                                                    @php
                                                        $code = DB::table('orders')
                                                            ->where('id', $sale->order_id)
                                                            ->pluck('order_code')
                                                            ->first();
                                                    @endphp
                                                    {{ $code }}
                                                </td>
                                                <td>
                                                    @php
                                                        $ingr = DB::table('ingredient_names')
                                                            ->where('id', $sale->product_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $ingr }}
                                                </td>
                                                <td>{{ $sale->quantity }}</td>
                                                <td>{{ $sale->price }} AED</td>
                                                <td>{{ $sale->extra_item }}</td>
                                                <td>{{ $sale->extra_item_price }} AED</td>
                                                <td>
                                                    @php
                                                        $manager = DB::table('managers')
                                                            ->where('id', $sale->manager_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $manager }}
                                                </td>
                                                <td>{{ $sale->created_at->format('Y-m-d') }}</td>
                                            </tr>

                                            @php
                                                // Add the current sale's values to the total
                                                $totalQuantity += $sale->quantity;
                                                $totalPrice += $sale->price;
                                                $totalExtraItemPrice += $sale->extra_item_price;
                                            @endphp
                                        @endforeach

                                        <!-- Total row -->
                                        <tr>
                                            <td colspan="2"><strong>Total:</strong></td>
                                            <td><strong>{{ $totalQuantity }}</strong></td>
                                            <td><strong>{{ $totalPrice }}</strong> AED</td>
                                            <td></td>
                                            <td><strong>{{ $totalExtraItemPrice }}</strong> AED</td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center my-4">
                                <form action="{{ url('manager/download-sales-report') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="start_date" value="{{ request('start_date') }}">
                                    <input type="hidden" name="end_date" value="{{ request('end_date') }}">
                                    <button type="submit" class="btn btn-primary">Download PDF</button>
                                </form>
                            </div>
                            <div class="container my-4">
                                <h2 class="text-center mb-4">Order Report</h2>

                                <table id="managerTable" class="nowrap table table-hover">
                                    <thead>

                                        <tr>
                                            <th>Manager Name </th>
                                            <th>Sub-Total</th>
                                            <th>Tax</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Order code</th>
                                            <th>Created At</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalSubtotal = 0;
                                            $totalTax = 0;
                                            $totalAmount = 0;
                                        @endphp

                                        @foreach ($orders as $order)
                                            @php
                                                $totalSubtotal += $order->subtotal;
                                                $totalTax += $order->tax;
                                                $totalAmount += $order->total;
                                            @endphp

                                            <tr>
                                                <td>
                                                    @php
                                                        $manager = DB::table('managers')
                                                            ->where('id', $order->manager_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $manager }}
                                                </td>

                                                <td>{{ $order->subtotal }} AED</td>
                                                <td>{{ $order->tax }} AED</td>
                                                <td>{{ $order->total }} AED</td>
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
                                                <td>{{ $order->order_code }}</td>
                                                <td>{{ $order->created_at->format('Y-m-d h:i:s A') }}</td>
                                            </tr>
                                        @endforeach

                                        <!-- Total Row -->
                                        <tr>
                                            <td><strong>Total</strong></td>
                                            <td><strong>{{ $totalSubtotal }} AED</strong></td>
                                            <td><strong>{{ $totalTax }}</strong> AED</td>
                                            <td><strong>{{ $totalAmount }}</strong> AED</td>
                                            <td colspan="3"></td> <!-- Empty columns for other fields -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center my-4">
                                <form action="{{ url('manager/download-order-report') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="start_date" value="{{ request('start_date') }}">
                                    <input type="hidden" name="end_date" value="{{ request('end_date') }}">
                                    <button type="submit" class="btn btn-primary">Download PDF</button>
                                </form>
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
