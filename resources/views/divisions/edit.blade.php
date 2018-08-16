@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit Division</h1>

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

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
