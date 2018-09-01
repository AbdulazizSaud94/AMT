@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit System</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['SystemsController@update', $system->id], 'method' => 'POST']) !!}

      <div class="form-group">
        {{Form::label('name', 'system Name')}}
        {{Form::text('name', $system->name, ['class' => 'form-control', 'placeholder' => 'Enter system name'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $system->description, ['class' => 'form-control', 'placeholder' => 'Write system description'])}}
      </div>

      {{Form::hidden('_method', 'PUT')}}
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
