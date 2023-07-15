@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark">
            <div class="row">
                <div class="col-md-6 card_header_title">
                    <h3><i class="fa fa-gg-circle"></i> ToDoList</h3>
                </div>
                <div class="col-md-6 text-right card_header_btn">
                    {{-- <a href="" class="btn btn-sm btn-info"><i class="fa fa-plus-circle"></i> Add User</a> --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container w-50 m-5">
                {{-- <div class="card-shadow-sm"> --}}
                  <form method="post" action="{{route('store')}}" autocomplete="off">
                  @csrf
                <div class="input-group">
                    <input type="text" name="content" class="form-control"  placeholder="Add your new todo">
                    <button type="submit" class="btn btn-light btn-sm px-4"><i class="fa fa-plus"></i></button> 
                </div>
            </form>
            @if (count($todolist))
            <ul class="list-group list-group-flush mt-5">
                @foreach ($todolist as $data)
                <li class="list-group-item">
                    <form method="post" action="{{route('destroy', $data->id)}}">
                    {{$data->content}}
                    @csrf
                    @method('delete') 
                    <button type="submit" class="btn btn-link btn-sm float-end"><i class="fa fa-trash"></i></button> 
                    </form>
                </li>
                @endforeach
            </ul>
            @else
            <p class="text-centermt-3"> No Task!</p>
            @endif
        </div> 
        @if (count($todolist))
        <div class="card-footer">
            You have {{count($todolist)}} pending tasks 
        </div>
        @else
        @endif
        <div class="card-footer bg-dark">
            <a href="#" class="btn btn-sm btn-warning">Print</a>
            <a href="#" class="btn btn-sm btn-info">CSV</a>
            <a href="#" class="btn btn-sm btn-success">Excel</a>
        </div>
      </div>
    </div>
</div>
@endsection