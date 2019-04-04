@extends('layouts.app')

@section('content')
<div class="section">
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
</div>

<section class="my-5 py-lg-5">
    <div class="container">
        <div class="row">
           <div class="col-12 text-center">
               <h2 class="primary-color">
                   What is Aksu Matter?
               </h2>
           </div>
           <div class="col-md-8 col-12 mx-auto text-center text-dark">
               <p>Aksu Matters is a community of Akwa Ibom State University Students, past and present, coming together on a unique platform to share their uniqueness. It is an heritagea and we guard it jealously</p>
           </div>
        </div>

        <div class="mt-2 mt-md-3 pt-md-3 mt-lg-5 pt-lg-4"></div>
        {{-- Meet People --}}
        <div class="row">
            <div class="col-md-3 col-8 mx-auto">
                <img src="{{asset('img/second.svg')}}" alt="header image" class="img-fluid">
            </div>
            <div class="col-md-7 col-12 mx-auto text-content mt-3 mt-md-0">
                <h1 class="display-4  primary-color">Meet People!</h1>
                <p class="mx-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae modi deserunt veniam eos voluptas odio in deleniti laboriosam ducimus excepturi, ipsam, non maxime quibusdam sunt quidem quisquam aspernatur suscipit amet!
                </p>
            </div>
        </div>

        <div class="mt-2 mt-md-3 pt-md-3 mt-lg-5 pt-lg-4"></div>
        {{-- Join Alumni --}}
        <div class="row">
            <div class="col-md-7 col-12 mx-auto text-content">
                <h1 class="display-4  primary-color mt-3 mt-md-0">Join Alumni!</h1>
                <p class="mx-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae modi deserunt veniam eos voluptas odio in deleniti laboriosam ducimus excepturi, ipsam, non maxime quibusdam sunt quidem quisquam aspernatur suscipit amet!
                </p>
            </div>
            <div class="col-md-3 col-8 mx-auto order-first order-md-last">
                <img src="{{asset('img/alumni.svg')}}" alt="header image" class="img-fluid">
            </div>
        </div>

        <div class="mt-2 mt-md-3 pt-md-3 mt-lg-5 pt-lg-4"> </div>
        {{-- Get Help --}}
        <div class="row">
            <div class="col-md-4 col-8 mx-auto">
                <img src="{{asset('img/help.svg')}}" alt="header image" class="img-fluid">
            </div>
            <div class="col-md-7 col-12 mx-auto text-content">
                <h1 class="display-4  primary-color mt-3 mt-md-0">Get Help!</h1>
                <p class="mx-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae modi deserunt veniam eos voluptas odio in deleniti laboriosam
                    ducimus excepturi, ipsam, non maxime quibusdam sunt quidem quisquam aspernatur suscipit amet!
                </p>
            </div>
        </div>

        <div class="mt-2 mt-md-3 pt-md-3 mt-lg-5 pt-lg-4"> </div>
        {{-- Find Love --}}
        <div class="row">
            <div class="col-md-7 col-12 mx-auto text-content">
                <h1 class="display-4  primary-color mt-3 mt-md-0">Find Love!</h1>
                <p class="mx-5 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae modi deserunt veniam eos voluptas odio in deleniti laboriosam
                    ducimus excepturi, ipsam, non maxime quibusdam sunt quidem quisquam aspernatur suscipit amet!
                </p>
            </div>
            <div class="col-md-4 col-12  mx-auto order-first order-md-last">
                <img src="{{asset('img/love.svg')}}" alt="header image" class="img-fluid">
            </div>
        </div>

        <div class="mt-2 mt-md-3 pt-md-3 mt-lg-5 pt-lg-4"> </div>

        <div class="row">
            <div class="col-md-7 col-12 mx-auto text-content">
                <h1 class="display-4  primary-color">All in AKSU</h1>
                <p class="mx-5 ">
                    Find accomodation, find room mates, and many more...
                </p>
            </div>

        </div>
    </div>
</section>

<section class="before-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white py-5 text-warning">
                <i class="fa fa-bus mr-3 display-4" aria-hidden="true"></i>
                <h2>
                    Are you ready for an intriguing ride through campus?
                </h2>
                <a class="signup-button btn btn-outline-warning rounded px-5 mt-3" href="{{ route('register') }}">{{ __("Let's Go") }}</a>
            </div>
        </div>
    </div>
</section>
@endsection


