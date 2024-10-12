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
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Purchase</h4>
                        <h6>Create new Purchase</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    
                </ul>
            </div>

            <div class="card">
                <div class="card-body add-product pb-0">


                    <div class="accordion-card-one accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-controls="collapseFour">
                                    <div class="text-editor add-list">
                                        <div class="addproduct-icon list">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-list add-info">
                                                    <line x1="8" y1="6" x2="21" y2="6">
                                                    </line>
                                                    <line x1="8" y1="12" x2="21" y2="12">
                                                    </line>
                                                    <line x1="8" y1="18" x2="21" y2="18">
                                                    </line>
                                                    <line x1="3" y1="6" x2="3.01" y2="6">
                                                    </line>
                                                    <line x1="3" y1="12" x2="3.01" y2="12">
                                                    </line>
                                                    <line x1="3" y1="18" x2="3.01" y2="18">
                                                    </line>
                                                </svg><span>Purchase Ingredidients</span></h5>
                                            <a href="javascript:void(0);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="text-editor add-list add">
                                        <form class="ajaxForm" action="{{ route('manager.PurchaseIngredidient.save') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
                                            <div class="row">
                                                <!-- Ingredient Name -->
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product">
                                                        <label>Ingredient Name</label>
                                                        <select name="ingredient_id" class="form-control">
                                                            <option value="">Select an ingredient</option>
                                                            @foreach ($ingredient_name as $ingr)
                                                                <option value="{{ $ingr->id }}"
                                                                    @if (isset($purchaseIngredient) && $purchaseIngredient->ingredient_id == $ingr->id) selected @endif>
                                                                    {{ $ingr->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
   <!-- Price per Unit -->
   <div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label for="price_per_unit">Price per Unit</label>
        <input type="number" name="price_per_unit" id="price_per_unit" class="form-control" value="{{ old('price_per_unit', $purchaseIngredient->price_per_unit ?? '') }}">
    </div>
</div>

<!-- Purchase Quantity -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label for="purchase_quantity">Purchase Quantity</label>
        <input type="number" name="purchase_quantity" id="purchase_quantity" class="form-control" value="{{ old('purchase_quantity', $purchaseIngredient->purchase_quantity ?? '') }}" required>
    </div>
</div>

<!-- Expiry Date -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label for="expiry_date">Expiry Date</label>
        <input type="date" name="expiry_date" id="expiry_date" class="form-control" value="{{ old('expiry_date', $purchaseIngredient->expiry_date ?? '') }}" required>
    </div>
</div>

   <!-- Unit -->
   <div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label>Unit</label>
        <select name="unit_id" class="form-control">
            @foreach ($units as $unit)
                <option value="{{ $unit->id }}"
                    @if (isset($purchaseIngredient) && $purchaseIngredient->unit_id == $unit->id) selected @endif>
                    {{ $unit->unit }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<!-- Weight -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label for="weight">Weight/Quantity/ml</label>
        <input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight', $purchaseIngredient->weight ?? '') }}" required>
    </div>
</div>

<!-- Total Amount -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="input-blocks add-product">
        <label for="total_amount">Total Amount</label>
        <input type="number" name="total_amount" id="total_amount" class="form-control" value="{{ old('total_amount', $purchaseIngredient->total_amount ?? '') }}" readonly>
    </div>
</div>
</div>


                                                <!-- Unit -->
                                                {{-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product">
                                                        <label>Unit</label>
                                                        <select name="unit_id" class="form-control">
                                                            @foreach ($units as $unit)
                                                                <option value="{{ $unit->id }}"
                                                                    @if (isset($purchaseIngredient) && $purchaseIngredient->unit_id == $unit->id) selected @endif>
                                                                    {{ $unit->unit }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Stock Availability -->
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product">
                                                        <label>Stock Availability</label>
                                                        <input type="readonly" name="stock_availability"
                                                            class="form-control"
                                                            value="{{ $purchaseIngredient->stock_availability ?? '' }}">
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <!-- Save Button -->
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


                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                      $(document).ready(function() {
            // Remove the previous event that sets the price per unit automatically.
            $('#purchase_quantity, #weight, #price_per_unit').on('input', function() {
                calculateTotalAmount();
            });

            function calculateTotalAmount() {
                var quantity = parseFloat($('#purchase_quantity').val()) || 0;
                var pricePerUnit = parseFloat($('#price_per_unit').val()) || 0;
                var totalAmount = quantity * pricePerUnit;
                $('#total_amount').val(totalAmount.toFixed(2)); // Display two decimal points
            }
        });
                            </script>
