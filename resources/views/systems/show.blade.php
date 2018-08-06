@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$system->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$system->description}}</p>
      </div>


      <br><br>
    <a href="/laravel/AMT/public/systems/{{$system->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/AMT/public/systems" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['SystemsController@destroy', $system->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
