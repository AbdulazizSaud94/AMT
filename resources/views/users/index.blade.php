@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Users in the system</h5>
                </div>
                    <table class="table">
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
                                <button type="submit" class="btn btn-success" onclick="window.location = '/users/{{$user->id}}/edit'">Edit</button>
                            </td>
                            <td>
                                {!! Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST']) !!}
                                    {!! Form::hidden('_method','DELETE') !!}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                <div class="form-control">
                    <button class="btn btn-primary" onclick="window.location = '/add-user'">Add user</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
