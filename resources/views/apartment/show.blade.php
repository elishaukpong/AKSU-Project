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
                    <h1 class="page-title text-truncate text-dark font-weight-medium ">{{$entity->name}}.</h1>
                    <h2 class="page-title text-truncate text-dark font-weight-medium ">{{$entity->displayAmount}}</h2>
                    @if(! $entity->viewedByOwner())
                    <br>
                        <button type="button" data-toggle="modal" data-target="#add-to-wishlist" class="btn btn-sm waves-effect waves-light btn-rounded btn-danger apartment-wishlist my-1" style="font-size: 10px"><i class="far fa-heart"></i> Add to Wishlist</button>
                        @if(! $entity->alreadyRequestedByUser())
                            <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-dark my-1" data-toggle="modal" data-target="#see-apartment-request" style="font-size: 10px">Request To See</button>
                        @else
                            <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-dark my-1" style="font-size: 10px">Already Requested</button>
                        @endif

                        <button type="button" class="btn btn-sm waves-effect waves-light btn-rounded btn-light roommate my-1" style="font-size: 10px">Request Room Mate</button>
                    @endif

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
                        @if($entity->viewedByOwner())
                            <a href="{{route('apartments.edit', $entity->id)}}" class="btn btn-sm px-5 mr-1 waves-effect waves-light btn-rounded btn-cyan my-1">Edit</a>
                            <a href="{{route('apartments.destroy', $entity->id)}}" class="btn btn-sm px-5 mr-1 waves-effect waves-light btn-rounded btn-danger my-1">Delete</a>
                        @endif
                        <a href="{{route('apartments.index')}}" class="btn btn-sm px-5 waves-effect waves-light btn-rounded btn-primary my-1">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(! $entity->alreadyRequestedByUser())
        <div id="see-apartment-request" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-dark text-center">
                    <h4 class="modal-title" id="dark-header-modalLabel">Request To See Apartment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('apartment.viewsrequest.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="apartment_id" value="{{$entity->id}}">
                        <div class="form-group">
                            <p class="small">Option Message to Apartment Owner</p>
                            <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="3" placeholder="Apartment Description Here...">{{old('description')}}</textarea>

                        </div>

                        <div class="form-actions mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    @endif

        <div id="add-to-wishlist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-dark text-center">
                    <h4 class="modal-title" id="dark-header-modalLabel">Add Apartment to Wishlist?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('wishlists.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="apartment_id" value="{{$entity->id}}">

                        <div class="form-actions mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Yes</button>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
