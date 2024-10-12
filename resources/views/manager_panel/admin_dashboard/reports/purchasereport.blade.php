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
                            <h4 class="card-title mb-0">Purchase report</h4>
                       
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="managerTable" class="nowrap table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ingredient </th>                                           
                                            <th>Stock Availability</th
                                            <th>Purchase Quantity</th>
                                            <th>Unit</th>
                                            <th>Expiry Date</th>
                                            <th>Amount</th>
                                            <th>Weight</th>
                                            <th>Manager</th>
                                            <th>Chef</th>
                                            <th>Purchase Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalQuantity = 0;
                                            $totalAmount = 0;
                                            $totalWeight = 0;
                                        @endphp

                                        @foreach ($purchases as $purchase)
                                            @php
                                                $totalQuantity += $purchase->purchase_quantity;
                                                $totalAmount += $purchase->amount;
                                                $totalWeight += $purchase->weight;
                                            @endphp

                                            <tr>
                                                <td>
                                                    @php
                                                        $name = DB::table('ingredient_names')
                                                            ->where('id', $purchase->ingredient_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $name }}
                                                </td>
                                                
                                                <td>{{ $purchase->stock_availability }}</td>
                                                <td>{{ $purchase->purchase_quantity }}</td>
                                                <td>
                                                    @php
                                                        $unit = DB::table('units')
                                                            ->where('id', $purchase->unit_id)
                                                            ->pluck('unit')
                                                            ->first();
                                                    @endphp
                                                    {{ $unit }}
                                                </td>
                                                <td>{{ $purchase->expiry_date }}</td>
                                                <td>{{ $purchase->amount }} AED</td>
                                                
                                                <td>{{ $purchase->weight }}</td>
                                                <td>
                                                    @php
                                                        $manager = DB::table('managers')
                                                            ->where('id', $purchase->manager_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $manager }}
                                                </td>
                                                <td>
                                                    @php
                                                        $chef = DB::table('chefs')
                                                            ->where('id', $purchase->chef_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $chef }}
                                                </td>
                                                <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                                                
                                            </tr>
                                        @endforeach

                                        <!-- Total Row -->
                                        <tr>
                                            <td><strong>Total</strong></td>
                                            <td><strong>{{ $totalQuantity }}</strong> </td>
                                            <td></td> <!-- Empty column for expiry date -->
                                            <td><strong>{{ $totalAmount }}</strong> AED</td>
                                            <td></td> <!-- Empty column for unit -->
                                            <td></td> <!-- Empty column for stock availability -->
                                            {{-- <td><strong>{{ $totalWeight }}</strong></td> --}}
                                            <td colspan="4"></td>
                                            <!-- Empty columns for manager_id, chef_id, created_at -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center my-4">
                                <form action="{{ url('manager/download-purchase-report') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="start_date" value="{{ request('start_date') }}">
                                    <input type="hidden" name="end_date" value="{{ request('end_date') }}">
                                    <button type="submit" class="btn btn-primary">Download PDF</button>
                                </form>
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
