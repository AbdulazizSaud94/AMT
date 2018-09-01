@extends('layouts.master')
@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Add a Document</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => 'DocumentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{Form::label('title', 'document Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter document title'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write document description'])}}
      </div>

      <div class="form-group">
        {{Form::file('file')}}
      </div>
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
