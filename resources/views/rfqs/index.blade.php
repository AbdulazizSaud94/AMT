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
            <a>
              <span class="h4">RFQ Ref#<a href="rfqs/{{$rfq->id}}"> {{$rfq->id}}</a></span>
              @if($rfq->status == 'pending')
                <span class="h5 alert-warning">{{$rfq->status}}</span>
              @elseif($rfq->status == 'approved')
                <span class="h5 alert-success">{{$rfq->status}}</span>
              @else
                <span class="h5 alert-danger">{{$rfq->status}}</span>
              @endif
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
