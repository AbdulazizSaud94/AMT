@extends('layouts.master')

@section('content')

  <h1 class = "mt-5">Add a client</h1>

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








    {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-lg'])}}

  {!! Form::close() !!}
@endsection
