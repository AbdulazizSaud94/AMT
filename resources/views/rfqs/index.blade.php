@extends('layouts.app')

@section('content')
  <h1>RFQs</h1>
  @if(count($rfqs)>0)
    @foreach ($rfqs as $rfq)
      <div class="card card-block bg-faded">
        <h4>RFQ Ref#<a href="/laravel/AMT/public/rfqs/{{$rfq->id}}"> {{$rfq->id}}</a></h4>
        <b>Status: {{$rfq->status}}</b>
        <small>Added on: {{$rfq->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No available RFQs</p>
  @endif
    <br>
    <a href="/laravel/AMT/public/rfqs/create" class="btn btn-secondary">Add RFQ</a>
@endsection
