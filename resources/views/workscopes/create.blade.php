@extends('layouts.master')

@section('card')
<div class="card">
  <div class="card-header">
    <span class = "h1">Add a Workscope</span>
  </div>
  <div class="card-body">
    {!! Form::open(['action' => 'WorkscopesController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('title', 'workscope Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter workscope title'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write workscope description'])}}
    </div>
    <a href="./" class="btn btn-secondary float-left">Back</a>
    {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

    {!! Form::close() !!}
  </div>
</div>
@endsection
