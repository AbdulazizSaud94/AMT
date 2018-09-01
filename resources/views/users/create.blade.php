@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h1">{{ __('Create User') }} </span>
                    </div>

                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <div class="row text-left">
                                <div class="col-lg-8">
                                    <div class="text-center">
                                        <span class="h2">User Information</span>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                            <input id="phone" type="text" value="05" class="form-control" name="phone" required>
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
                                            <input id="title" type="text" class="form-control" name="title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="text-center"><span class="h2">User Role</span></div>
                                    <hr>
                                    @if(count($roles)>0)
                                        @foreach($roles as $role)
                                            <div class="m-2 custom-control custom-checkbox">
                                                <input type="checkbox" class='custom-control-input' value="{{$role->name}}" id="role{{$role->id}}" name="role[]">
                                                 <label class="custom-control-label" for="role{{$role->id}}">{{$role->name}}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row m-auto">
                                    <div class="col-lg-6">
                                        <button class="btn btn-secondary text-white float-left" href="./">Back</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary float-right">
                                            {{ __('Add') }}
                                        </button>
                                    </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
