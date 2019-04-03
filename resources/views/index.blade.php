@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-12 primary-color">
            <div class="mt-md-3 pt-md-3 mt-lg-5 pt-lg-5"></div>
            <p class="header-welcome">Welcome to</p>
            <h1 class="font-weight-bold display-2 primary-color d-none d-lg-block">AKSU MATTERS!</h1>
            <h1 class="font-weight-bold primary-color d-lg-none">AKSU MATTERS!</h1>
            <p class="header-welcome2 mb-3">An online community of the great tehilans!</p>

            <a class="signup-button btn btn-outline-primary rounded px-5" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
        <div class="col-md-7 col-12 d-none d-md-block">
            <img src="{{asset('img/first.svg')}}" alt="header image" class="img-fluid">
        </div>
    </div>
</div>
@endsection

