@extends('layouts.master')
@section('card')
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-12">
          <span class="h1">systems</span>
        </div>
      </div>
    </div>


    <div class="card-body">
      @if(count($systems)>0)
        {{-- Loop print the title, body, timestam for each post --}}
        @foreach ($systems as $system)
          <div class="list-group">
            <a class="list-group-item list-group-item-action bg-light" href="systems/{{$system->id}}">
              <span class="h4">{{$system->id}}: {{$system->name}}</span>
            </a>
          </div>
        @endforeach

      @else {{-- if no post found --}}
      <div class="alert alert-info">
        <span class="h3">No systems were found</span>
      </div>
      @endif
      <div class="row mt-2">
        <div class="col-md-6">
          <a href="./" class="btn btn-secondary float-md-left">Back</a>
        </div>
        <div class="col-md-6">
          <a href="systems/create" class="btn btn-primary float-md-right">Add system</a>
        </div>
      </div>
    </div>
  </div>
@endsection