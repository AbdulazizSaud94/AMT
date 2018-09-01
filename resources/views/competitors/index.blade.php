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
      @if(count($competitors)>0)
        {{-- Loop print the title, body, timestam for each post --}}
        @foreach ($competitors as $competitor)
          <div class="list-group">
            <a class="list-group-item list-group-item-action bg-light" href="competitors/{{$competitor->id}}">
              <span class="h4">{{$competitor->id}}: {{$competitor->name}}</span>
            </a>
          </div>
        @endforeach

      @else {{-- if no post found --}}
      <div class="alert alert-info">
        <span class="h3">No competitors were found</span>
      </div>
      @endif
      <div class="row mt-2">
        <div class="col-md-6">
          <a href="./" class="btn btn-secondary float-md-left">Back</a>
        </div>
        <div class="col-md-6">
          <a href="competitors/create" class="btn btn-primary float-md-right">Add competitor</a>
        </div>
      </div>
    </div>
  </div>
@endsection