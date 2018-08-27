@extends('layouts.master')
@section('card')
  <div class="card">
    <div class="card-header">
      <span class="h1">RFQs</span>
    </div>
    <div class="card-body">
      @if(count($rfqs)>0)
        @foreach ($rfqs as $rfq)
          <div class="list-group">
            <a class="list-group-item list-group-item-action bg-light" href="rfqs/{{$rfq->id}}">
              <span class="h4">RFQ Ref#:{{$rfq->id}}</span><br>
              @if($rfq->status == 'Pending')
                <span class="h5 text-warning">{{$rfq->status}}</span>
              @elseif($rfq->status == 'Approved')
                <span class="h5 text-success">{{$rfq->status}}</span>
              @else
                <span class="h5 text-danger">{{$rfq->status}}</span>
              @endif<br>
              <span class="small">Added on: {{$rfq->created_at}}</span>
            </a>
          </div>
          @endforeach
        @else
        <div class="alert alert-info">
          <span class="h3">No systems were found</span>
        </div>
        @endif
        <div class="row mt-2">
          <div class="col-md-6">
            <a href="./" class="btn btn-secondary float-md-left">Back</a>
          </div>
          <div class="col-md-6">
            <a href="rfqs/create" class="btn btn-primary float-md-right">Add RFQ</a>
          </div>
        </div>
    </div>
  </div>
@endsection
