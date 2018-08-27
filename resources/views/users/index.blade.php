@extends('layouts.master')
@section('header')
    <div class="row">
        <div class="col-md-12">
            <span class="h1">Users</span>
        </div>
    </div>
@endsection

@section('header')
    <span class="h1">Users</span>
@endsection
@section('body')
    <table class="table table-hover">
        <tr class="">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->title}}</td>
            <td>
                <button type="submit" class="btn btn-info form-control" onclick="window.location = '/users/{{$user->id}}/edit'">Edit</button>
            </td>
            <td>
                {!! Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST']) !!}
                    {!! Form::hidden('_method','DELETE') !!}
                        <button type="submit" class="btn btn-danger form-control">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    @endsection

