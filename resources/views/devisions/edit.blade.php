@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit Devision</h1>

  {!! Form::open(['action' => ['DevisionsController@update', $devision->id], 'method' => 'POST']) !!}

  <div class="form-group">
    {{Form::label('name', 'devision Name')}}
    {{Form::text('name', $devision->name, ['class' => 'form-control', 'placeholder' => 'Enter devision name'])}}
  </div>

  <div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $devision->description, ['class' => 'form-control', 'placeholder' => 'Write devision description'])}}
  </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
