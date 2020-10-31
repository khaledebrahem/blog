@extends('layouts.Web_app')
@section('title')

    {{$posts->title}}
@endsection
@section('headerImage')

    {{url('/images/unnamed.jpg')}}
@endsection


@section('subject')

    {{$posts->title}}

@endsection
@section('head')

    @endsection


@section("content")


    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            <div class="row col-md-12 p-5 ">

                @foreach($posts->Photos as $photo)

                <div class="card text-white bg-dark mb-3 text-center" style="max-width: 18rem;">
                            <div class="card-header">
                                <img src="{{asset('/images/post/'.$photo->path)}}" style="width: 300px; height: 300px;" >

                            </div>
                            <div class="card-body">
                                <h5 class=""><p class="post-meta text-white">

                                    {{Illuminate\Support\Str::limit($posts->content,25)}}
                                </h5>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>











@endsection

@section('subject')

    Test Page
@endsection
