@extends('layouts.Admin_app')

@section('title')
    Deleta Section
@endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <div class="col-lg-6 ">
            <div class="card-header bg-danger ">
                <strong class="text-bold text-white">Delete Section</strong>
            </div>
            <div class="card-body ">
                {{csrf_field()}}
                <div class=" form-group">
                    <div class="input-group-btn">
                        <label class="text-dark">Are you sure ?</label>
                         <img src="{{asset('images/post/'.$photo->path)}}" style="width: 100px;height: 100px">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="delete" class="btn btn-danger btn-sm">
            </div>
        </div>
    </form>
@endsection

