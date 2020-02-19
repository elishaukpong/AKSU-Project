@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card-columns">
                @foreach($entities as $entity)
                    <div class="card">
                    <img class="card-img-top img-fluid" src="{{$entity->photos->first()->getDisplayPath()}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$entity->name}}</h2>
                        <p class="card-text">
                            {{$entity->shortDesc}}
                        </p>

                        <a href="{{route('apartments.show', $entity->id)}}" class="form-control btn btn-sm waves-effect waves-light btn-rounded btn-dark mx-1 mt-1">See Apartment</a>

                        <hr>

                        <div class="tags mb-3">
                            @foreach($entity->tags as $tag)
                                <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-{{\App\Entities\Apartments\ApartmentTag::getButtonColor()}} mx-1 mt-1">{{$tag->name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>


    </div>

    <div class="row">
        <div class="col-12 col-md-4 mx-auto">
            <div class="text-center">
                {{$entities->links()}}
            </div>
        </div>
    </div>
@endsection
