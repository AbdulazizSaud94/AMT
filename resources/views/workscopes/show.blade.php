@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$workscope->title}}</h1>

      <div class="card card-block bg-faded">
        <p>Address: {{$workscope->description}}</p>
      </div>


      <br><br>
    <a href="/workscopes/{{$workscope->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/workscopes" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['WorkscopesController@destroy', $workscope->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
