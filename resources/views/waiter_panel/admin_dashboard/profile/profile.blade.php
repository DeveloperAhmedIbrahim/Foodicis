@extends('manager_panel.admin_dashboard.layout.layout')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Profile</h4>
                    <h6>User Profile</h6>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="profile-set">
                        <div class="profile-head">
                        </div>
                        <div class="profile-top">
                            <div class="profile-content">
                                <div class="">
                                    {{-- You can uncomment this part to include a profile image upload if needed --}}
                                    {{-- <img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
                                    <div class="profileupload">
                                        <input type="file" id="imgInp">
                                        <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg" alt="img"></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="{{ $waiter->name }}" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{ $waiter->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" value="{{ $waiter->password }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control" value="{{ $waiter->status == 1 ? 'Active' : 'Inactive' }}" readonly>
                            </div>
                        </div>

                        <div class="col-12">
                            {{-- <a href="{{ route('profile.edit') }}" class="btn btn-submit me-2">Edit Profile</a> --}}
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
