@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('apartment.tags.update', $entity->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tag Name</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{old('name') ?? $entity->name}}" placeholder="{{$entity->name}}">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Tag Description</label>

                                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="3" placeholder="{{$entity->description}}">{{old('description') ?? $entity->description}}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="form-actions mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Update</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
