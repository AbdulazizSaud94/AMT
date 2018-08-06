@extends('layouts.app')

@section('content')
  <h1 class = "mt-5">Edit Client</h1>

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

    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
