@extends('layouts.Web_app')
@section('title')

    Main page
@endsection
@section('headerImage')

    {{url('/images/cc.jpg')}}
@endsection


@section('subject')

    Welcome

@endsection

@section("content")

    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            <div class="row col-md-12 p-5 ">

                @foreach($posts as $post)
                    <a href="{{route('Web.Post.index',$post->id)}}">
                    <div class="card text-white bg-success mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">

                           <h4 class="text-dark">{{$post->title}}</h4>
                        </div>
                        <div class="card-body">
                            <h5 class=""><p class="post-meta text-dark">Posted by :
                                    {{$post->User->name}}</p>
                                <p> on {{$post->created_at}}</p>
                            </h5>
                        </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>










@endsection

@section('subject')

    Test Page
@endsection
