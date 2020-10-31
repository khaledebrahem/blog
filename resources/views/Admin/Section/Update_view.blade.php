@extends('layouts.Admin_app')

@section('title')
    Update Section
    @endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <div class="col-lg-6 ">
                <div class="card-header bg-primary ">
                    <strong class="text-bold text-white">Section Info</strong>
                </div>
                <div class="card-body ">
                        {{csrf_field()}}
                    <div class=" form-group">
                        <div class="input-group-btn">
                            <label class="text-dark">Name:</label>
                            <input name="name" type="text" placeholder="Section Name" class="form-control" value="{{$section->name}}" >
                        </div>
                    </div>
                        <label class="text-dark">Editor for the section :</label>
                    <div class="col-lg-6 ">
                        <select name="admin" class="custom-select">
                                <option value="">Empty</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                 @endforeach
                                @if(!is_null($section->admin))
                            <option selected="selected" value="{{$section->Admin->id}}">{{$section->Admin->name}}</option>
                                @endif
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="save" class="btn btn-success btn-sm">
                </div>
        </div>
    </form>
@endsection

