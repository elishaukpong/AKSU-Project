@extends('layouts.auth')

@section('content')
<div class="container auth-page">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="row text-white">
                <div class="col-md-4 mx-auto py-5 text-center auth-left d-none d-lg-block">
                    <h1 class="font-weight-bold">Reset Password</h1>
                </div>
                <div class="col-lg-8 col-12 bg-light py-5 auth-right">
                   <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 mx-auto">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required placeholder="Enter Email Address"> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-2 mx-auto">
                                <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
