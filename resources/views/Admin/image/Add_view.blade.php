@extends('layouts.Admin_app')

@section('title')
    Upload Image
    @endsection

@section('content')
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="col-lg-6 ">
            <a style="margin-bottom: 10px" class="btn btn-warning" href="{{route('Image.Index')}}">All Images</a>
                <div class="card-header bg-primary ">

                    <strong class="text-bold text-white">Upload</strong>
                </div>
                <div class="card-body ">
                        {{csrf_field()}}

                    <div class=" form-group">

                            <input value="upload" name="photo" type="file" class="btn btn-warning">
                    </div>

                    <div class="col-lg-6 ">

                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="save" class="btn btn-success btn-sm">
                </div>
        </div>
    </form>
@endsection

