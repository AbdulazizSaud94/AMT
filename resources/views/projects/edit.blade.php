@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit Project</h1>

  {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST']) !!}

  <div class="form-group">
    {{Form::label('name', 'Project name')}}
    {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Enter project name'])}}
  </div>

  <div class="form-group">
    {{Form::label('location', 'Project location')}}
    {{Form::text('location', $project->location, ['class' => 'form-control', 'placeholder' => 'Enter project Location here'])}}
  </div>

  <div class="form-group">
    {{Form::label('type', 'Project type')}}
    {{Form::text('type', $project->type, ['class' => 'form-control', 'placeholder' => 'Enter project type'])}}
  </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
