@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
    <link rel="shortcut icon" type="image/x-icon"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/img/favicon.png">

    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/animate.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/select2/css/select2.min.css">

    {{-- <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/dataTables.bootstrap5.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/style.css">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/8jz9OVr72U2F9dRkszTf86s+mfF2O/8NYl9GF2" crossorigin="anonymous">
    </script> --}}

    <div class="main-wrapper">


        <div class="page-wrapper pos-pg-wrapper ">
            <div class="content pos-design ">
                <div class="btn-row d-sm-flex align-items-center">
                    <a href="javascript:void(0);" class="btn btn-secondary mb-xs-3" data-bs-toggle="modal"
                        data-bs-target="#orders"><span class="me-1 d-flex align-items-center"><i
                                data-feather="shopping-cart" class="feather-16"></i></span>View Orders</a>
                    <a href="javascript:void(0);" class="btn btn-info"><span class="me-1 d-flex align-items-center"><i
                                data-feather="rotate-cw" class="feather-16"></i></span>Reset</a>
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#recents"><span class="me-1 d-flex align-items-center"><i data-feather="refresh-ccw"
                                class="feather-16"></i></span>Transaction</a>
                </div>
                <div class="row align-items-start pos-wrapper">
                    <div class="col-md-12 col-lg-8">
                        <div class="pos-categories tabs_wrapper">
                            <h5>Categories</h5>
                            <p>Select From Below Categories</p>
                            <ul class="tabs owl-carousel pos-category">
                                @foreach ($categories as $category)
                                    <li id="cat{{ $category->id }}">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('category_images/' . $category->image) }}" alt="Categories">
                                        </a>
                                        <h6><a href="javascript:void(0);">{{ $category->name }}</a></h6>
                                        <span>{{ $category->dishes->count() }} Items</span>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="pos-products">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-3">Products</h5>
                                </div>
                                <div class="col-md-12">

                                    <div class="tabs_container2 row ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 ps-0">
                        <aside class="product-order-list">
                            <div class="head d-flex align-items-center justify-content-between w-100">
                                <div>
                                    <h5>Order List</h5>
                                    <span>Transaction ID : #65565</span>
                                </div>
                                <div>
                                    <a class="confirm-text" href="javascript:void(0);"><i data-feather="trash-2"
                                            class="feather-16 text-danger"></i></a>
                                    <a href="javascript:void(0);" class="text-default"><i data-feather="more-vertical"
                                            class="feather-16"></i></a>
                                </div>
                            </div>
                            <div class="customer-info block-section">
                                <!-- Customer info will be displayed here -->
                            </div>
                            <div class="product-added block-section">
                                <div class="head-text d-flex align-items-center justify-content-between">
                                    <h6 class="d-flex align-items-center mb-0">Product Added<span class="count">0</span>
                                    </h6>
                                    <a href="javascript:void(0);" class="d-flex align-items-center text-danger"><span
                                            class="me-1"><i data-feather="x" class="feather-16"></i></span>Clear all</a>
                                </div>
                                <div class="product-wrap">
                                    <!-- Cart items will be dynamically inserted here -->
                                </div>
                            </div>
                            <div class="block-section">
                                <div class="order-total">
                                    <table class="table table-responsive table-borderless">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td id="subtotal" class="text-end">AED 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tax (GST 5%)</td>
                                            <td id="tax" class="text-end">AED 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td id="total" class="text-end">AED 0.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="d-grid btn-block">
                                <label for="chef-select">Order Type</label>
                                <select id="order-type" class="form-select">
                                    <option value="">Select Order Type</option>
                                    <option value="Dine in">Dine in</option>
                                    <option value="Take away">Take away</option>
                                    <option value="Delivery">Delivery</option>
                                </select>
 
                            </div>
                            <div class="d-grid btn-block">
                                <a class="btn btn-secondary" id="place-order" href="javascript:void(0);">
                                    Grand Total : <span id="grand-total">AED 0.00</span>
                                </a>
                            </div>

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="extraIngredientsModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Extra Ingredients</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Extra ingredients will be populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-extras-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <script>
    $('#place-order').on('click', function() {
        var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

        var orderData = {
            items: cart,
            subtotal: parseFloat($('#subtotal').text().replace('AED', '').trim()),
            tax: parseFloat($('#tax').text().replace('AED', '').trim()),
            total: parseFloat($('#grand-total').text().replace('AED', '').trim()),
            order_type: $('#order-type').val()
        };

        $.ajax({
            url: '/manager/store-order',
            type: 'POST',
            data: {
                cart: JSON.stringify(orderData),
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });

    // Event listener for clicking on a category
    $(document).on('click', '.pos-categories ul li', function() {
        var categoryId = $(this).attr('id').replace('cat', '');
        console.log('Category ID:', categoryId); // Debugging
        $.ajax({
            url: '/get-subcategories/' + categoryId,
            type: 'GET',
            success: function(response) {
                console.log('Response received:', response); // Debugging
                $('.tabs_container2').empty();

                $.each(response, function(index, subcategory) {
                    console.log(subcategory.dishes); // Debugging

                    var subcategoryHTML = '';

                    $.each(subcategory.dishes, function(dIndex, dish) {
                        subcategoryHTML += `
                            <div class="col-sm-2 col-md-4 col-lg-4 col-xl-4 pe-2 product-card" data-tab="subcategory${subcategory.id}" 
                                data-id="${dish.id}" data-image="${dish.image}" data-name="${dish.name}" data-price="${dish.price}">
                                <div class="product-info default-cover card">
                                    <a href="javascript:void(0);" class="img-bg">
                                        <img width="150px" height="150px" src="/dish_images/${dish.image}" alt="Products">
                                        <span><i data-feather="check" class="feather-16"></i></span>
                                    </a>
                                    <h6 class="cat-name"><a href="javascript:void(0);">${dish.name}</a></h6>
                                    <div class="d-flex align-items-center justify-content-between price">
                                        <p>Price: ${dish.price || 'N/A'} AED</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between price">
                                        <button class="add-to-cart-btn btn btn-primary btn-sm" data-id="${dish.id}" data-name="${dish.name}" data-price="${dish.price}">Cart</button>
                                        <button class="view-extras-btn btn btn-info btn-sm" data-id="${dish.id}" data-name="${dish.name}" data-extras='${JSON.stringify(dish.extra_ingredients)}'>Add Extras</button>
                                    </div>
                                </div>
                            </div>`;
                    });

                    $('.tabs_container2').append(subcategoryHTML);
                });
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });
    
    $(document).ready(function() {
        // Initialize Owl Carousel
        // $('.owl-carousel').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     nav: true,
        //     items: 3
        // });

        // Event listener for viewing extras
        $(document).on('click', '.view-extras-btn', function() {
            var dishId = $(this).data('id');
            var extras = $(this).data('extras');
            var extrasHTML = '<h6>Extra Ingredients:</h6><ul class="ingredient-list">';

            $.each(extras, function(iIndex, ingredient) {
                extrasHTML += `
                    <li class="d-flex justify-content-between align-items-center">
                        <span>${ingredient.name} - ${ingredient.price} AED</span>
                        <div>
                            <button class="btn btn-secondary btn-sm qty-btn" data-action="decrement" data-name="${ingredient.name}" data-price="${ingredient.price}">-</button>
                            <input type="number" class="form-control form-control-sm qty-input" value="0" min="0" data-name="${ingredient.name}" data-price="${ingredient.price}" style="width: 60px; display: inline-block;">
                            <button class="btn btn-secondary btn-sm qty-btn" data-action="increment" data-name="${ingredient.name}" data-price="${ingredient.price}">+</button>
                            <button class="btn btn-danger btn-sm remove-btn" data-name="${ingredient.name}">Remove</button>
                        </div>
                    </li>`;
            });

            extrasHTML += '</ul>';

            $('#extraIngredientsModal .modal-body').html(extrasHTML);
            $('#extraIngredientsModal').data('dish-id', dishId).modal('show');
        });

        // Handle increment and decrement buttons
        $(document).on('click', '.qty-btn', function() {
            var action = $(this).data('action');
            var input = $(this).siblings('.qty-input');
            var currentVal = parseInt(input.val()) || 0;

            if (action === 'increment') {
                input.val(currentVal + 1);
            } else if (action === 'decrement' && currentVal > 0) {
                input.val(currentVal - 1);
            }
        });

        // Handle remove button
        $(document).on('click', '.remove-btn', function() {
            var input = $(this).siblings('.qty-input');
            input.val(0);
        });

        // Event listener for adding extras to the cart
        $(document).on('click', '#add-extras-to-cart', function() {
            var dishId = $('#extraIngredientsModal').data('dish-id');
            var selectedExtras = [];

            $('#extraIngredientsModal .qty-input').each(function() {
                var qty = parseInt($(this).val()) || 0;
                if (qty > 0) {
                    selectedExtras.push({
                        name: $(this).data('name'),
                        price: parseFloat($(this).data('price')),
                        quantity: qty
                    });
                }
            });

            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];
            var existingProduct = cart.find(p => p.id === dishId);

            if (existingProduct) {
                existingProduct.extras = existingProduct.extras.concat(selectedExtras);
            } else {
                var productName = $(this).data('name');
                var productPrice = parseFloat($(this).data('price'));

                var product = {
                    id: dishId,
                    name: productName,
                    price: productPrice,
                    quantity: 1,
                    extras: selectedExtras
                };
                cart.push(product);
            }

            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateOrderList(); // Update the cart display
            $('#extraIngredientsModal').modal('hide'); // Hide the modal
        });

        // Event listener for adding a product to the cart
        $(document).on('click', '.add-to-cart-btn', function() {
            var productId = $(this).data('id');
            var productName = $(this).data('name');
            var productPrice = parseFloat($(this).data('price'));

            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            var product = {
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1,
                extras: [] // Initialize extras as an empty array
            };

            var existingProduct = cart.find(p => p.id === productId);
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push(product);
            }

            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateOrderList();
        });

        $(document).on('click', '.head-text .text-danger', function() {
            sessionStorage.removeItem('cart');
            updateOrderList();
        });

        // Function to update the order list and totals
        function updateOrderList() {
            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];
            $('.product-added .product-wrap').empty();

            if (cart.length === 0) {
                $('.product-added .product-wrap').html('<p>No products in the cart.</p>');
                $('#subtotal').text('0.00 AED');
                $('#tax').text('0.00 AED');
                $('#total').text('0.00 AED');
                $('#grand-total').text('0.00 AED');
                return;
            }

            var subtotal = 0;
            $.each(cart, function(index, product) {
                subtotal += product.price * product.quantity;

                // Calculate extra price for selected extras
                var extras = product.extras || [];
                $.each(extras, function(eIndex, extra) {
                    subtotal += extra.price * extra.quantity; // Update to use quantity
                });

                var extraHTML = extras.length > 0 ? '<p>Selected Extras:</p>' + extras.map(extra =>
                    `<div>${extra.name} - AED ${extra.price} x ${extra.quantity}</div>`).join('') : '';

                var productHTML =
                    `<div class="product-list d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center product-info">
                            <div class="info">
                                <span>PT${product.id}</span>
                                <h6><a href="javascript:void(0);">${product.name}</a></h6>
                                <p>${product.price} AED</p>
                                ${extraHTML}
                            </div>
                        </div>
                        <div class="qty-item text-center">
                            <a href="javascript:void(0);" class="dec d-flex justify-content-center align-items-center" data-id="${product.id}" data-action="decrement"><i data-feather="minus-circle" class="feather-14"></i></a>
                            <input type="text" class="form-control text-center" name="qty" value="${product.quantity}">
                            <a href="javascript:void(0);" class="inc d-flex justify-content-center align-items-center" data-id="${product.id}" data-action="increment"><i data-feather="plus-circle" class="feather-14"></i></a>
                        </div>
                        <div class="d-flex align-items-center action">
                            <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);" data-id="${product.id}">
                                <i data-feather="trash-2" class="feather-14"></i>
                            </a>
                        </div>
                    </div>`;

                $('.product-added .product-wrap').append(productHTML);
            });

            var tax = subtotal * 0.05; // Assuming 5% GST
            var total = subtotal + tax;

            $('#subtotal').text('AED ' + subtotal.toFixed(2));
            $('#tax').text('AED ' + tax.toFixed(2));
            $('#total').text('AED ' + total.toFixed(2));
            $('#grand-total').text('AED ' + total.toFixed(2));

            feather.replace();
        }

        // Event listeners for incrementing/decrementing quantity and removing items from the cart
        $(document).on('click', '.qty-item a', function() {
            var productId = $(this).data('id');
            var action = $(this).data('action');
            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            var product = cart.find(p => p.id === productId);
            if (!product) return;

            if (action === 'increment') {
                product.quantity += 1;
            } else if (action === 'decrement' && product.quantity > 1) {
                product.quantity -= 1;
            }

            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateOrderList();
        });

        $(document).on('click', '.delete-icon', function() {
            var productId = $(this).data('id');
            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            cart = cart.filter(p => p.id !== productId);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateOrderList();
        });

        // Initialize Feather icons
        feather.replace();
    });
    $(document).ready(function() {
    // Other existing code...

    // Close the extra ingredients modal
    $(document).on('click', '#extraIngredientsModal .close, #extraIngredientsModal .btn-close', function() {
        $('#extraIngredientsModal').modal('hide'); // Hide the modal
    });

    // Existing code for viewing extras...
});

</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script data-cfasync="false"
        src="https://dreamspos.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    {{-- <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery-3.7.1.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script> --}}

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/feather.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery.dataTables.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/dataTables.bootstrap5.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/bootstrap.bundle.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/apexchart/apexcharts.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/apexchart/chart-data.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/moment.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script
        src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>

    <script
        src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalert2.all.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalerts.min.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/theme-script.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/script.js"
        type="5cc756569e7610eb00251dc5-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="5cc756569e7610eb00251dc5-|49" defer></script>
@endsection
