@extends('layouts.auth')

@section('content')
    <div class="container auth-page">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row text-white">
                    <div class="col-md-4 mx-auto py-5 text-center auth-left d-none d-lg-block">
                        <h1 class="font-weight-bold">Log In</h1>
                        <br>
                        <br>
                        <br>
                        <h4 class="px-4">Welcome back to  the ever growing AKSU community</h4>
                        <br><br><br>
                        <small>
                            ...alot happened while you were away
                        </small>
                    </div>
                    <div class="col-lg-8 col-12 bg-light py-5 auth-right">
                <div class="mt-md-3 pt-md-3 mt-lg-4 pt-lg-4"></div>
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 mx-auto">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required autofocus placeholder="Enter Email or Reg Number"> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 mx-auto">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required placeholder="Enter Password"> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    <label class="form-check-label primary-color" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2 text-center">
                                <button type="submit" class="form-control btn btn-primary">
                                                        {{ __('Enter the Community') }}
                                                    </button> @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a> @endif
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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
