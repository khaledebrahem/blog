@extends('layouts.Admin_app')

@section('title')
   index Image
    @endsection

@section('content')
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="col-lg-9 ">
            <a style="margin-bottom: 10px" class="btn btn-success" href="{{route('Image.add')}}">Add Images</a>

            <div class="card-header bg-primary ">

                    <strong class="text-bold text-white">Photo</strong>
                </div>

                <div class="card-body ">
                        {{csrf_field()}}

                    <div class=" form-group">

                        @foreach($photos as $photo)
                           <a href="{{route('image_Delete',['id'=>$photo->id])}}"> <img  style="width: 150px; height: 150px;"
                                 src="{{asset('images/post/'.$photo->path)}}"></a>
                            @endforeach
                    </div>
                </div>

        </div>
    </form>
@endsection

