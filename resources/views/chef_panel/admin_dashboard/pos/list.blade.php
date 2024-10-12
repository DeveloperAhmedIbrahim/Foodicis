@extends('admin_dashboard.layout.layout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row align-items-start pos-wrapper">
            <div class="col-md-12 col-lg-8">
                <div class="pos-categories tabs_wrapper">
                    
                    <div class="pos-products">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-3">Products</h5>
                        </div>
                        <div class="tabs_container">
                            <div class="tab_content active" data-tab="all">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3">
                                        <div class="product-info default-cover card active">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-01.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IPhone 14
                                                    64GB</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>30 Pcs</span>
                                                <p>$15800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-02.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">MacBook Pro</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>140 Pcs</span>
                                                <p>$1000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-03.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Rolex Tribute
                                                    V3</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>220 Pcs</span>
                                                <p>$6800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-04.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Red Nike
                                                    Angelo</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-05.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Airpod 2</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$5478</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-06.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Blue White
                                                    OGR</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>54 Pcs</span>
                                                <p>$987</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-07.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim 5
                                                    Gen 7</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>74 Pcs</span>
                                                <p>$1454</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-08.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">SWAGME</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$6587</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-09.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Timex Black
                                                    SIlver</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>24 Pcs</span>
                                                <p>$1457</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-10.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Tablet 1.02
                                                    inch</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$4744</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-11.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Fossil Pair Of 3
                                                    in 1 </a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>40 Pcs</span>
                                                <p>$789</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-18.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Green Nike Fe</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7847</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="headphones">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-05.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Airpod 2</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$5478</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-08.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">SWAGME</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$6587</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="shoes">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-04.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Red Nike
                                                    Angelo</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-06.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Blue White
                                                    OGR</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>54 Pcs</span>
                                                <p>$987</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-18.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Green Nike Fe</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7847</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="mobiles">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-01.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IPhone 14
                                                    64GB</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>30 Pcs</span>
                                                <p>$15800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-14.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Iphone 11</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$3654</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="watches">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-03.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Rolex Tribute
                                                    V3</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>220 Pcs</span>
                                                <p>$6800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-09.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Timex Black
                                                    SIlver</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>24 Pcs</span>
                                                <p>$1457</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-11.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Fossil Pair Of 3
                                                    in 1 </a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>40 Pcs</span>
                                                <p>$789</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="laptops">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-02.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">MacBook Pro</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>140 Pcs</span>
                                                <p>$1000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-07.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim 5
                                                    Gen 7</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>74 Pcs</span>
                                                <p>$1454</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-10.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Tablet 1.02
                                                    inch</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$4744</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-13.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Yoga Book 9i</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>65 Pcs</span>
                                                <p>$4784</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-14.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim
                                                    3i</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$1245</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="allcategory">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-01.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IPhone 14
                                                    64GB</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>30 Pcs</span>
                                                <p>$15800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-02.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">MacBook Pro</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>140 Pcs</span>
                                                <p>$1000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-03.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Rolex Tribute
                                                    V3</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>220 Pcs</span>
                                                <p>$6800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-04.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Red Nike
                                                    Angelo</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-05.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Airpod 2</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$5478</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-06.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Blue White
                                                    OGR</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>54 Pcs</span>
                                                <p>$987</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-07.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim 5
                                                    Gen 7</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>74 Pcs</span>
                                                <p>$1454</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-08.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">SWAGME</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$6587</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-09.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Timex Black
                                                    SIlver</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>24 Pcs</span>
                                                <p>$1457</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-10.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Tablet 1.02
                                                    inch</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$4744</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-11.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Fossil Pair Of 3
                                                    in 1 </a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>40 Pcs</span>
                                                <p>$789</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-18.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Green Nike Fe</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7847</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="headphone">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-05.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Airpod 2</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$5478</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-08.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Headphones</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">SWAGME</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$6587</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="shoe">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-04.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Red Nike
                                                    Angelo</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-06.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Blue White
                                                    OGR</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>54 Pcs</span>
                                                <p>$987</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-18.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Shoes</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Green Nike Fe</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>78 Pcs</span>
                                                <p>$7847</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="mobile">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-01.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IPhone 14
                                                    64GB</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>30 Pcs</span>
                                                <p>$15800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-14.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Mobiles</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Iphone 11</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$3654</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="watche">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-03.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Rolex Tribute
                                                    V3</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>220 Pcs</span>
                                                <p>$6800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-09.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Timex Black
                                                    SIlver</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>24 Pcs</span>
                                                <p>$1457</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-11.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Watches</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Fossil Pair Of 3
                                                    in 1 </a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>40 Pcs</span>
                                                <p>$789</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content" data-tab="laptop">
                                <div class="row">
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-02.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">MacBook Pro</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>140 Pcs</span>
                                                <p>$1000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-07.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim 5
                                                    Gen 7</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>74 Pcs</span>
                                                <p>$1454</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-10.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Computer</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Tablet 1.02
                                                    inch</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>14 Pcs</span>
                                                <p>$4744</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-13.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">Yoga Book 9i</a>
                                            </h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>65 Pcs</span>
                                                <p>$4784</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                                        <div class="product-info default-cover card">
                                            <a href="javascript:void(0);" class="img-bg">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-14.png"
                                                    alt="Products">
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-check feather-16">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></span>
                                            </a>
                                            <h6 class="cat-name"><a href="javascript:void(0);">Laptop</a></h6>
                                            <h6 class="product-name"><a href="javascript:void(0);">IdeaPad Slim
                                                    3i</a></h6>
                                            <div class="d-flex align-items-center justify-content-between price">
                                                <span>47 Pcs</span>
                                                <p>$1245</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 ps-0">
                <aside class="product-order-list">
                    <div class="head d-flex align-items-center justify-content-between w-100">
                        <div class="">
                            <h5>Order List</h5>
                            <span>Transaction ID : #65565</span>
                        </div>
                        <div class="">
                            <a class="confirm-text" href="javascript:void(0);"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2 feather-16 text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></a>
                            <a href="javascript:void(0);" class="text-default"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-more-vertical feather-16">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></a>
                        </div>
                    </div>
                    <div class="customer-info block-section">
                        <h6>Customer Information</h6>
                        <div class="input-block d-flex align-items-center" data-select2-id="select2-data-27-wjv2">
                            <div class="flex-grow-1" data-select2-id="select2-data-26-flgj">
                                <select class="select select2-hidden-accessible"
                                    data-select2-id="select2-data-1-s0ti" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="select2-data-3-6c5o">Walk in Customer</option>
                                    <option data-select2-id="select2-data-29-mmqa">John</option>
                                    <option data-select2-id="select2-data-30-6eu8">Smith</option>
                                    <option data-select2-id="select2-data-31-it2w">Ana</option>
                                    <option data-select2-id="select2-data-32-jod9">Elza</option>
                                </select><span
                                    class="select2 select2-container select2-container--default select2-container--below"
                                    dir="ltr" data-select2-id="select2-data-2-h8ix" style="width: 100%;"><span
                                        class="selection"><span class="select2-selection select2-selection--single"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-gqym-container"
                                            aria-controls="select2-gqym-container"><span
                                                class="select2-selection__rendered" id="select2-gqym-container"
                                                role="textbox" aria-readonly="true" title="Ana">Ana</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <a href="#" class="btn btn-primary btn-icon" data-bs-toggle="modal"
                                data-bs-target="#create"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-user-plus feather-16">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg></a>
                        </div>
                        <div class="input-block" data-select2-id="select2-data-34-u65o">
                            <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-fzwq"
                                tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-6-3hrk">Search Products</option>
                                <option data-select2-id="select2-data-35-hh2t">IPhone 14 64GB</option>
                                <option data-select2-id="select2-data-36-6jmt">MacBook Pro</option>
                                <option data-select2-id="select2-data-37-abkx">Rolex Tribute V3</option>
                                <option data-select2-id="select2-data-38-g167">Red Nike Angelo</option>
                                <option data-select2-id="select2-data-39-qio0">Airpod 2</option>
                                <option data-select2-id="select2-data-40-j7v4">Oldest</option>
                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below"
                                dir="ltr" data-select2-id="select2-data-5-1r4j" style="width: 100%;"><span
                                    class="selection"><span class="select2-selection select2-selection--single"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-kmkm-container"
                                        aria-controls="select2-kmkm-container"><span
                                            class="select2-selection__rendered" id="select2-kmkm-container"
                                            role="textbox" aria-readonly="true" title="IPhone 14 64GB">IPhone 14
                                            64GB</span><span class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="product-added block-section">
                        <div class="head-text d-flex align-items-center justify-content-between">
                            <h6 class="d-flex align-items-center mb-0">Product Added<span class="count">2</span>
                            </h6>
                            <a href="javascript:void(0);" class="d-flex align-items-center text-danger"><span
                                    class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x feather-16">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></span>Clear all</a>
                        </div>
                        <div class="product-wrap">
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                    data-bs-target="#products">
                                    <a href="javascript:void(0);" class="img-bg">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                            alt="Products">
                                    </a>
                                    <div class="info">
                                        <span>PT0005</span>
                                        <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        <p>$2000</p>
                                    </div>
                                </div>
                                <div class="qty-item text-center">
                                    <a href="javascript:void(0);"
                                        class="dec d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="minus"
                                        data-bs-original-title="minus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-minus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                    <input type="text" class="form-control text-center" name="qty" value="4">
                                    <a href="javascript:void(0);"
                                        class="inc d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="plus"
                                        data-bs-original-title="plus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                </div>
                                <div class="d-flex align-items-center action">
                                    <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                        data-bs-target="#edit-product">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit feather-14">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                            </path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 feather-14">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                    data-bs-target="#products">
                                    <a href="javascript:void(0);" class="img-bg">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                            alt="Products">
                                    </a>
                                    <div class="info">
                                        <span>PT0235</span>
                                        <h6><a href="javascript:void(0);">Iphone 14</a></h6>
                                        <p>$3000</p>
                                    </div>
                                </div>
                                <div class="qty-item text-center">
                                    <a href="javascript:void(0);"
                                        class="dec d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="minus"
                                        data-bs-original-title="minus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-minus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                    <input type="text" class="form-control text-center" name="qty" value="3">
                                    <a href="javascript:void(0);"
                                        class="inc d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="plus"
                                        data-bs-original-title="plus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                </div>
                                <div class="d-flex align-items-center action">
                                    <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                        data-bs-target="#edit-product">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit feather-14">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                            </path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 feather-14">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                    data-bs-target="#products">
                                    <a href="javascript:void(0);" class="img-bg">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-16.png"
                                            alt="Products">
                                    </a>
                                    <div class="info">
                                        <span>PT0005</span>
                                        <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        <p>$2000</p>
                                    </div>
                                </div>
                                <div class="qty-item text-center">
                                    <a href="javascript:void(0);"
                                        class="dec d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="minus"
                                        data-bs-original-title="minus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-minus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                    <input type="text" class="form-control text-center" name="qty" value="1">
                                    <a href="javascript:void(0);"
                                        class="inc d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="plus"
                                        data-bs-original-title="plus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                </div>
                                <div class="d-flex align-items-center action">
                                    <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                        data-bs-target="#edit-product">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit feather-14">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                            </path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 feather-14">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-list d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center product-info" data-bs-toggle="modal"
                                    data-bs-target="#products">
                                    <a href="javascript:void(0);" class="img-bg">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/pos-product-17.png"
                                            alt="Products">
                                    </a>
                                    <div class="info">
                                        <span>PT0005</span>
                                        <h6><a href="javascript:void(0);">Red Nike Laser</a></h6>
                                        <p>$2000</p>
                                    </div>
                                </div>
                                <div class="qty-item text-center">
                                    <a href="javascript:void(0);"
                                        class="dec d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="minus"
                                        data-bs-original-title="minus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-minus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                    <input type="text" class="form-control text-center" name="qty" value="1">
                                    <a href="javascript:void(0);"
                                        class="inc d-flex justify-content-center align-items-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="plus"
                                        data-bs-original-title="plus"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus-circle feather-14">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg></a>
                                </div>
                                <div class="d-flex align-items-center action">
                                    <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal"
                                        data-bs-target="#edit-product">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit feather-14">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                            </path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 feather-14">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-section">
                        <div class="selling-info">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="input-block">
                                        <label>Order Tax</label>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-7-xikv" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-ackz">GST 5%</option>
                                            <option>GST 10%</option>
                                            <option>GST 15%</option>
                                            <option>GST 20%</option>
                                            <option>GST 25%</option>
                                            <option>GST 30%</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-8-ot7x"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-dw1j-container"
                                                    aria-controls="select2-dw1j-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-dw1j-container" role="textbox"
                                                        aria-readonly="true" title="GST 5%">GST 5%</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="input-block">
                                        <label>Shipping</label>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-10-qun5" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-czwd">15</option>
                                            <option>20</option>
                                            <option>25</option>
                                            <option>30</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-11-zpj6"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-mzox-container"
                                                    aria-controls="select2-mzox-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-mzox-container" role="textbox"
                                                        aria-readonly="true" title="15">15</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="input-block">
                                        <label>Discount</label>
                                        <select class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-13-fhu6" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-15-b560">10%</option>
                                            <option>10%</option>
                                            <option>15%</option>
                                            <option>20%</option>
                                            <option>25%</option>
                                            <option>30%</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="select2-data-14-osbl"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-yx7l-container"
                                                    aria-controls="select2-yx7l-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-yx7l-container" role="textbox"
                                                        aria-readonly="true" title="10%">10%</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-total table-responsive">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end">$60,454</td>
                                    </tr>
                                    <tr>
                                        <td>Tax (GST 5%)</td>
                                        <td class="text-end">$40.21</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="text-end">$40.21</td>
                                    </tr>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end">$60,454</td>
                                    </tr>
                                    <tr>
                                        <td class="danger">Discount (10%)</td>
                                        <td class="danger text-end">$15.21</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-end">$64,024.5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="block-section payment-method">
                        <h6>Payment Method</h6>
                        <div class="row d-flex align-items-center justify-content-center methods">
                            <div class="col-md-6 col-lg-4 item">
                                <div class="default-cover">
                                    <a href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/cash-pay.svg"
                                            alt="Payment Method">
                                        <span>Cash</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <div class="default-cover">
                                    <a href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/credit-card.svg"
                                            alt="Payment Method">
                                        <span>Debit Card</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <div class="default-cover">
                                    <a href="javascript:void(0);">
                                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/qr-scan.svg"
                                            alt="Payment Method">
                                        <span>Scan</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid btn-block">
                        <a class="btn btn-secondary" href="javascript:void(0);">
                            Grand Total : $64,024.5
                        </a>
                    </div>
                    <div class="btn-row d-sm-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-info btn-icon flex-fill" data-bs-toggle="modal"
                            data-bs-target="#hold-order"><span class="me-1 d-flex align-items-center"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-pause feather-16">
                                    <rect x="6" y="4" width="4" height="16"></rect>
                                    <rect x="14" y="4" width="4" height="16"></rect>
                                </svg></span>Hold</a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-icon flex-fill"><span
                                class="me-1 d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trash-2 feather-16">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></span>Void</a>
                        <a href="javascript:void(0);" class="btn btn-success btn-icon flex-fill"
                            data-bs-toggle="modal" data-bs-target="#payment-completed"><span
                                class="me-1 d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-credit-card feather-16">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg></span>Payment</a>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</div>
@endsection