@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-4 col-xl-4">
      <div class="card m-b-30">
          <div class="card-body">
              <div class="media">
                  <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-users"></i></span>
                  <div class="media-body">
                      <p class="mb-0">Users</p>
                      <h5 class="mb-0">85</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-xl-4">
      <div class="card m-b-30">
          <div class="card-body">
              <div class="media">
                  <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-clipboard"></i></span>
                  <div class="media-body">
                      <p class="mb-0">Tasks</p>
                      <h5 class="mb-0">259</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End col -->
  <!-- Start col -->
  <div class="col-lg-4 col-xl-4">
      <div class="card m-b-30">
          <div class="card-body">
              <div class="media">
                  <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-users"></i></span>
                  <div class="media-body">
                      <p class="mb-0">Teams</p>
                      <h5 class="mb-0">57</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection