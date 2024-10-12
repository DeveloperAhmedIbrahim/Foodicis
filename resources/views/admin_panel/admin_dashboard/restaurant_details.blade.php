@extends('admin_panel.admin_dashboard.layout.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-xl-2 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            {{-- <h4>{{ $manager }}</h4> --}}
                            <h5>Total Restaurent </h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            {{-- <h4>{{ $leads }}</h4> --}}
                            <h5>Totdal Leads</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            {{-- <h4>{{ $today_leads }}</h4> --}}
                            <h5>Today Leads</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            {{-- <h4>{{ $manger_request }}</h4> --}}
                            <h5>Manager Requests</h5>
                        </div>
                        <div class="dash-imgs">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/file-text-icon-01.svg"
                                class="img-fluid" alt="icon">
                        </div>
                    </div>
                </div>

            </div>


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Expired Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive dataview">
                        <table class="table dashboard-expired-products">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Product</th>
                                    <th>SKU</th>
                                    <th>Manufactured Date</th>
                                    <th>Expired Date</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img stock-img">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/expire-product-01.png"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Red Premium Handy </a>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);">PT006</a></td>
                                    <td>17 Jan 2023</td>
                                    <td>29 Mar 2023</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2" href="#">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class=" confirm-text p-2" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img stock-img">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/expire-product-02.png"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Iphone 14 Pro</a>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);">PT007</a></td>
                                    <td>22 Feb 2023</td>
                                    <td>04 Apr 2023</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2" href="#">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img stock-img">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/expire-product-03.png"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Black Slim 200 </a>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);">PT008</a></td>
                                    <td>18 Mar 2023</td>
                                    <td>13 May 2023</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2" href="#">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class=" confirm-text p-2" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img stock-img">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/expire-product-04.png"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Woodcraft Sandal</a>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);">PT009</a></td>
                                    <td>29 Mar 2023</td>
                                    <td>27 May 2023</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2" href="#">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class=" confirm-text p-2" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img stock-img">
                                                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/products/stock-img-03.png"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Apple Series 5 Watch </a>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);">PT010</a></td>
                                    <td>24 Mar 2023</td>
                                    <td>26 May 2023</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class=" confirm-text p-2" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
