@extends('layouts.app')
@section('content')
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron campus-jumbotron text-center">

                <h1 class="display-1 text-white font-weight-bold">
                    AKSU CAMPUSES
                </h1>
            <h1 class="text-white font-weight-bold">2 Campuses; One Insitution</h1>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row my-3">
            <div class="col-12">
                <p class="text-justify about-aksu">
                    Akwa Ibom State University is a multi-campus institution, with two campuses located in the central and southern parts of
                    the State. The Main Campus is in the southern or coastal part, mostly within Mkpat Enin L.G.A., but also including Eastern
                    Obolo, Onna and Ibeno L.G.As. The northern upland part of the Main Campus is situated at Ikot Akpaden between Eket and Ikot
                    Abasi, on Nigeria's East-West Highway. The Main Campus stretches over a distance of 12km from the highway to the shoreline and is 4km wide.
                </p>

                <p class="text-justify about-aksu">
                   The Obio Akpa Campus is the second site, meant for the Faculties of Agriculture, Social and Management Sciences. The campus
                    has a sub-urban setting, adjoining Abak town and is within 15 minutes' drive from Uyo. Its topography is undulatory with
                    gentle hills and slopes which gives it a unique scene.
                </p>
            </div>
    </div>

    <div class="row my-5">
        <div class="col-md-6 col-12">
            <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid">
        </div>
        <div class="col-md-6 col-12 text-center text-content">
            <h1 class="primary-color font-weight-bold text-center py-3">Main Campus</h1>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn signup-button btn-outline-primary rounded"> See More Details </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-6 col-12 text-center text-content">
            <h1 class="primary-color font-weight-bold text-center py-3">Obio Akpa Campus</h1>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn signup-button btn-outline-primary rounded"> See More Details </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <img src="{{asset('img/blog2.jpg')}}" alt="header image" class="img-fluid">
        </div>
    </div>
</div>
</section>
@endsection
