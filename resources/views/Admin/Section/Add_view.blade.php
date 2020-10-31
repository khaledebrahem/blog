@extends('layouts.Admin_app')

@section('title')
    Add Section
@endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <div class="col-lg-6 ">
            <div class="card-header bg-primary ">
                <strong class="text-bold text-white">Section Enfo</strong>
            </div>
            <div class="card-body ">
                {{csrf_field()}}
                <div class=" form-group">
                    <div class="input-group-btn">
                        @if(Session::has("success"))
                            <div class="alert alert-success " role='alert'>
                                {{ Session::get("success") }}
                            </div>

                        @endif
                        <br>
                        <label class="text-dark">Name:</label>
                        <input name="name" type="text" placeholder="Section Name" class="form-control" >
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <label class="text-dark">select for this editor:</label>
                <div class="col-lg-6 ">
                    <select name="admin" class="custom-select">
                        <option value="">Empty</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="save" class="btn btn-success btn-sm">
            </div>
        </div>
    </form>

@endsection

