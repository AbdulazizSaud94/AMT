@extends('layouts.master')
@section('card')
    <div class="card">
        <div class="card-header">
            <span class = "h1">{{$system->name}}</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <tbody class="table-striped">
                        <tr>
                            <th>Name:</th>
                            <td>{{$system->name}}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{$system->description}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <a href="{{URL('systems')}}" class="btn btn-secondary">Go Back</a>
                </div>
                <div class="col-6 text-right">
                    <a href="{{$system->id}}/edit" class="btn btn-info">Edit</a>
                    @if(Auth::user()->hasRole('super admin'))
                        {!!Form::open(['action' => ['SystemsController@destroy', $system->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection