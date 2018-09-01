@extends('layouts.master')



@section('card')
    <div class="card">
        <div class="card-header">
            <span class = "h1">{{$client->name}}</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <tbody class="table-striped">
                        <tr>
                            <th>Address:</th>
                            <td>{{$client->address}}</td>
                        </tr>
                        <tr>
                            <th>Telephone:</th>
                            <td>{{$client->telephone}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <a href="{{URL('clients')}}" class="btn btn-secondary">Go Back</a>
                </div>
                <div class="col-6 text-right">
                    <a href="{{$client->id}}/edit" class="btn btn-info">Edit</a>
                    @if(Auth::user()->hasRole('super admin'))
                        {!!Form::open(['action' => ['ClientsController@destroy', $client->id], 'method' => 'POST', 'class' => 'd-inline'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
