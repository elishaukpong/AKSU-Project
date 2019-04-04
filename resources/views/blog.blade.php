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

<section class="first-post">
    <div class="container">
        <div class="row text-content">
            <div class="col-md-6 col-12">

            </div>
            <div class="col-md-6 col-12">

            </div>
        </div>
    </div>
</section>
@endsection
