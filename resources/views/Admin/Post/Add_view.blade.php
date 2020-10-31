@extends('layouts.Admin_app')

@section('title')
    Add Post
    @endsection

@section('content')

    <form action="" method="post" class="form-horizontal">
        {{csrf_field()}}
    <div class="row">
        <div class="col-lg-6 ">
            <div class="card-header bg-primary ">
                    <strong class="text-bold text-white">Post Enfo</strong>
                </div>
                <div class="card-body ">
                    <div class=" form-group">
                        <div class="input-group-btn">
                            <label class="text-dark">Title:</label>
                            <input name="title" type="text" placeholder="Title" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="content" placeholder="content" class="form-control"></textarea>
                        </div>
                    </div>
                        <label class="text-dark">Section:</label>
                    <div class="col-lg-6 ">
                        <select name="section_id" class="custom-select">
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="save" class="btn btn-success btn-sm">
            </div>
        </div>


        <div class="col-lg-6 ">
            <div class="card-header bg-primary ">

                <strong class="text-bold text-white">Photo</strong>
            </div>

            <div class="card-body ">
                <div class=" form-group">

                        @foreach($photos as $photo)

                                    <img src="{{asset('/images/post/'.$photo->path)}}" style="width: 140px; height: 140px;">
                                    <input type="checkbox" name="photos[]" value="{{$photo->id}}">

                            @endforeach
                </div>
            </div>

        </div>
    </div>
    </form>
@endsection

