@extends('layouts.master')

@section('content')
  <h1>Clients</h1>
  @if(count($clients)>0)
    @foreach ($clients as $client)
      <div class="card card-block bg-faded">
        <h3><a href="clients/{{$client->id}}">{{$client->name}}</a></h3>

      </div>
    @endforeach
  @else
    <p>No available Clients</p>
  @endif

  <br>
  <a href="clients/create" class="btn btn-secondary">Add client</a>
@endsection
