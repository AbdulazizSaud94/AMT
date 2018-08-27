@extends('layouts.master')

@section('content')

@include('inc.rejectRfqModal')

<h1 class="mt-5">{{$rfq->title}}</h1>

<div class="card card-block bg-faded">
  <p></p>
</div>

<small>Written on {{$rfq->created_at}}</small>
<br><br>

<a href="./" class="btn btn-secondary btn-sm">Go Back</a>
@if (auth()->user()->id == $rfq->user->id)
  {!!Form::open(['action' => ['RfqsController@destroy', $rfq->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-dark btn-sm'])}}
  {!!Form::close()!!}
@endif
<br><hr>

{!! Form::open(['action' => ['RfqsController@approve', $rfq->id], 'method' => 'POST']) !!}
  {{-- {{Form::hidden('_method', 'PUT')}} --}}
  {{Form::submit('Approve', ['class' => 'btn btn-success btn-sm float-left'])}}
{!! Form::close() !!}

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm float-left" data-toggle="modal" data-target="#reject-rfq-modal">
  Reject
</button>

{{-- <a href="{{action('RfqsController@approve', $rfq->id)}}" class="btn btn-success btn-sm">Approve</a> --}}
@endsection
