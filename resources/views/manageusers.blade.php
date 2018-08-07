@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Users in the system</h5>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Block</th>
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
                                <form>
                                    <button class="btn btn-primary" onclick="window.location = 'manageusers/{{$user->id}}/block'">Block</button>
                                </form>
                            </td>
                            <td><button class="btn btn-success" onclick="window.location = 'manageusers/{{$user->id}}/edit'">Edit</button></td>
                            <td>
                                <form action="{{ url("/manageusers/delete/$user->id") }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
