@extends('layouts.authuser')

@section('left-hand-content')

    <div class="row">
        <div class="col-12 text-center text-dark pt-3 mb-4">
            <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid profile-header-image mb-3">
            <h2 class="font-weight-bold header-text">Johnnie Edem</h2>
        </div>
    </div>

@endsection

@section('main-content')

@endsection

@section('right-hand-content')
    <div class="row">
        <div class="col-12 text-center text-dark pt-3 mb-4">
            <h2 class="">Weekly Featured Photo</h2>
            <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid rounded">
            <div class="featured-image-details text-left pt-4">
                <p><span class="font-weight-bold pr-3">Name:</span>Esther Johnnie Okon
                <br>
                <span class="font-weight-bold pr-3">Department:</span> Chemistry Education
                <br>
                <span class="font-weight-bold pr-3">Level:</span> 300 Level
                <br>
                <span class="font-weight-bold pr-3">Hobbies:</span> <br>Cooking, Twerking, Skin showing
            </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center pt-3 mb-4">
            <h2 class="text-dark py-3">Trending Gists</h2>

            <div class="trending-gist-list">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id.
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

