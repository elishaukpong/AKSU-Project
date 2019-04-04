@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="mt-md-3 pt-md-3 mt-lg-4 pt-lg-4"></div>
                <h1 class="font-weight-bold display-4 primary-color d-none d-lg-block">
                    <span class="font-weight-light">About </span>  AKSU MATTERS!</h1>
                <h1 class="font-weight-bold primary-color d-lg-none"> <span class="font-weight-light">About </span><br>AKSU MATTERS!</h1>

                <p class="mt-3 about-content mr-md-5 pr-md-5">
                    We are committed to bringing you the best tailored information regarding Akwa Ibom State University, ranging through campus trends, hottest gist on campus, most fashion-concious student, educational freebies, late night gossips, love-life, Kasalas', parties and trendy events to make your stay on campus fun and lively.
                    <br><br>
                    Aksu Matters! aims to build a bond between students by creating a free and leveled ground of interaction between ourselves .
                    <br><br>
                    Every student deserves fun admist education!
                </p>
            </div>
            <div class="col-md-2 my-4 col-12">
                <img src="{{asset('img/about.svg')}}" alt="header image" class="img-fluid d-none d-md-block">
            </div>
        </div>
    </div>
</section>
@endsection
