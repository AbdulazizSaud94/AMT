@extends('layouts.master')

@section('content')
@include('inc.rejectRfqModal')

<h3 class="mt-1">RFQ Ref# {{$rfq->id}}</h3>

<div class="card card-block bg-faded">
  <div><b>Status: </b>{{$rfq->status}}<br></div>
  <div><b>Added by: </b>{{$rfq->user->name}}<br></div>
  <div><b>Added on: </b>{{$rfq->created_at}}<br></div>
  <div><b>Last modified at: </b>{{$rfq->updated_at}}<br></div>
  <div><b>Received by: </b>{{$rfq->receiving_method}}<br></div>
  <div><b>Client: </b>{{$rfq->client->name}}<br></div>
  <div><b>Deleviry place: </b>{{$rfq->delivery_place}}<br></div>
  <div><b>Win chance: </b>{{$rfq->win_chance}} %<br></div>
  <div><b>Margin: </b>{{$rfq->margin}} %<br></div>
  <div><b>Project: </b>{{$rfq->project->name}}<br></div>
  <div><b>Project type: </b>{{$rfq->project_type}}<br></div>

</div>

<br>
@if ($rfq->status == 'Rejected')
<div class="card card-block bg-faded">
    <div><b>Justification for rejection:<br></b>{{$rfq->justification}}<br><br></div>
    <div><b>Recommendation:<br></b>{{$rfq->recommendation}}</div>
</div>
@endif

<br>
@if (auth()->user()->id == $rfq->user->id)
<a href="{{$rfq->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
@endif

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
