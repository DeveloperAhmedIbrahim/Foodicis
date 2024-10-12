@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')

<style>
    .badge {
        padding: .25rem .45rem;
        font-weight: 600;
        border-radius: .25rem;
        color: #000 !important;
    }
    .btn-cancel {
        background-color: #f8d7da; /* Light red */
        color: #721c24; /* Dark red */
        border: none;
    }
    .btn-submit {
        background-color: #28a745; /* Bootstrap success green */
        color: white;
        border: none;
    }
    .input-blocks {
        margin-bottom: 15px;
    }
</style>

<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Menu</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Menu</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4>Insert Menu</h4>
                    <h6>Prepare Dish</h6>
                </div>
            </div>
        </div>

        <form action="{{ route('manager.menu.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="manager_id" value="{{ auth()->id() }}">
            @isset($menu)
                <input type="hidden" value="{{ $menu->id }}" name="menu_id">
            @endisset

            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion-card-one accordion" id="accordionExample4">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
                                    <div class="text-editor add-list">
                                        <div class="addproduct-icon list">
                                            <h6><span>Serving</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <div class="text-editor add-list add">
                                        <!-- Dish Selection -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Dish Name</label>
                                                    <select name="dish_id" class="form-control">
                                                        @foreach ($dishname as $name)
                                                            <option value="{{ $name->id }}" {{ isset($menu->dish_id) && $menu->dish_id == $name->id ? 'selected' : '' }}>
                                                                {{ $name->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Serving -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Serving</label>
                                                    <input type="text" value="{{ $menu->serving ?? '' }}" name="serving" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Price -->
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Price</label>
                                                    <input type="text" value="{{ $menu->price ?? '' }}" name="price" class="form-control" id="price" oninput="calculateFinalPrice()">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Profit Percentage -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Profit Percentage</label>
                                                    <input type="number" name="profit_percentage" class="form-control" id="profitPercentage" value="{{ $menu->profit_percentage ?? '' }}" oninput="calculateFinalPrice()">
                                                </div>
                                            </div>

                                            <!-- Final Price (Read-only) -->
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Final Price</label>
                                                    <input type="text" value="{{ $menu->final_price ?? '' }}" name="final_price" class="form-control" id="finalPrice" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-lg-12">
                    <div class="btn-addproduct mb-4 text-center">
                        <button type="button" class="btn btn-cancel me-2">Cancel</button>
                        <input type="submit" value="Submit" class="btn btn-submit">
                    </div>
                </div>
            </div>
        </form>

        <!-- JavaScript to Calculate Final Price -->
        <script>
            function calculateFinalPrice() {
                const price = parseFloat(document.getElementById('price').value) || 0;
                const profitPercentage = parseFloat(document.getElementById('profitPercentage').value) || 0;

                // Calculate the final price after applying the profit percentage
                const finalPrice = price + (price * (profitPercentage / 100));
                document.getElementById('finalPrice').value = finalPrice.toFixed(2); // Format to two decimal places
            }
        </script>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
