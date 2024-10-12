@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
    <?php
    $total = 0;
    foreach ($ingredient_purchase as $ingr) {
        $total += $ingr->amount;
    }
    
    ?>
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

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Total Purchase: {{ $total }} AED</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive dataview">
                        <table class="table dashboard-expired-products">
                            <thead>
                                <tr>

                                    <th>Ingredient </th>
                                    <th>Weight/Stock Availability</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ingredient_purchase as $ingr)
                                    <tr>


                                        <td>
                                            <div class="productimgname">
                                                {{ $ingr->ingredient->name }}
                                            </div>
                                        </td>
                                        <td>
                                            {{ $ingr->stock_availability }}
                                            {{ $ingr->unit->unit }}
                                        </td>
                                        <td>

                                            {{ $ingr->amount }} AED
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
