@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-100">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {!! Form::open(['action' => ['UsersController@update', $user->id] , "method"=>"POST"]) !!}
                        <div class="form-group row">
                            <table class="table text-center">
                                <tr>
                                    <th colspan=8>User Role</th>
                                </tr>
                                <tr>
                                    <th>Super Admin</th>
                                    <th>Admin</th>
                                    <th>General Manger</th>
                                    <th>Sales Manger</th>
                                    <th>Pre-sales Manger</th>
                                    <th>Sales Engineer</th>
                                    <th>Pre-sales Engineer</th>
                                    <th>Customer</th>
                                </tr>
                                <tr>

                                    <td><input type="checkbox" name="super-admin" value="super admin" @if($user->hasRole('super admin')) checked @endif></td>
                                    <td><input type="checkbox" name="admin" value="admin" @if($user->hasRole('admin')) checked @endif></td>
                                    <td><input type="checkbox" name="general-manger" value="general manger" @if($user->hasRole('general manger')) checked @endif></td>
                                    <td><input type="checkbox" name="sales-manger" value="sales manger" @if($user->hasRole('sales manger')) checked @endif></td>
                                    <td><input type="checkbox" name="pre-sales-manger" value="pre-sales manger" @if($user->hasRole('pre-sales manger')) checked @endif></td>
                                    <td><input type="checkbox" name="sales-engineer" value="sales engineer" @if($user->hasRole('sales-engineer')) checked @endif></td>
                                    <td><input type="checkbox" name="pre-sales-engineer" value="pre-sales engineer" @if($user->hasRole('pre-sales engineer')) checked @endif></td>
                                    <td><input type="checkbox" name="customer" value="customer" @if($user->hasRole('customer')) checked @endif></td>
                                </tr>
                            </table>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name}}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" value="{{$user->phone}}" class="form-control" name="phone" required>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" value="{{$user->title}}" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{method_field('PUT')}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
