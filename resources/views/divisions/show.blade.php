@extends('layouts.master')



@section('content')
      <h1 class = "mt-5">{{$division->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$division->description}}</p>
      </div>


      <br><br>
    <a href="laravel/AMT/public/divisions/{{$division->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="laravel/AMT/public/divisions" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['DivisionsController@destroy', $division->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
