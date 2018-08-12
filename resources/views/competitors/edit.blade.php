@extends('layouts.master')

@section('content')
  <h1 class = "mt-5">Edit Competitor</h1>

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

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
