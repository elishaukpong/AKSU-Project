@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('roles.store')}}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Role Name</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{old('name')}}" placeholder="Role Name">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
