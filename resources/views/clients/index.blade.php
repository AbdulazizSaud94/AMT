@extends('layouts.app')

@section('content')
  <h1>Clients</h1>
  @if(count($clients)>0)
    @foreach ($clients as $client)
      <div class="card card-block bg-faded">
        <h3><a href="/laravel/AMT/public/clients/{{$clients->id}}">{{$rfq->name}}</a></h3>
        <small>Written on {{$client->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No available Clients</p>
  @endif

  <br>
  <a href="/laravel/AMT/public/clients/create" class="btn btn-secondary">Add client</a>
@endsection
