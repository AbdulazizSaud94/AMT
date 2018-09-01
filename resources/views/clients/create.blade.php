@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class="h1">Add a client</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('name', 'Client Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter client name'])}}
      </div>

      <div class="form-group">
        {{Form::label('address', 'Client Address')}}
        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter client address here'])}}
      </div>

      <div class="form-group">
        {{Form::label('telephone', 'Client Telephone')}}
        {{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => 'Enter client telephone'])}}
      </div>
        <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
