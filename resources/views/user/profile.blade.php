@extends('layouts.app')
@section('content')

<section>
    <div class="container pb-4">
        <div class="row">

            <div class="col-3 card rounded">
                <div class="row">
                    <div class="col-12 text-center text-dark pt-3">
                        <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid profile-header-image mb-3">
                        <h2 class="font-weight-bold header-text">Johnnie Edem</h2>
                        <p class="text-secondary p-0 m-1">Level 300 | Chemistry Education</p>

                        <p class="text-secondary p-0 m-0">Basic User  |  <i class="fa fa-eercast" aria-hidden="true"></i>  1000</p>

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
                        <a href="#" class="btn btn-outline-dark btn-sm px-4">Edit Profile</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-center text-dark pt-3 mb-4">
                        <p class="font-weight-bold text-secondary">Contact Information</p>
                        <p class="text-secondary">
                            Ishukpong418@gmail.com
                        </p>
                        <p class="text-secondary">
                            08123641748
                        </p>
                        <p class="text-secondary px-3">
                            26 Information Drive, off IBB Avenue, Uyo
                        </p>


                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-12 mx-3">
                        <h1>Your Recent Activities</h1>

                    </div>
                </div>
            </div>

            <div class="col-3">
               @include('inc.sidebar')
            </div>

        </div>
    </div>
</section>

@endsection

