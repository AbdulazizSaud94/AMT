@extends('layouts.master')
@section('card')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    <span class="h1">Users</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-responsive-lg table-hover">
                    <tr>
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
                                {!! Form::close() !!}
                                @include('inc.confirmationModal',['id' => $user->id])
                                <button class="btn btn-danger form-control" data-toggle="modal" data-target="#confirmation{{$user->id}}" name="clicked">Delete</button>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="./" class="btn btn-secondary float-md-left">Back</a>
                </div>
                <div class="col-md-6">
                    <a href="users/create" class="btn btn-primary float-md-right">Add user</a>
                </div>
            </div>

        </div>

    </div>
@endsection