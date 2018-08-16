@extends('layouts.master')

@section('content')
<<<<<<< HEAD
  <h1>Clients</h1>
  @if(count($clients)>0)
    @foreach ($clients as $client)
      <div class="card card-block bg-faded">
        <h3><a href="clients/{{$client->id}}">{{$client->name}}</a></h3>
=======
    <h1>Clients</h1>
    @if(count($clients)>0)
        @foreach ($clients as $client)
            <div class="card card-block bg-faded">
                <h3><a href="/laravel/AMT/public/clients/{{$client->id}}">{{$client->name}}</a></h3>
>>>>>>> RFQ_Mohannad

            </div>
        @endforeach
    @else
        <p>No available Clients</p>
    @endif

<<<<<<< HEAD
  <br>
  <a href="clients/create" class="btn btn-secondary">Add client</a>
=======
    <br>
    <a href="/laravel/AMT/public/clients/create" class="btn btn-secondary">Add client</a>
>>>>>>> RFQ_Mohannad
@endsection
