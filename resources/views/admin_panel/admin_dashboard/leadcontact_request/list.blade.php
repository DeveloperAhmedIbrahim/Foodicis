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
            <h1 class="page-title fw-semibold fs-18 mb-0">Contact Leads Request</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact leads Request</li>
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
                            Contact Leads Request
                        </div>
                        <div class="prism-toggle">
                            {{-- <button class="btn btn-sm btn-primary-light"><i
                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
 
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th class="no-sort">
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $c)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="userimgname">
                                                    <div>
                                                        <a href="javascript:void(0);">{{ $c->name }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $c->email }}</td>
                                            <td>{{ $c->created_at }}</td>
                                            <td>
                                                <div class="edit-delete-action">
                                                    <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal{{ $c->id }}"
                                                        data-name="{{ $c->name }}" data-email="{{ $c->email }}"
                                                        data-phone="{{ $c->phone }}" data-created_at="{{ $c->created_at }}">
                                                        View
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#remove_data{{ $c->id }}">Remove</button>
                                                </div>
                                            </td>
                                        </tr>
        
                                        <!-- View Modal -->
                                        <div class="modal fade" id="viewModal{{ $c->id }}" tabindex="-1"
                                            aria-labelledby="viewModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="viewModalLabel">Contact Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <strong>Name:</strong>
                                                        <p>{{ $c->name }}</p>
                                                        <strong>Email:</strong>
                                                        <p>{{ $c->email }}</p>
                                                        <strong>Subject:</strong>
                                                        <p>{{ $c->subject }}</p>
                                                        <strong>Message:</strong>
                                                        <p>{{ $c->message }}</p>
                                                        <strong>Date:</strong>
                                                        <p>{{ $c->created_at }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <!-- Remove Confirmation Modal -->
                                        <div id="remove_data{{ $c->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4>Are you sure?</h4>
                                                        <p class="text-muted">Do you want to remove this member?</p>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('admin.contact.lead_destroy', $c->id) }}"
                                                               class="btn btn-danger">Yes, Delete</a>
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


@endsection
