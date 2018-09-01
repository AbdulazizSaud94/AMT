@extends('layouts.master')
@section('card')
    <div class="card">
        <div class="card-header">
            <span class = "h1">{{$competitor->name}}</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <tbody class="table-striped">
                        <tr>
                            <th>Name:</th>
                            <td>{{$competitor->name}}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{$competitor->description}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <a href="{{URL('competitors')}}" class="btn btn-secondary">Go Back</a>
                </div>
                <div class="col-6 text-right">
                    <a href="{{$competitor->id}}/edit" class="btn btn-info">Edit</a>
                    @if(Auth::user()->hasRole('super admin'))
                        {!!Form::open(['action' => ['CompetitorsController@destroy', $competitor->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection