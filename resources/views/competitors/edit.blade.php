@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit Competitor</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['CompetitorsController@update', $competitor->id], 'method' => 'POST']) !!}

      <div class="form-group">
        {{Form::label('name', 'competitor Name')}}
        {{Form::text('name', $competitor->name, ['class' => 'form-control', 'placeholder' => 'Enter competitor name'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $competitor->description, ['class' => 'form-control', 'placeholder' => 'Write competitor description'])}}
      </div>

      {{Form::hidden('_method', 'PUT')}}
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
