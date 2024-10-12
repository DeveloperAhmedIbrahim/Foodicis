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
 
                            <table class="table text-nowrap" id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Created On</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manager as $m)
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
                                                        <a href="javascript:void(0);">{{ $m->name }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $m->email }}</td>
                                            <td><span class="badge bg-primary-transparent">Manager</span></td>
                                            <td>{{ $m->created_at }}</td>
                                            <td>
                                                <a href="#">
                                                    <span class="badge {{ $m->status == 1 ? 'badge-linesuccess' : 'badge-linedanger' }}">
                                                        {{ $m->status == 1 ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="btn btn-success approve-btn" data-id="{{ $m->id }}">
                                                        {{ $m->status == 1 ? 'Approved' : 'Approve' }}
                                                    </a>
                                                
                                                </div>
                                                
                            
                                            </td>
                                        </tr>
                                    @endforeach  
                                </tbody>
                            </table>
                            
                            <script>
                                $(document).ready(function() {
                                    $('#myTable').DataTable();
                                });
                            
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
                            
                                $(document).on('click', '.approve-btn', function() {
                                    var managerId = $(this).data('id');
                                    var currentStatus = $(this).data('status');
                                    var newStatus = currentStatus === 1 ? 0 : 1; // Toggle status
                            
                                    $.ajax({
                                        url: '{{ route('admin.manager.approve') }}',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            id: managerId,
                                            status: newStatus // Send the new status
                                        },
                                        success: function(response) {
                                            if (response.success) {
                                                toastr.success(response.message);
                                                // Update the status in the UI
                                                var $statusBadge = $(this).closest('tr').find('td:eq(5) span');
                                                $statusBadge.removeClass(currentStatus == 1 ? 'badge-linesuccess' : 'badge-linedanger');
                                                $statusBadge.addClass(newStatus == 1 ? 'badge-linesuccess' : 'badge-linedanger');
                                                $statusBadge.text(newStatus == 1 ? 'Active' : 'Inactive');
                                                $(this).data('status', newStatus); // Update the data-status attribute
                                                $(this).text(newStatus == 1 ? 'Approved' : 'Approve'); // Change button text
                                            } else {
                                                toastr.error(response.message);
                                            }
                                        }.bind(this), // Bind this context
                                        error: function(xhr, status, error) {
                                            toastr.error('An error occurred while toggling the status.');
                                        }
                                    });
                                });
                            
                            </script>
                            
                            
                            
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

@endsection
  