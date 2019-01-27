@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 py-5">
            <div class="card">
                <div class="card-header py-4 text-center">
                    <h3><span class="text-info font-weight-bold">{{__('eVal')}}</span> {{ __('Register') }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->has('g-recaptcha-response'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Please prove that you are not robot. </strong>Check captcha field below.
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="first-name" type="text" class="form-control{{ $errors->has('first-name') ? ' is-invalid' : '' }}" placeholder="First name" name="first-name" value="{{ old('first-name') }}" required autofocus>

                                @if ($errors->has('first-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="last-name" type="text" class="form-control{{ $errors->has('last-name') ? ' is-invalid' : '' }}" placeholder="Last name" name="last-name" value="{{ old('last-name') }}" required autofocus>

                                @if ($errors->has('last-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="organization" type="text" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}" placeholder="Organization" name="organization" value="{{ old('organization') }}" required autofocus>

                                @if ($errors->has('organization'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('organization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                             <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row my-4">
                            <div class="form-group col-md-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outline-primary btn-block">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row py-3">
                            <div class="col-md-12 text-center text-muted">
                                By clicking sign up, you agree to <a class="text-info" href="#">terms & conditions</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
