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

<section class="second-block py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Educational </a>
                        </p>
                        <img src="{{asset('img/blog2.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Parties </a>
                        </p>
                        <img src="{{asset('img/blog3.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 border-left pl-5">
                <div class="most-popular">
                    <h4 class="font-weight-bold text-dark py-3">
                        Most Popular
                    </h4>

                    <ul class="pl-0">
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                    </ul>

                </div>

                <div class="most-recent mt-5">
                    <h4 class="font-weight-bold text-dark py-3">
                        Most Recent
                    </h4>

                    <ul class="pl-0">
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                        <li class="my-2"><a href="#">Why You need Education</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="second-block py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Educational </a>
                        </p>
                        <img src="{{asset('img/blog2.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Parties </a>
                        </p>
                        <img src="{{asset('img/blog3.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 pl-5">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Educational </a>
                        </p>
                        <img src="{{asset('img/blog2.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="second-block py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Educational </a>
                        </p>
                        <img src="{{asset('img/blog2.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Parties </a>
                        </p>
                        <img src="{{asset('img/blog3.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 pl-5">
                <div class="card">
                    <div class="card-header">
                        <p class="mb-0 blog-tag">
                            <a href="#" class="blog-tag-button-2 btn btn-primary px-3 py-1 shadow"> Educational </a>
                        </p>
                        <img src="{{asset('img/blog2.jpg')}}" alt="blog image" class="img-fluid">
                    </div>
                    <div class="card-body px-4 py-4 text-dark">
                        <h3>
                            Why i didn't make it into computer science
                        </h3>
                        <p>January 29th, 2019</p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab omnis eos. Expedita quisquam excepturi maiores eaque
                            neque in cumque!
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn btn-sm btn-dark px-4 py-2"> Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="before-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white py-5 text-warning">
                <h2>
                    Get news, insights and posts directly into your inbox
                </h2>
                <form action="#">
                        <div class="form-group row my-4">
                            <div class="col-md-6 offset-md-2">
                                <input id="email" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus> @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span> @endif
                            </div>

                            <div class="col-md-2">
                                <input type="submit" value="SUBSCRIBE" class="form-control btn btn-success">
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
