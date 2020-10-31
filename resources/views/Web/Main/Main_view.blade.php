@extends('layouts.Web_app')

@section('title')

    Main page
@endsection
@section('headerImage')

    {{url('/web2/img//bg-img/1.jpg')}}
@endsection

@section('head')


@endsection
@section('subject')

    Welcome

@endsection

@section("content")


    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
<div class="row col-md-12 p-5 ">
             @foreach($sections as $section)
            <div class="single-products-catagory clearfix">

                <a href="{{route('Web.section.index',['id'=>$section->id])}}">
                    <img style="" src="{{asset('web2/img/'.$section->photo)}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p></p>
                        <h4>{{$section->name}}</h4>
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
