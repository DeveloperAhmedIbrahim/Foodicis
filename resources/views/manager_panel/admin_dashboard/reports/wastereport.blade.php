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
                            <h4 class="card-title mb-0">Waste report</h4>
                            {{-- <a href="{{ route('chef.dish.add-dish') }}" class="btn btn-primary ms-auto">Add</a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="managerTable" class="nowrap table table-hover">
                                    <thead>

                                        <tr>
                                            <th>Dish </th>
                                            <th>Ingredian</th>
                                            <th>unit</th>
                                            <th>Quantity</th>
                                            <th>purpose</th>
                                            <th>Chef</th>
                                            <th>Created At</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wastes as $waste)
                                            <tr>
                                                <td>
                                                    @php
                                                        $dishes = DB::table('dishes')
                                                            ->where('id', $waste->dish_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $dishes }}</td>
                                                <td>
                                                    @php
                                                        $ingredient_names = DB::table('ingredient_names')
                                                            ->where('id', $waste->waste_ingr_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $ingredient_names }}</td>
                                                <td>


                                                    @php
                                                        $units = DB::table('units')
                                                            ->where('id', $waste->waste_unit)
                                                            ->pluck('unit')
                                                            ->first();
                                                    @endphp
                                                    {{ $units }}</td>



                                                <td>{{ $waste->waste_qty }}</td>

                                                <td>{{ $waste->purpose }}</td>
                                                <td>

                                                    @php
                                                        $chef = DB::table('chefs')
                                                            ->where('id', $waste->chef_id)
                                                            ->pluck('name')
                                                            ->first();
                                                    @endphp
                                                    {{ $chef }}</td>
                                                <td>{{ $waste->created_at->format('Y-m-d') }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center my-4">
                                <form action="{{ url('manager/download-waste-report') }}" method="POST">
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
