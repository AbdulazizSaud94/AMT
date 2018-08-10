@extends('layouts.app')



@section('content')
      <h1 class = "mt-5">{{$project->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Location: {{$project->location}}</p>
        <p>Type: {{$project->type}}</p>
        <p>By: {{$project->user->name}}</p>
      </div>


      <br><br>
    <a href="/laravel/AMT/public/projects/{{$project->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>

    <a href="/laravel/AMT/public/projects" class="btn btn-secondary btn-sm">Go Back</a>

    {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
@endsection
