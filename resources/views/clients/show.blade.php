@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$client->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$client->address}}</p>
        <p>Telephone: {{$client->telephone}}</p>
      </div>


      <br><br>
    <a href="/laravel/AMT/public/clients/{{$client->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/AMT/public/clients" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['ClientsController@destroy', $client->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
