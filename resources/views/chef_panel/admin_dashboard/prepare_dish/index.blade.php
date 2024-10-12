@extends('chef_panel.admin_dashboard.layout.layout')

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
            <h1 class="page-title fw-semibold fs-18 mb-0">Prepare Dish</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Prepare Dish</li>
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
                             Prepare Dish
                        </div>
                        <div class="prism-toggle">
                            {{-- <button class="btn btn-sm btn-primary-light"><i
                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button> --}}
                                    <a href="{{ route('chef.PrepareDish.add') }}" class="btn btn-primary ms-auto">Add</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="managerTable" class="nowrap table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>dish Name</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dishes as $d)
                                        <tr>

                                            <td>{{ $d->dish_id }}</td>
                                            <td> @php

                                                $name = DB::table('dishes')
                                                    ->where('id', $d->dish_id)
                                                    ->pluck('name')
                                                    ->first();
                                            @endphp
                                                {{ $name }}
                                            </td>
                                            <td>
                                                @php

                                                    $image = DB::table('dishes')
                                                        ->where('id', $d->dish_id)
                                                        ->pluck('image')
                                                        ->first();
                                                @endphp
                                                <img style="width: 100px; height: 50px;"
                                                    src="{{ asset('dish_images') }}/{{ $image }}">
                                            </td>
                                            <td>

                                                <button class="btn btn-sm btn-danger remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#remove_data{{ $d->id }}">remove</button>
                                            </td>
                                        </tr>
                                        <div id="remove_data{{ $d->id }}" class="modal fade zoomIn"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="NotificationModalbtn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                trigger="loop"
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
                                                            <button onclick="ajaxRequest(this)"
                                                                data-url="{{ route('chef.PrepareDish.destroy', $d->id) }}"
                                                                class="btn
                                                     w-sm btn-danger"
                                                                id="delete-notification">Yes,
                                                                Delete
                                                                It!</button>
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
