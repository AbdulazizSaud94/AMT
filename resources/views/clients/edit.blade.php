@extends('layouts.master')

@section('card')
  <div class="card">
    <div class="card-header">
      <span class = "h1">Edit Client</span>
    </div>
    <div class="card-body">
      {!! Form::open(['action' => ['ClientsController@update', $client->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('name', 'Client name')}}
        {{Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Enter client name'])}}
      </div>
      <div class="form-group">
        {{Form::label('address', 'Client Address')}}
        {{Form::text('address', $client->address, ['class' => 'form-control', 'placeholder' => 'Enter client Address here'])}}
      </div>
      <div class="form-group">
        {{Form::label('telephone', 'Client Telephone')}}
        {{Form::text('telephone', $client->telephone, ['class' => 'form-control', 'placeholder' => 'Enter client telephone'])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      <a href="./" class="btn btn-secondary float-left">Back</a>
      {{Form::submit('Submit', ['class' => 'btn btn-primary float-right'])}}

      {!! Form::close() !!}
    </div>
  </div>

@endsection
