@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit Document</h1>

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

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
