@extends('layouts.Admin_app')

@section('title')
   Display Posts
@endsection

@section('content')

    <div class="container-fluid ">


        <div class="card shadow mb-4 ">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">Posts</h6>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <a style="margin-bottom: 10px" class="btn btn-primary" href="{{route('Post.add')}}">Add Posts</a>

                        <tr>
                            <th>Title</th>
                            <th>Section</th>
                            <th>posted by</th>
                            <th>Date</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                            @foreach($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->Section->name}}</td>
                            <td>{{$post->User->name}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{Route('Post.delete',['id'=>$post->id])}}">Delete</a>

                                <a class="btn btn-warning" href="{{Route('Post.update',['id'=>$post->id])}}">Update</a>
                            </td>

                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @endsection
