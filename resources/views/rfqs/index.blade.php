@extends('layouts.app')

@section('content')
  <h1>RFQs</h1>
  @if(count($rfqs)>0)
    @foreach ($rfqs as $rfq)
      <div class="card card-block bg-faded">
        <h3><a href="/laravel/AMT/public/rfqs/{{$rfq->id}}">{{$rfq->title}}</a></h3>
        <small>Written on {{$rfq->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No available RFQs</p>
  @endif
    <br>
    <a href="/laravel/AMT/public/rfqs/create" class="btn btn-secondary">Add RFQ</a>
@endsection
