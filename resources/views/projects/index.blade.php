@extends('layouts.master')
@section('card')
<div class="card">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    <span class="h1">Projects</span>
                </div>
            </div>
        </div>
            <div class="card-body">
                @if(count($projects) > 0)
                    {{-- Loop print the title, body, timestam for each post --}}
                    @foreach($projects as $project)
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action bg-light" href="projects/{{$project->id}}">
                                {{$project->name}}
                                <br>
                                <span class="small">Project type: {{$project->type}}</span>
                            </a>
                        </div>
                    @endforeach

                @else {{-- if no post found --}}
                <div class="alert alert-info">
                    <span class="h3">No projects were found</span>
                </div>
                @endif
                <div class="row mt-2">
                    <div class="col-md-6">
                        <a href="{{URL('/')}}" class="btn btn-secondary float-md-left">Back</a>
                    </div>
                    <div class="col-md-6">
                        <a href="projects/create" class="btn btn-primary float-md-right">Add project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection