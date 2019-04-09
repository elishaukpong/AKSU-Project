@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12 mx-auto">
                <img src="{{asset('img/contact.svg')}}" alt="header image" class="img-fluid d-none d-md-block">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="mt-md-3 pt-md-3 mt-lg-4 pt-lg-4"></div>
                <h1 class="font-weight-bold display-4 primary-color  text-center">
                    <span class="font-weight-light">Say</span>  HELLO to us!
                </h1>
                <div class="text-center px-md-5">
                    <p class="text-dark">We would love to here your thoughts and improvements we can make <br> to make you, our comrade feel more better and well served.</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6 col-12 text-content order-2 order-md-0 pt-3 pt-md-0">
                <div class="address py-3">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('img/direction.svg')}}" alt="header image" class="img-fluid d-none d-md-block">
                        </div>
                        <div class="col-7">
                            <h3 class="primary-color font-weight-bold">Address</h3>
                            <p>
                                Akwa Ibom State University
                                <br>
                                Main Campus, Ikot Akpaden
                                Mkpat Enin L.G.A Akwa Ibom State</p>
                        </div>
                    </div>

                </div>

                <div class="address py-3">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('img/personal.svg')}}" alt="header image" class="img-fluid d-none d-md-block">
                        </div>
                        <div class="col-5">
                            <h3 class="primary-color font-weight-bold">Phone</h3>
                            <p>08123641748
                            <br>
                            08123641748</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-5 col-md-6 col-12">
                <form action="#" method="POST">
                    <div class="form-group row">
                        <div class="col-md-10 mx-auto">
                            <input id="name" type="text" class="px-4 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                required placeholder="Full Name"> @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10 mx-auto">
                            <input id="email" type="email" class="px-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required placeholder="Enter Email"> @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10 mx-auto">
                            <textarea id="message" rows="7" class="px-4 form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message"
                                required placeholder="Enter Message"> {{ old('message') }} </textarea>
                                @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10 mx-auto">
                           <input type="submit" value="SEND MESSAGE" class="btn btn-primary form-control signup-button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-md-3 pt-md-3 mt-lg-4 pt-lg-4"></div>
</section>
@endsection
