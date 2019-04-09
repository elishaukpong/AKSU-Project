@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 alumni-student-header text-content">
                <div class="row">
                    <div class="col-8 mx-auto">
                        <h1 class="display-2 text-white">
                            AKSU <br>
                            Alumni Students
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center pr-5 text-content">
                <img src="{{asset('img/alumni.svg')}}" alt="header image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 font-weight-bold">Class List</h1>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p>class of 2019</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p>class of 2019</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <p>class of 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
