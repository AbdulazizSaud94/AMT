@extends('layouts.app')

@section('content')
  <h1 class = "mt-5">Edit Workscope</h1>

  {!! Form::open(['action' => ['WorkscopesController@update', $workscope->id], 'method' => 'POST']) !!}

  <div class="form-group">
    {{Form::label('title', 'workscope Title')}}
    {{Form::text('title', $workscope->title, ['class' => 'form-control', 'placeholder' => 'Enter workscope title'])}}
  </div>

  <div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $workscope->description, ['class' => 'form-control', 'placeholder' => 'Write workscope description'])}}
  </div>

    {{Form::hidden('_method', 'PUT')}}

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
