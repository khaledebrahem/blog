@extends('layouts.Admin_app')

@section('title')
    Update Post
    @endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <div class="row">

        <div class="col-lg-6 ">
                <div class="card-header bg-primary ">
                    <strong class="text-bold text-white">Post info</strong>
                </div>
                <div class="card-body ">
                        {{csrf_field()}}
                    <div class=" form-group">
                        <div class="input-group-btn">
                            <label class="text-dark">Title:</label>
                            <input name="title" type="text" placeholder="Title" class="form-control" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label>Content:</label>
                            <textarea name="content" placeholder="content" class="form-control">{{$post->content}}</textarea>
                        </div>
                    </div>
                    <label class="text-dark">Section:</label>
                    <div class="col-lg-6 ">
                        <select name="section_id" class="custom-select">
                            @foreach($sections as $section)
                                <option {{$section->id==$post->Section->id?'selected="selected"':''}} value="{{$section->id}}">{{$section->name}}</option>
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

                                <input {{$post->photos()->where('photo_id',$photo->id)->count()==1?'checked':''}} type="checkbox" name="photos[]" value="{{$photo->id}}">

                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </form>
@endsection

