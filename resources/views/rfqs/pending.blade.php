@extends('layouts.master')

@section('content')
  <h1>RFQs</h1>
  @if(count($rfqs)>0)
    @foreach ($rfqs as $rfq)
      <div class="card card-block bg-faded">
        <h4>RFQ Ref#<a href="rfqs/{{$rfq->id}}"> {{$rfq->id}}</a></h4>
        <div><b>Status: </b>{{$rfq->status}}</div>
        <div><b>Created by:</b> {{$rfq->user->name}}</div>
        <small>Added on: {{$rfq->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No available RFQs</p>
  @endif
    <br>
    <a href="create" class="btn btn-secondary">Add RFQ</a>
@endsection
