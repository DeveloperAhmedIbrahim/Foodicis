@extends('admin_panel.admin_dashboard.layout.layout')
@section('content')
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
            <h1 class="page-title fw-semibold fs-18 mb-0">Leads Request</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leads Request</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->



   

        <!-- Start:: row-11 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                             Leads Request
                        </div>
                        <div class="prism-toggle">
                            {{-- <button class="btn btn-sm btn-primary-light"><i
                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
 
                            <table id="myTable" class="display" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Select All">
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="User Name">
                                            First Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Email">
                                            Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Role">
                                            Phone
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Created On">
                                            Date
                                        </th>
        
                                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Action">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $c)
                                        <tr>
                                            <td class="sorting_1">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="userimgname">
                                                    <div>
                                                        <a href="javascript:void(0);">{{ $c->firstname }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $c->email }}</td>
                                            <td>{{ $c->phone }}</td>
                                            
                                            <td>{{ $c->created_at }}</td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal{{ $c->id }}"
                                                        data-name="{{ $c->firstname }}" data-email="{{ $c->email }}"
                                                        data-phone="{{ $c->phone }}" data-created_at="{{ $c->created_at }}">
                                                        View
                                                    </button>
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#remove_data{{ $c->id }}">remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="viewModal{{ $c->id }}" tabindex="-1"
                                            aria-labelledby="viewModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="viewModalLabel">Leads Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Name:</strong>
                                                                <p>{{ $c->firstname }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Lastname:</strong>
                                                                <p>{{ $c->lastname }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Email:</strong>
                                                                <p>{{ $c->email }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Phone</strong>
                                                                <p> {{ $c->phone }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Business Name:</strong>
                                                                <p>{{ $c->business_name }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Branches</strong>
                                                                <p> {{ $c->branches }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Country:</strong>
                                                                <p>{{ $c->country ? $c->country->name : 'No Country' }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Date</strong>
                                                                <p> {{ $c->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div id="remove_data{{ $c->id }}" class="modal fade zoomIn" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="NotificationModalbtn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                                colors="primary:#f7b84b,secondary:#f06548"
                                                                style="width:100px;height:100px"></lord-icon>
                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                <h4>Are you sure ?</h4>
                                                                <p class="text-muted mx-4 mb-0">Are you sure
                                                                    you
                                                                    want to remove this member ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('admin.contact.destroy', $c->id) }}"
                                                                class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                                            </a>
                                                        </div>
                                                    </div> 
        
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>


                            
                        </div>
                    </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-11 -->
  <!-- Include jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script>
      $(document).ready(function() {
          $('#myTable').DataTable();
      });
  </script>
    </div>
</div>
<!--APP-CONTENT CLOSE-->

    <!-- Include Toastr CSS -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        .dataTables_filter {
            float: right;
            margin-bottom: 10px;
        }

        .dataTables_filter input {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
        }
    </style>

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Manager List</h4>
                    </div>
                </div>


            </div>


            <div class="conatiner" id="">
                <div class="col-md-12">

                    <table id="myTable" class="display" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Select All">
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="User Name">
                                    First Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Email">
                                    Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Role">
                                    Phone
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Created On">
                                    Date
                                </th>

                                <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Action">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $c)
                                <tr>
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <div>
                                                <a href="javascript:void(0);">{{ $c->firstname }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->phone }}</td>
                                    
                                    <td>{{ $c->created_at }}</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#viewModal{{ $c->id }}"
                                                data-name="{{ $c->firstname }}" data-email="{{ $c->email }}"
                                                data-phone="{{ $c->phone }}" data-created_at="{{ $c->created_at }}">
                                                View
                                            </button>
                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                                data-bs-target="#remove_data{{ $c->id }}">remove</button>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="viewModal{{ $c->id }}" tabindex="-1"
                                    aria-labelledby="viewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel">User Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Name:</strong>
                                                        <p>{{ $c->firstname }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Lastname:</strong>
                                                        <p>{{ $c->lastname }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Email:</strong>
                                                        <p>{{ $c->email }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Phone</strong>
                                                        <p> {{ $c->phone }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Business Name:</strong>
                                                        <p>{{ $c->business_name }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Branches</strong>
                                                        <p> {{ $c->branches }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Country:</strong>
                                                        <p>{{ $c->country ? $c->country->name : 'No Country' }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Date</strong>
                                                        <p> {{ $c->created_at }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="remove_data{{ $c->id }}" class="modal fade zoomIn" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="NotificationModalbtn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                        colors="primary:#f7b84b,secondary:#f06548"
                                                        style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure
                                                            you
                                                            want to remove this member ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ route('admin.contact.destroy', $c->id) }}"
                                                        class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                                    </a>
                                                </div>
                                            </div> --}}
{{-- 
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection --}}

<!-- Include jQuery (if not already included) -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- Include Toastr JS -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script> --}}
{{-- 
<script>
    function ajaxRequest(button) {
        // Get the URL from the data-url attribute of the button
        var url = button.getAttribute('data-url');

        // Confirm the action before proceeding
        if (confirm('Are you sure you want to delete this item?')) {
            // Send the AJAX request
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}' // Include the CSRF token for security
                },
                success: function(response) {
                    // Handle the success response
                    alert('Item deleted successfully');
                    // Optionally, remove the item from the table or refresh the page
                    location.reload();
                },
                error: function(xhr) {
                    // Handle any errors
                    alert('An error occurred while deleting the item.');
                }
            });
        }
    }
</script> --}}
<!-- Toastr Configuration -->
{{-- <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script> --}}
