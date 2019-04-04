@extends('layouts.auth')

@section('content')
<div class="container auth-page">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="row text-white">
                <div class="col-md-4 mx-auto py-5 text-center auth-left d-none d-lg-block">
                    <h1 class="font-weight-bold">Reset Password</h1>
                    <br>
                    <br>
                    <br>
                    <h4 class="px-4">Join the ever growing AKSU community</h4>

                </div>
                <div class="col-lg-8 col-12 bg-light py-5 auth-right">
                   <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                    <br>
                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"
                                    required autofocus placeholder="Enter Email"> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required placeholder="Enter new password"> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm new password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                                        {{ __('Reset Password') }}
                                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
