@extends('layouts.master')

@section('content')

  <h1 class = "mt-5">Add Competitor</h1>

  {!! Form::open(['action' => 'CompetitorsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      {{Form::label('name', 'Competitor Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter competitor name'])}}
    </div>

    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write competitor description'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
