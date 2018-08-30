@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit Project</span>
    </div>
    <div class="card-body">
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
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-left'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
