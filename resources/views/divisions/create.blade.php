@extends('layouts.master')

@section('content')

  <h1 class = "mt-5">Add Division</h1>

  {!! Form::open(['action' => 'DivisionsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('name', 'division Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter division name'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write division description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
