@extends('layouts.Admin_app')

@section('title')
   Index
@endsection

@section('content')

    <div class="container-fluid ">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">DataTables Example</h6>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <a style="margin-bottom: 10px" class="btn btn-primary" href="{{route('section.add')}}">Add Section</a>

                        <tr>
                            <th>Name</th>
                            <th>Admin</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)

                            <tr>
                            <td>{{$section->name}}</td>
                            <td>{{is_null($section->Admin)?'':$section->Admin->name}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{Route('section.delete',['id'=>$section->id])}}">Delete</a>

                                <a class="btn btn-warning" href="{{Route('section.update',['id'=>$section->id])}}">Update</a>
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
