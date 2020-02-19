@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div id="apartments" class="carousel slide"
                 data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    @foreach($entity->photos as $key => $photo)
                        <div class="carousel-item @if($key == 0) active @endif">
                            <img class="img-fluid" src="{{asset($photo->getDisplayPath())}}"
                                 alt="{{$key + 1}} slide">
                        </div>
                    @endforeach
                </div>
                @if($entity->photos->count() > 1)
                    <a class="carousel-control-prev" href="#apartments"
                       role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#apartments"
                   role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <p class="small font-weight-medium">Name:</p>
                    <h1 class="page-title text-truncate text-dark font-weight-medium ">{{$entity->name}}</h1>

                    <hr>
                    <p class="small font-weight-medium">Description:</p>
                    <p class="">{{$entity->description}}</p>

                    <p class="small font-weight-medium">Location:</p>
                    <p class="">{{$entity->location}}</p>

                    <p class="small font-weight-medium">Landmark:</p>
                    <p class="">{{$entity->landmark}}</p>

                    <p class="small font-weight-medium">Type:</p>
                    <p class="">{{$entity->type->name}}</p>

                    <p class="small font-weight-medium">Added By:</p>
                    <p class="">{{$entity->owner->name}}</p>



                    <hr>
                    <div class="tags mb-3">
                        @foreach($entity->tags as $tag)
                            <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-{{\App\Entities\Apartments\ApartmentTag::getButtonColor()}} mx-1 mt-1">{{$tag->name}}</button>
                        @endforeach
                    </div>

                    <div class="text-center mt-5">
                        <a href="{{route('apartments.edit', $entity->id)}}" class="btn btn-sm px-5 mr-3 waves-effect waves-light btn-rounded btn-cyan">Edit</a>
                        <a href="{{url()->previous()}}" class="btn btn-sm px-5 waves-effect waves-light btn-rounded btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
