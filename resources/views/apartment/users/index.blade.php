@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12 @if(! $entities->count()) col-md-8 mx-auto @endif mt-4">
            <div class="@if($entities->count()) card-columns @endif">
                @forelse($entities as $entity)
                    <div class="card">
                    <img class="card-img-top img-fluid" src="{{$entity->photos->first()->getDisplayPath()}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$entity->name}}</h2>
                        <p class="card-text">
                            {{$entity->shortDesc}}
                        </p>

                        @if($entity->hasViewRequests())
                            <a href="{{route('apartments.show', $entity->id)}}" class="form-control btn btn-sm waves-effect waves-light btn-rounded btn-light mx-1 mt-1">See Requests</a>
                        @endif

                        <a href="{{route('apartments.show', $entity->id)}}" class="form-control btn btn-sm waves-effect waves-light btn-rounded btn-dark mx-1 mt-1">See Apartment</a>

                        <hr>

                        <div class="tags mb-3">
                            @foreach($entity->tags as $tag)
                                <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-{{\App\Entities\Apartments\ApartmentTag::getButtonColor()}} mx-1 mt-1">{{$tag->name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                @empty
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="page-title text-center text-dark font-weight-medium">You have not listed an Apartment yet</h1>

                            <br><br>
                            <a href="{{route('apartments.create')}}" class="text-white btn btn-dark btn-rounded"> Create Apartment </a>

                        </div>
                    </div>
                    @endforelse
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
