@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <p class="small font-weight-medium">Name:</p>
                    <h1 class="page-title text-truncate text-dark font-weight-medium ">{{$entity->name}}</h1>

                    <hr>
                    <p class="small font-weight-medium">Description:</p>
                    <p class="">{{$entity->description}}</p>

                    <div class="text-center mt-5">
                        <a href="{{route('tags.edit', $entity->id)}}" class="btn btn-sm px-5 mr-3 waves-effect waves-light btn-rounded btn-cyan">Edit</a>
                        <a href="{{url()->previous()}}" class="btn btn-sm px-5 waves-effect waves-light btn-rounded btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
