@extends('layouts.authuser')

@section('left-hand-content')

    <div class="row">
        <div class="col-12 text-center text-dark pt-3 mb-4">
            <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid profile-header-image mb-3">
            <h2 class="font-weight-bold header-text">Johnnie Edem</h2>
            <p class="text-secondary p-0 m-1">Level 300 | Chemistry Education</p>

            <p class="text-secondary p-0 m-0">Basic User | <i class="fa fa-eercast" aria-hidden="true"></i> 1000</p>

            <div class="py-3">
                <ul class="list-inline">
                    <li class="list-inline-item px-1">
                        <a href="#">
                            <i class="fa fa-facebook social-icons text-secondary" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item px-1">
                        <a href="#">
                            <i class="fa fa-twitter social-icons text-secondary" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item px-1">
                        <a href="#">
                            <i class="fa fa-instagram social-icons text-secondary" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('main-content')

@endsection

@section('right-hand-content')
    @include('inc.sidebar')
@endsection

