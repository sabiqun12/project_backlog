@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
      <form method="post" action="{{url('admin/adduser/submit')}}">
      @csrf
        <div class="card">
          <div class="card-header bg-dark">
              <div class="row">
                  <div class="col-md-6 card_header_title">
                      <h3><i class="fa fa-gg-circle"></i> ADD USER</h3>
                  </div>
                  <div class="col-md-6 text-right card_header_btn">
                      <a href="{{url('admin/adduser')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All User</a>
                  </div>
              </div>
          </div>
          <div class="card-body">
            @if(Session::has('success'))
              <script>
                  swal({ title: "Successfully!", text: "registered user information.", timer:5000, icon: "success",});
              </script>
            @endif
            @if(Session::has('error'))
            <script>
                swal({ title: "Opps!", text: "user registration failed.", timer:5000, icon: "warning",});
            </script>
            @endif
            <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Name:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="name" value="">
              </div>
            </div>
            <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Phone:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="phone" value="">
              </div>
            </div>
            <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Email Address:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="email" value="">
              </div>
            </div>
            <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Password:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="password" value="">
              </div>
            </div>
            <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Confirm-Password:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="password_confirmation" value="">
              </div>
            </div>
            <div class="form-group row custom_form">
                <label class="col-sm-3 col-form-label">User Role:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="userrole" value="">
                </div>
              </div>
             {{-- <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">User-Role:</label>
              <div class="col-sm-4">
                <select class="form-control" name="user_role">
                    <option value="">Select User Role</option>
                    <option value="">Teacher</option>
                    <option value="">Student</option>
                </select>
              </div>
            </div>  --}}
            {{-- <div class="form-group row custom_form">
              <label class="col-sm-3 col-form-label">Photo:</label>
              <div class="col-sm-4">
                <input type="file" name="pic"/>
              </div>
            </div> --}}
          </div>
          <div class="card-footer bg-dark text-center">
              <button type="submit" class="btn btn-sm btn-primary">REGISTRATION</button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection
