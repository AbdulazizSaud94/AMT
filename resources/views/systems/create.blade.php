@extends('layouts.app')

@section('content')

  <h1 class = "mt-5">Add a System</h1>

  {!! Form::open(['action' => 'SystemsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('name', 'system Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter system name'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write system description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
