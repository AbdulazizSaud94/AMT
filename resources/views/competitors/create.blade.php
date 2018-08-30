@extends('layouts.master')

@section('card')
<div class="card">
  <div class="card-header">
      <span class = "h1">Add Competitor</span>
  </div>
    <div class="card-body">
        {!! Form::open(['action' => 'CompetitorsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Competitor Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter competitor name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write competitor description'])}}
        </div>
        <a href='./' class="btn btn-secondary float-left">Back</a>
        {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
