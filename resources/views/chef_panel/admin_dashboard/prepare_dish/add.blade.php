@extends('chef_panel.admin_dashboard.layout.layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<style>
    .badge {
        padding: .25rem .45rem;
        font-weight: 600;
        border-radius: .25rem;
        color: #000 !important;
    }

    .input-blocks {
        margin-bottom: 15px;
    }

    .btn-submit {
        background-color: #28a745;
        border: none;
    }

    .btn-cancel {
        background-color: #dc3545;
        border: none;
    }

    .accordion-header {
        cursor: pointer;
    }

    .accordion-button:not(.collapsed) {
        color: #0d6efd;
        background-color: #e9ecef;
    }
</style>

<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Category</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
       
        <form id="dish-form" action="{{ route('chef.PrepareDish.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
            <input type="hidden" name="manager_id" value="{{ Auth::user()->manager_id }}">
        
            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion-card-one accordion" id="accordionIngredients">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingIngredients">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIngredients" aria-controls="collapseIngredients">
                                    <h5>Prepare Dish</h5>
                                </div>
                            </div>
                            <div class="accordion-header">
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="input-blocks add-product">
                                        <label>Dish Name</label>
                                        <select name="dish_id" class="form-control">
                                            @foreach ($dishname as $name)
                                                <option value="{{ $name->id }}">{{ $name->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseIngredients" class="accordion-collapse collapse show" aria-labelledby="headingIngredients" data-bs-parent="#accordionIngredients">
                                <div class="accordion-body">
                                    <div id="ingredient-rows">
                                        <div class="row ingredient-row">
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Ingredient Name</label>
                                                    <select name="ingr_id[]" class="form-control ingredient-select">
                                                        <option value="">Select Ingredient</option>
                                                        @foreach ($ingredients as $name)
                                                            <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Available Qty</label>
                                                    <input type="text" class="form-control available-qty" disabled>
                                                    <input type="hidden" name="unit_id[]">
                                                    <input type="hidden" name="price_per_unit[]">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Qty</label>
                                                    <input type="text" class="form-control qty-input" name="qty[]">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Total Price</label>
                                                    <input type="text" class="form-control total-price" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <button type="button" class="btn btn-success mt-4 add-row">+</button>
                                                    <button type="button" class="btn btn-danger mt-4 remove-row">-</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label>Total Amount</label>
                                                <input type="text" id="total-amount" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Extra Ingredients Card -->
                    {{-- <div class="card mt-4">
                        <div class="card-header">
                            <h5>Extra Ingredients</h5>
                        </div>
                        <div class="card-body">
                            <div id="extra-ingredient-rows">
                                <div class="row extra-ingredient-row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="input-blocks add-product">
                                            <label>Ingredient Name</label>
                                            <select name="extra_ingr_id[]" class="form-control extra-ingredient-select">
                                                <option value="">Select Ingredient</option>
                                                @foreach ($ingredients as $name)
                                                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="input-blocks add-product">
                                            <label>Price Per Unit</label>
                                            <input type="text" class="form-control extra-price-per-unit" name="extra_price_per_unit[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="input-blocks add-product">
                                            <button type="button" class="btn btn-success mt-4 add-extra-row">+</button>
                                            <button type="button" class="btn btn-danger mt-4 remove-extra-row">-</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
         --}}

                </div>
            </div>
        
            <!-- Submit and Cancel Buttons -->
            <div class="col-lg-12">
                <div class="btn-addproduct mb-4">
                    <button type="button" class="btn btn-cancel me-2">Cancel</button>
                    <input type="submit" value="Submit" class="btn btn-submit">
                </div>
            </div>
        </form>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Function to calculate total price for extra ingredients
                // Removed since we don't need total price for extra ingredients
        
                // Add event listener for extra ingredients
                // Removed since we don't need quantity input for extra ingredients
        
                // Function to add a new extra ingredient row
                function addExtraIngredientRow() {
                    const extraIngredientRow = document.querySelector('.extra-ingredient-row').cloneNode(true);
                    extraIngredientRow.querySelectorAll('input').forEach(input => input.value = ''); // Clear input fields
                    document.getElementById('extra-ingredient-rows').appendChild(extraIngredientRow);
                    // Rebind event listeners for new row if needed
                }
        
                // Function to remove an extra ingredient row
                function removeExtraIngredientRow(button) {
                    const row = button.closest('.extra-ingredient-row');
                    if (document.querySelectorAll('.extra-ingredient-row').length > 1) {
                        row.remove();
                    }
                }
        
                // Add event listeners for add/remove buttons
                document.querySelectorAll('.add-extra-row').forEach(btn => {
                    btn.addEventListener('click', function() {
                        addExtraIngredientRow();
                    });
                });
        
                document.querySelectorAll('.remove-extra-row').forEach(btn => {
                    btn.addEventListener('click', function() {
                        removeExtraIngredientRow(this);
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
            // Function to set the ingredient change listener
            function setIngredientChangeListener(selectElement) {
                selectElement.addEventListener('change', function() {
                    let ingredientId = this.value;
                    let row = this.closest('.ingredient-row');
                    let availableQtyInput = row.querySelector('.available-qty');
                    let pricePerUnitInput = row.querySelector('input[name="price_per_unit[]"]');
                    let unitIdInput = row.querySelector('input[name="unit_id[]"]');
    
                    if (ingredientId) {
                        fetch(`/ingredients/${ingredientId}/stock`)
                            .then(response => response.json())
                            .then(data => {
                                availableQtyInput.value = data.stock || 0; // Display available stock
                                pricePerUnitInput.value = data.price_per_unit || 0; // Display price per unit
                                unitIdInput.value = data.unit_id || '';
                            })
                            .catch(error => console.error('Error fetching stock and unit:', error));
                    } else {
                        availableQtyInput.value = '';
                        pricePerUnitInput.value = '';
                        unitIdInput.value = '';
                    }
                });
            }
    
            // Function to calculate total price for each row
            function calculateTotalPrice(row) {
                const qtyInput = row.querySelector('.qty-input');
                const pricePerUnitInput = row.querySelector('input[name="price_per_unit[]"]');
                const totalPriceInput = row.querySelector('.total-price');
    
                const qty = parseFloat(qtyInput.value) || 0;
                const pricePerUnit = parseFloat(pricePerUnitInput.value) || 0;
    
                totalPriceInput.value = (qty * pricePerUnit).toFixed(2); // Update total price
                return parseFloat(totalPriceInput.value) || 0; // Return the total price for this row
            }
    
            // Function to calculate and update the overall total amount
            function updateTotalAmount() {
                let totalAmount = 0;
                document.querySelectorAll('.ingredient-row').forEach(row => {
                    totalAmount += calculateTotalPrice(row); // Sum the total price of each row
                });
                document.getElementById('total-amount').value = totalAmount.toFixed(2); // Update total amount field
            }
    
            // Initialize listeners for existing select elements
            document.querySelectorAll('.ingredient-select').forEach(setIngredientChangeListener);
            
            // Initialize quantity change listener
            document.querySelectorAll('.qty-input').forEach(input => {
                input.addEventListener('input', function() {
                    const row = this.closest('.ingredient-row');
                    calculateTotalPrice(row);
                    updateTotalAmount(); // Update total amount when quantity changes
                });
            });
    
            // Function to add a new ingredient row
            function addIngredientRow() {
                const ingredientRow = document.querySelector('.ingredient-row').cloneNode(true);
                ingredientRow.querySelectorAll('input').forEach(input => input.value = ''); // Clear input fields
                ingredientRow.querySelectorAll('.ingredient-select').forEach(select => {
                    select.value = ''; // Reset select
                    setIngredientChangeListener(select); // Rebind the change listener
                });
                ingredientRow.querySelectorAll('.qty-input').forEach(input => {
                    input.addEventListener('input', function() {
                        const row = this.closest('.ingredient-row');
                        calculateTotalPrice(row);
                        updateTotalAmount(); // Update total amount when a new row is added
                    });
                });
                document.getElementById('ingredient-rows').appendChild(ingredientRow);
            }
    
            // Function to remove an ingredient row
            function removeIngredientRow(button) {
                const row = button.closest('.ingredient-row');
                if (document.querySelectorAll('.ingredient-row').length > 1) {
                    row.remove();
                    updateTotalAmount(); // Update total amount after removing a row
                }
            }
    
            // Add event listeners for add/remove buttons
            document.querySelectorAll('.add-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    addIngredientRow();
                });
            });
    
            document.querySelectorAll('.remove-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    removeIngredientRow(this);
                });
            });
    
            // Handle the toggle of the waste section
            document.getElementById('toggleBtn').addEventListener('click', function() {
                const wasteCard = document.getElementById('waste-card');
                wasteCard.style.display = (wasteCard.style.display === 'none' || wasteCard.style.display === '') ? 'block' : 'none';
            });
        });

            
        </script>
        
        
        

        {{-- <form id="dish-form" action="{{ route('chef.PrepareDish.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="chef_id" value="{{ auth()->id() }}">
            <input type="hidden" name="manager_id" value="{{ Auth::user()->manager_id }}">
        
            <div class="card">
                <div class="card-body add-product pb-0">
                    <div class="accordion-card-one accordion" id="accordionIngredients">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingIngredients">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseIngredients" aria-controls="collapseIngredients">
                                    <h5>Prepare Dish</h5>
                                </div>
                            </div>
                            <div class="accordion-header">
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="input-blocks add-product">
                                        <label>Dish Name</label>
                                        <select name="dish_id" class="form-control">
                                            @foreach ($dishname as $name)
                                                <option value="{{ $name->id }}">{{ $name->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseIngredients" class="accordion-collapse collapse show" aria-labelledby="headingIngredients" data-bs-parent="#accordionIngredients">
                                <div class="accordion-body">
                                    <div id="ingredient-rows">
                                        <div class="row ingredient-row">
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Ingredient Name</label>
                                                    <select name="ingr_id[]" class="form-control ingredient-select">
                                                        <option value="">Select Ingredient</option>
                                                        @foreach ($ingredients as $name)
                                                            <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Available Qty -->
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Available Qty</label>
                                                    <input type="text" class="form-control available-qty" disabled>
                                                    <input type="hidden" name="unit_id[]">
                                                    <input type="hidden" name="price_per_unit[]">
                                                </div>
                                            </div>
                                            <!-- Qty -->
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Qty</label>
                                                    <input type="text" class="form-control qty-input" name="qty[]">
                                                </div>
                                            </div>
                                            <!-- Unit -->
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Unit</label>
                                                    <select name="unit_id[]" class="form-control">
                                                        @foreach ($units as $unit)
                                                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Total Price -->
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <label>Total Price</label>
                                                    <input type="text" class="form-control total-price" disabled>
                                                </div>
                                            </div>
                                            <!-- Add/Remove Buttons -->
                                            <div class="col-lg-2 col-sm-6 col-12">
                                                <div class="input-blocks add-product">
                                                    <button type="button" class="btn btn-success mt-4 add-row">+</button>
                                                    <button type="button" class="btn btn-danger mt-4 remove-row">-</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Total Amount Section -->
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label>Total Amount</label>
                                                <input type="text" id="total-amount" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="form-control" id="toggleBtn">If you have no waste, hide waste section</a>
                </div>
            </div>
        
            <!-- Submit and Cancel Buttons -->
            <div class="col-lg-12">
                <div class="btn-addproduct mb-4">
                    <button type="button" class="btn btn-cancel me-2">Cancel</button>
                    <input type="submit" value="Submit" class="btn btn-submit">
                </div>
            </div>
        </form> --}}
        


        </div>
    </div>
{{--     
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to set the ingredient change listener
            function setIngredientChangeListener(selectElement) {
                selectElement.addEventListener('change', function() {
                    let ingredientId = this.value;
                    let row = this.closest('.ingredient-row');
                    let availableQtyInput = row.querySelector('.available-qty');
                    let pricePerUnitInput = row.querySelector('input[name="price_per_unit[]"]');
                    let unitIdInput = row.querySelector('input[name="unit_id[]"]');
    
                    if (ingredientId) {
                        fetch(`/ingredients/${ingredientId}/stock`)
                            .then(response => response.json())
                            .then(data => {
                                availableQtyInput.value = data.stock || 0; // Display available stock
                                pricePerUnitInput.value = data.price_per_unit || 0; // Display price per unit
                                unitIdInput.value = data.unit_id || '';
                            })
                            .catch(error => console.error('Error fetching stock and unit:', error));
                    } else {
                        availableQtyInput.value = '';
                        pricePerUnitInput.value = '';
                        unitIdInput.value = '';
                    }
                });
            }
    
            // Function to calculate total price for each row
            function calculateTotalPrice(row) {
                const qtyInput = row.querySelector('.qty-input');
                const pricePerUnitInput = row.querySelector('input[name="price_per_unit[]"]');
                const totalPriceInput = row.querySelector('.total-price');
    
                const qty = parseFloat(qtyInput.value) || 0;
                const pricePerUnit = parseFloat(pricePerUnitInput.value) || 0;
    
                totalPriceInput.value = (qty * pricePerUnit).toFixed(2); // Update total price
                return parseFloat(totalPriceInput.value) || 0; // Return the total price for this row
            }
    
            // Function to calculate and update the overall total amount
            function updateTotalAmount() {
                let totalAmount = 0;
                document.querySelectorAll('.ingredient-row').forEach(row => {
                    totalAmount += calculateTotalPrice(row); // Sum the total price of each row
                });
                document.getElementById('total-amount').value = totalAmount.toFixed(2); // Update total amount field
            }
    
            // Initialize listeners for existing select elements
            document.querySelectorAll('.ingredient-select').forEach(setIngredientChangeListener);
            
            // Initialize quantity change listener
            document.querySelectorAll('.qty-input').forEach(input => {
                input.addEventListener('input', function() {
                    const row = this.closest('.ingredient-row');
                    calculateTotalPrice(row);
                    updateTotalAmount(); // Update total amount when quantity changes
                });
            });
    
            // Function to add a new ingredient row
            function addIngredientRow() {
                const ingredientRow = document.querySelector('.ingredient-row').cloneNode(true);
                ingredientRow.querySelectorAll('input').forEach(input => input.value = ''); // Clear input fields
                ingredientRow.querySelectorAll('.ingredient-select').forEach(select => {
                    select.value = ''; // Reset select
                    setIngredientChangeListener(select); // Rebind the change listener
                });
                ingredientRow.querySelectorAll('.qty-input').forEach(input => {
                    input.addEventListener('input', function() {
                        const row = this.closest('.ingredient-row');
                        calculateTotalPrice(row);
                        updateTotalAmount(); // Update total amount when a new row is added
                    });
                });
                document.getElementById('ingredient-rows').appendChild(ingredientRow);
            }
    
            // Function to remove an ingredient row
            function removeIngredientRow(button) {
                const row = button.closest('.ingredient-row');
                if (document.querySelectorAll('.ingredient-row').length > 1) {
                    row.remove();
                    updateTotalAmount(); // Update total amount after removing a row
                }
            }
    
            // Add event listeners for add/remove buttons
            document.querySelectorAll('.add-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    addIngredientRow();
                });
            });
    
            document.querySelectorAll('.remove-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    removeIngredientRow(this);
                });
            });
    
            // Handle the toggle of the waste section
            document.getElementById('toggleBtn').addEventListener('click', function() {
                const wasteCard = document.getElementById('waste-card');
                wasteCard.style.display = (wasteCard.style.display === 'none' || wasteCard.style.display === '') ? 'block' : 'none';
            });
        });
    </script> --}}
               
@endsection
