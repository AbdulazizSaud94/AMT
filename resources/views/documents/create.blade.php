@extends('layouts.app')

@section('content')

  <h1 class = "mt-5">Add a Document</h1>

  {!! Form::open(['action' => 'DocumentsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('title', 'document Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter document title'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write document description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
