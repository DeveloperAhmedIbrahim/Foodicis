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

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/css/dataTables.bootstrap5.min.css">

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
                                <div class="tabs_container2">
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
                                    <h6 class="d-flex align-items-center mb-0">Product Added<span class="count">2</span>
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
                                            <td id="subtotal" class="text-end">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tax (GST 5%)</td>
                                            <td id="tax" class="text-end">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td id="total" class="text-end">$0.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="d-grid btn-block">
                                <a class="btn btn-secondary" id="place-order" href="javascript:void(0);">
                                    Grand Total : <span id="grand-total">$0.00</span>
                                </a>
                            </div>

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </div>













    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- 
    <script>
        $(document).ready(function() {
            $(document).on('click', '.pos-category li', function() {
                var categoryId = $(this).attr('id').replace('cat', '');
                console.log('Category ID:', categoryId); // Debugging

                $.ajax({
                    url: '/get-subcategories/' + categoryId,
                    type: 'GET',
                    success: function(response) {
                        console.log('Response received:', response); // Debugging
                        $('.tabs_container2').empty();

                        $.each(response, function(index, subcategory) {
                            console.log('Subcategory:', subcategory); // Debugging

                            var subcategoryHTML =
                                `<div class="tab_content" data-tab="subcategory${subcategory.id}">
                                    <h6>${subcategory.subcat}</h6>
                                    <div class="row">`;

                            $.each(subcategory.dishes, function(dIndex, dish) {
                                subcategoryHTML +=
                                    `<div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2 product-card" 
                                        data-image="${dish.image}" data-name="${dish.name}" data-price="${dish.price}">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="/dish_images/${dish.image}" alt="Products">
                                                <span><i data-feather="check" class="feather-16"></i></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">
                                                ${dish.name}</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <p>Price: ${dish.price || 'N/A'}</p>
                                            </div>
                                        </div>
                                    </div>`;
                            });

                            subcategoryHTML += '</div></div>';
                            console.log(subcategory);
                            $('.tabs_container2').append(subcategoryHTML);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
            });
        });
    </script> --}}
    <script>
        $('#place-order').on('click', function() {
            var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            var orderData = {
                items: cart,
                subtotal: parseFloat($('#subtotal').text().replace('$', '')),
                tax: parseFloat($('#tax').text().replace('$', '')),
                total: parseFloat($('#grand-total').text().replace('$', ''))
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
    </script>

    <script>
        $(document).ready(function() {
            // Initialize Owl Carousel
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 3
            });

            // Event listener for clicking on a category
            $(document).on('click', '.pos-category li', function() {
                var categoryId = $(this).attr('id').replace('cat', '');
                console.log('Category ID:', categoryId); // Debugging

                $.ajax({
                    url: '/get-subcategories/' + categoryId,
                    type: 'GET',
                    success: function(response) {
                        console.log('Response received:', response); // Debugging
                        $('.tabs_container2').empty();

                        $.each(response, function(index, subcategory) {
                            console.log('Subcategory:', subcategory); // Debugging

                            var subcategoryHTML =
                                `<div class="tab_content" data-tab="subcategory${subcategory.id}">
                                    <h6>${subcategory.subcat}</h6>
                                    <div class="row">`;

                            $.each(subcategory.dishes, function(dIndex, dish) {
                                subcategoryHTML +=
                                    `<div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2 product-card" 
                                        data-id="${dish.id}" data-image="${dish.image}" data-name="${dish.name}" data-price="${dish.price}">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="/dish_images/${dish.image}" alt="Products">
                                                <span><i data-feather="check" class="feather-16"></i></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">${dish.name}</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <p>Price: $${dish.price || 'N/A'} </p>
                                                <button class="add-to-cart-btn btn btn-primary" data-id="${dish.id}" data-name="${dish.name}" data-price="${dish.price}">Cart</button>
                                            </div>
                                        </div>
                                    </div>`;
                            });

                            subcategoryHTML += '</div></div>';
                            console.log('Generated HTML:',
                                subcategoryHTML); // Debugging
                            $('.tabs_container2').append(subcategoryHTML);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
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
                    quantity: 1
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

            // Function to update the order list and totals
            function updateOrderList() {
                var cart = JSON.parse(sessionStorage.getItem('cart')) || [];
                $('.product-added .product-wrap').empty();

                if (cart.length === 0) {
                    $('.product-added .product-wrap').html('<p>No products in the cart.</p>');
                    $('#subtotal').text('$0.00');
                    $('#tax').text('$0.00');
                    $('#total').text('$0.00');
                    $('#grand-total').text('$0.00');
                    return;
                }

                var subtotal = 0;

                $.each(cart, function(index, product) {
                    subtotal += product.price * product.quantity;

                    var productHTML =
                        `<div class="product-list d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center product-info">
                                <a href="javascript:void(0);" class="img-bg">
                                    <img src="/dish_images/${product.image}" alt="Products">
                                </a>
                                <div class="info">
                                    <span>PT${product.id}</span>
                                    <h6><a href="javascript:void(0);">${product.name}</a></h6>
                                    <p>$${product.price}</p>
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

                $('#subtotal').text('$' + subtotal.toFixed(2));
                $('#tax').text('$' + tax.toFixed(2));
                $('#total').text('$' + total.toFixed(2));
                $('#grand-total').text('$' + total.toFixed(2));

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
