@extends('layouts.dashboard')

@section('breadcrumb-title')
    {{$pageTitle}}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All User Roles</h4>
                    <a href="{{route('roles.create')}}" class="text-white btn btn-dark btn-sm btn-rounded"><i class="far fa-heart"></i> Create New Role</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark mb-0">
                        <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($entities as $key => $entity)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$entity->name}}</td>
                                <td>
                                    <a href="{{route('roles.edit', $entity->id)}}" class="btn btn-sm btn-cyan px-3 rounded">
                                        Edit
                                    </a>

                                    <a href="{{route('roles.destroy', $entity->id)}}" class="btn btn-sm btn-danger px-3 rounded role-delete">
                                        Delete
                                    </a>
                                </td>
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
