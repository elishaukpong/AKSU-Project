@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Apartment Requests</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark mb-0">
                        <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Requested By</th>
                            <th scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($entities as $key => $entity)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$entity->viewer->name}}</td>
                                <td>{{$entity->description}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                    <div class="mx-auto mt-2">
                        {{$entities->links()}}
                    </div>
            </div>
        </div>
    </div>

@endsection
