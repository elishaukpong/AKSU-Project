@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12">
                <h3 class="font-weight-light primary-color">A blog about everything AKSU</h3>
            </div>

            <div class="col-md-7 col-12">
                <ul class="list-inline text-center">
                    <li class="list-inline-item mx-3  "><a href="#" class="blog-tag-button btn-primary px-4 py-2">Parties</a></li>
                    <li class="list-inline-item mx-3  "><a href="#" class="blog-tag-button btn-primary px-4 py-2">Accomodation</a></li>
                    <li class="list-inline-item mx-3  "><a href="#" class="blog-tag-button btn-primary px-4 py-2">Gossips</a></li>
                    <li class="list-inline-item mx-3  "><a href="#" class="blog-tag-button btn-primary px-4 py-2">Business</a></li>
                </ul>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-1 col-12">
                <p class="font-weight-bold primary-color">AKSUMatters.com</p>
            </div>
            <div class="col-md-10 col-12 ml-5">
                <hr>
            </div>
        </div>
    </div>
</section>

<section class="first-post my-5">
    <div class="container shadow">
        <div class="row ">
            <div class="col-md-6 col-12 text-content px-5 ">
                <p class="mb-0">
                    <a href="#" class="blog-tag-button btn-primary px-4 py-2"> Educational </a>
                </p>
                <h1 class="text-left my-4 font-weight-bold text-dark">
                    My first Day in Akwa Ibom State University
                </h1>
                <p>January 29th, 2019</p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque neque in cumque!
                </p>
                <p class="mb-0">
                    <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                </p>
            </div>
            <div class="col-md-6 col-12 pr-0">
                <img src="{{asset('img/blog1.jpg')}}" alt="blog image" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endsection
