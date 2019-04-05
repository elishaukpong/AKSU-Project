@if (session('return-user'))
<div class="container">
    <div class="row justify-content-center">
        <div class="onboarding-box">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto onboard-box py-5">
                        <div class="row">
                            <div class="col-md-4 col-12 mx-auto">
                                <img src="{{asset('img/welcome.svg')}}" alt="header image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-12 mx-auto text-center">
                                <h1 class="font-weight-bold text-white mt-2">Welcome back!</h1>
                                <a class="onboard-next-button btn btn-outline-primary rounded px-5 mt-4">{{ __('Close') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (session('new-user'))
   <div class="container">
    <div class="row justify-content-center">
        <div class="onboarding-box">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto onboard-box py-5">
                        <div class="row">
                            <div class="col-md-4 col-12 mx-auto">
                                <img src="{{asset('img/welcome.svg')}}" alt="header image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-12 mx-auto text-center">
                                <h1 class="font-weight-bold text-white mt-2">Welcome to AKSU Matters!</h1>
                                <a class="onboard-next-button btn btn-outline-primary rounded px-5 mt-4">{{ __('Next') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-12 mx-auto onboard-box py-5 collapse">
                        <div class="row">
                            <div class="col-md-4 col-12 mx-auto">
                                <img src="{{asset('img/connect.svg')}}" alt="header image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-12 mx-auto text-center">
                                <h1 class="font-weight-bold text-white mt-2">Connect! Network! <br>Make Friends!</h1>
                                <a class="onboard-prev-button btn btn-outline-primary rounded px-5 mt-4 mx-2">{{ __('Previous') }}</a>
                                <a class="onboard-next-button btn btn-outline-primary rounded px-5 mt-4 mx-2">{{ __('Next') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-12 mx-auto onboard-box py-5 collapse">
                        <div class="row">
                            <div class="col-md-4 col-12 mx-auto">
                                <img src="{{asset('img/third.svg')}}" alt="header image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-12 mx-auto text-center">
                                <h1 class="font-weight-bold text-white mt-2">Have Fun Hanging out <br>on our platform</h1>
                                <a class="onboard-prev-button btn btn-outline-primary rounded px-5 mt-4 mx-2">{{ __('Previous') }}</a>
                                <a class="onboard-next-button btn btn-outline-primary rounded px-5 mt-4">{{ __('Finish') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
