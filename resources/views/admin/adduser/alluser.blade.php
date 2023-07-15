@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6 card_header_title">
                    <h3><i class="fa fa-gg-circle"></i> All Users Information</h3>
                </div>
                <div class="col-md-6 text-right card_header_btn">
                    <a href="{{url('admin/adduser/add')}}" class="btn btn-sm btn-info"><i class="fa fa-plus-circle"></i> Add User</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered custom_table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->userrole}}</td>
                        {{-- <td>---</td> --}}
                        <td>
                            <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                            <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-dark">
            <a href="#" class="btn btn-sm btn-warning">Print</a>
            <a href="#" class="btn btn-sm btn-info">CSV</a>
            <a href="#" class="btn btn-sm btn-success">Excel</a>
        </div>
      </div>
    </div>
</div>
@endsection