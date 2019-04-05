@extends('layouts.auth')

@section('content')
<div class="container auth-page">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="row text-white">
                <div class="col-md-4 mx-auto py-5 text-center auth-left d-none d-lg-block">
                    <h1 class="font-weight-bold">Sign Up</h1>
                    <br>
                    <br>
                    <br>
                    <h4 class="px-4">Join the ever growing AKSU community</h4>
                    <br><br><br>
                    <small>
                        Your registration number will be validated before gaining access to our community!
                    </small>
                </div>
                <div class="col-lg-8 col-12 bg-light py-5 auth-right">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="name" type="text" class="px-4 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus placeholder="Full Name"> @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="reg_number" type="text" class=" px-4 form-control{{ $errors->has('reg_number') ? ' is-invalid' : '' }}" name="reg_number" value="{{ old('reg_number') }}"
                                    required autofocus placeholder="Reg. Number"> @if ($errors->has('reg_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('reg_number') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 mx-auto">
                                <input id="email" type="email" class="px-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required placeholder="Email Address"> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="password" type="password" class="px-4 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required placeholder="Enter Password"> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 mx-auto">
                                <input id="password-confirm" type="password" class="px-4 form-control" name="password_confirmation" required placeholder="Re-Enter Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 mx-auto text-center">
                                <small class="primary-color d-lg-none">
                                    Your registration number will be validated before gaining access to our community!
                                </small>
                                <button type="submit" class="form-control btn btn-primary mt-3">
                                    {{ __('Join AKSU Matters!') }}
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
