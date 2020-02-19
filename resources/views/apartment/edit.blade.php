@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{route('apartments.update', $entity->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-12 col-md-6 mx-auto">
                        <div id="content">
                            <div class="card">
                                <div class="card-body">
                                    @foreach($entity->photos as $key => $photo)
                                        @if($photo->description == \App\Entities\Files\File::getImageDescription(1))
                                            <input type="file" id="input-file-max-fs"
                                                   class="dropify"
                                                   data-max-file-size="2M" data-default-file="{{$photo->getDisplayPath()}}" name="apartment_file"/>
                                            <br>
                                        @elseif($photo->description == \App\Entities\Files\File::getImageDescription(2))
                                            <input type="file" id="input-file-max-fs"
                                                   class="dropify"
                                                   data-max-file-size="2M" data-default-file="{{$photo->getDisplayPath()}}" name="apartment_second_file"/>
                                            <br>
                                        @elseif($photo->description == \App\Entities\Files\File::getImageDescription(3))
                                            <input type="file" id="input-file-max-fs"
                                                   class="dropify"
                                                   data-max-file-size="2M" data-default-file="{{$photo->getDisplayPath()}}" name="apartment_third_file"/>

                                            <br>
                                        @endif


                                    @endforeach


                                    @if ($errors->has('apartment_file'))
                                        <span class="text-danger" style="font-size:80%" role="alert">
                                       <strong>{{ $errors->first('apartment_file')}}</strong>
                                    </span>
                                        <br>
                                    @endif

                                    @if ($errors->has('apartment_second_file'))
                                        <span class="text-danger" style="font-size:80%" role="alert">
                                       <strong>{{ $errors->first('apartment_second_file')}}</strong>
                                    </span>
                                        <br>
                                    @endif

                                    @if ($errors->has('apartment_third_file'))
                                        <span class="text-danger" style="font-size:80%" role="alert">
                                       <strong>{{ $errors->first('apartment_third_file')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            @if($entity->photos->count() < 3)
                                <button type="button" class="btn btn-primary btn-rounded add-more"><i class="fas fa-check"></i> Add Another Image</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label for="name">Name</label>

                                                    <input type="text" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{old('name') ?? $entity->name}}" placeholder="Apartment Name">

                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="amount">Amount</label>

                                                    <input type="number" id="amount" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" value="{{old('Amount') ?? $entity->amount}}" placeholder="Apartment Amount">

                                                    @if($errors->has('amount'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="location">Location</label>

                                                    <input type="text" id="location" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{old('location') ?? $entity->location}}" placeholder="Apartment Location">

                                                    @if ($errors->has('location'))
                                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="landmark">Land Mark</label>

                                                    <input type="text" id="landmark" class="form-control {{ $errors->has('landmark') ? ' is-invalid' : '' }}" name="landmark" value="{{old('landmark') ?? $entity->landmark}}" placeholder="Apartment Location">

                                                    @if ($errors->has('landmark'))
                                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('landmark') }}</strong>
                                            </span>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="apartmentType">Type</label>
                                                    <select class="form-control custom-select {{ $errors->has('apartment_type_id') ? ' is-invalid' : '' }}" id="apartmentType" name="apartment_type_id">
                                                        <option>Select Type</option>
                                                        @foreach($types as $type)
                                                            <option value="{{$type->id}}" @if(old('apartment_type_id') == $type->id || $entity->apartment_type_id == $type->id) selected @endif>{{$type->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('apartment_type_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('apartment_type_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">

                                                    <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="3" placeholder="Apartment Description Here...">{{old('description') ?? $entity->description}}</textarea>

                                                    @if ($errors->has('description'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <p>Tags</p>
                                        @if ($errors->has('apartment_tags'))
                                            <span class="text-danger" style="font-size:80%" role="alert">
                                               <strong>{{ $errors->first('apartment_tags')}}</strong>
                                            </span>
                                        @endif
                                    <hr>
                                    @foreach($tags as $key => $tag)
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" @if(in_array($tag->id, $entity->tags->pluck('id')->toArray())) checked @endif name="apartment_tags[]" value="{{$tag->id}}" class="custom-control-input" id="tag-{{$key}}">
                                                <label class="custom-control-label" for="tag-{{$key}}">{{$tag->name}}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="form-actions mt-4">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('dashboard-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha256-SUaao5Q7ifr2twwET0iyXVy0OVnuFJhGVi5E/dqEiLU=" crossorigin="anonymous"></script>

    <script>
        $('.dropify').dropify();

        $('button.add-more').click(function(){
            let container = $('#content');
            console.log(this);

            if($('.second-image').length){
                $(this).remove();
                let newImage = `<div class="card">
                                <div class="card-body">
                                    <input type="file" id="input-file-max-fs"
                                    class="dropify " data-max-file-size="2M"
                                    name="apartment_third_file"/>
                                </div>
                            </div>`
                container.append(newImage);
                $('.dropify').dropify();
                return false;
            };

            let newImage = `<div class="card">
                                <div class="card-body">
                                    <input type="file" id="input-file-max-fs"
                                    class="dropify second-image" data-max-file-size="2M"
                                    name="apartment_second_file"/>
                                </div>
                            </div>`
            container.append(newImage);
            $('.dropify').dropify();


        });

    </script>
@endpush

@push('dashboard-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha256-AWdeVMUYtwLH09F6ZHxNgvJI37p+te8hJuSMo44NVm0=" crossorigin="anonymous" />
@endpush

{{--make the second and third images show only when the add more button is clicked--}}
