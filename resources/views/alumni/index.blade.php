@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row d-none d-lg-flex">
            <div class="col-8 alumni-student-header text-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-2 text-white">
                            AKSU <br>
                            Alumni Students
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center pr-5 text-content">
                <img src="{{asset('img/alumni.svg')}}" alt="header image" class="img-fluid">
            </div>
        </div>

        <div class="row d-bloack d-lg-none">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold">AKSU ALUMNI STUDENTS</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-lg-5 py-lg-5 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 font-weight-bold">Class List</h1>
            </div>
        </div>

        <div class="row pt-4 ">
            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                        <div class="card-header text-center">
                            <h1 class="font-weight-bold">
                                Class of 2021
                            </h1>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                        <div class="card-header text-center">
                            <h1 class="font-weight-bold">
                                Class of 2021
                            </h1>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                        <div class="card-header text-center">
                            <h1 class="font-weight-bold">
                                Class of 2021
                            </h1>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

            <div class="col-md-4 col-12 class-list py-4">
                <div class="card">
                    <a href="#">
                         <div class="card-header text-center">
                             <h1 class="font-weight-bold">
                                 Class of 2021
                             </h1>
                         </div>
                     </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="before-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white py-5 text-warning">
                <i class="fa fa-user mr-3 display-4" aria-hidden="true"></i>
                <h2>
                   Join the Tehilans today!
                </h2>
                <a class="signup-button btn btn-outline-warning rounded px-5 mt-3" href="{{ route('register') }}">{{ __("Let's Go") }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
