@extends('layouts.master')

@section('content')

  <h1 class = "mt-5">Add Devision</h1>

  {!! Form::open(['action' => 'DevisionsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('name', 'devision Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter devision name'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write devision description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
