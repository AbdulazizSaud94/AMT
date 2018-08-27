@extends('layouts.master')
@section('card')
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-12">
        <span class="h1">Clients</span>
      </div>
    </div>
  </div>


  <div class="card-body">
    @if(count($clients)>0)
      {{-- Loop print the title, body, timestam for each post --}}
      @foreach ($clients as $client)
        <div class="list-group">
          <a class="list-group-item list-group-item-action bg-light" href="clients/{{$client->id}}">
            <span class="h4">{{$client->id}}: {{$client->name}}</span>
          </a>
        </div>
      @endforeach

    @else {{-- if no post found --}}
    <div class="alert alert-info">
      <span class="h3">No clients were found</span>
    </div>
    @endif
    <div class="row mt-2">
      <div class="col-md-6">
        <a href="./" class="btn btn-secondary float-md-left">Back</a>
      </div>
      <div class="col-md-6">
        <a href="clients/create" class="btn btn-primary float-md-right">Add client</a>
      </div>
    </div>
  </div>
</div>
@endsection