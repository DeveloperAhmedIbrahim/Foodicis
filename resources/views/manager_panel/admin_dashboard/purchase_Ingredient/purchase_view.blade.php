@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Purchase View</h4>
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
                                    <th>Total Purchase(AED)</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
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

                                    <td><a href="javascript:void(0);">8000</a></td>
                                    <td>5kg</td>

                                    <td>12000</td>
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
