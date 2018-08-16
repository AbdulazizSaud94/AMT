@extends('layouts.master')

@section('content')

  <h1 class = "mt-5">Add a Workscope</h1>

  {!! Form::open(['action' => 'WorkscopesController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('title', 'workscope Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter workscope title'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write workscope description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
