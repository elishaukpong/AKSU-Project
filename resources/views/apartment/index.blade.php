@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top img-fluid" src="../assets/images/big/img6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
