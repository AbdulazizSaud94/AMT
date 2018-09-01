@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit Division</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['DivisionsController@update', $division->id], 'method' => 'POST']) !!}

      <div class="form-group">
        {{Form::label('name', 'division Name')}}
        {{Form::text('name', $division->name, ['class' => 'form-control', 'placeholder' => 'Enter division name'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $division->description, ['class' => 'form-control', 'placeholder' => 'Write division description'])}}
      </div>

      {{Form::hidden('_method', 'PUT')}}
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
