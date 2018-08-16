@extends('layouts.master')



@section('content')
      <h1 class = "mt-5">{{$project->name}}</h1>

      <div class="card card-block bg-faded">
        <p>Location: {{$project->location}}</p>
        <p>Type: {{$project->type}}</p>
        <p>By: {{$project->user->name}}</p>
      </div>


      <br><br>

    {{--if statement to check if the user logged in--}}
    @if(!Auth::guest())
    <a href="projects/{{$project->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
    @endif

    <a href="projects" class="btn btn-secondary btn-sm">Go Back</a>

    {{--if statement to check if the user logged in--}}
    @if(!Auth::guest())
    {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
    {!!Form::close()!!}
    @endif
@endsection
