@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit System</h1>

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

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
