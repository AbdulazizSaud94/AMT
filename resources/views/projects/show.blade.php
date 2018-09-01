@extends('layouts.master')
@section('card')
    <div class="card">
        <div class="card-header">
            <span class = "h1">{{$project->name}}</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <tbody class="table-striped">
                            <tr>
                                <th>Location</th>
                                <td>{{$project->location}}</td>
                            </tr>
                            <tr>
                                <th>Type:</th>
                                <td>{{$project->type}}</td>
                            </tr>
                            <tr>
                                <th>Created By:</th>
                                <td>{{$project->user->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <a href="{{URL('projects')}}" class="btn btn-secondary">Go Back</a>
                </div>
                <div class="col-6 text-right">
                    <a href="{{$project->id}}/edit" class="btn btn-info">Edit</a>
                    @if(Auth::user()->hasRole('super admin'))
                        {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection



