@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit Document</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['DocumentsController@update', $document->id], 'method' => 'POST']) !!}

      <div class="form-group">
        {{Form::label('title', 'document Title')}}
        {{Form::text('title', $document->title, ['class' => 'form-control', 'placeholder' => 'Enter document title'])}}
      </div>

      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $document->description, ['class' => 'form-control', 'placeholder' => 'Write document description'])}}
      </div>

      {{Form::hidden('_method', 'PUT')}}
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
