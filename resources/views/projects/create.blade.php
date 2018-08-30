@extends('layouts.master')

@section('card')
<div class="card">
  <div class="card-header">
    <span class = "h1">Add a project</span>
  </div>
  <div class="card-body">
  {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('name', 'Project name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter project name'])}}
    </div>

    <div class="form-group">
      {{Form::label('location', 'Project location')}}
      {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Enter project Location here'])}}
    </div>

    <div class="form-group">
      {{Form::label('type', 'Project type')}}
      {{Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'Enter project type'])}}
    </div>
    <a href="./" class="btn btn-secondary float-left">Back</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}
  {!! Form::close() !!}
  </div>
</div>
@endsection
