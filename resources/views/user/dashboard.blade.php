@extends('layouts.dashboard')

@section('content')


    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                            <span
                                class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Clients</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                class="set-doller">$</sup>18,306</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                        </h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                            <span
                                class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End First Cards -->
    <!-- *************************************************************** -->
    <div class="row">

        <div class="col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-header">
                    <h4 class="mb-0 text-white">Card Title</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title text-white">Special title treatment</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional
                        content.</p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-info">
                <div class="card-header">
                    <h4 class="mb-0 text-white">Card Title</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title text-white">Special title treatment</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to
                        additional
                        content.</p>
                    <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- *************************************************************** -->
    <!-- Start Top Leader Table -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Your Cliques</h4>
                    </div>
                    <hr>

                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Clique Creator
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Members</th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Points Gained
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="mr-3"><img
                                                src="../assets/images/users/widget-table-pic1.jpg"
                                                alt="user" class="rounded-circle" width="45"
                                                height="45" /></div>
                                        <div class="">
                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                Gover</h5>
                                            <span class="text-muted font-14">hgover@gmail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                <td class="border-top-0 px-2 py-4">
                                    <div class="popover-icon">
                                        <a class="btn btn-primary rounded-circle btn-circle font-12"
                                           href="javascript:void(0)">DS</a>
                                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                           href="javascript:void(0)">SS</a>
                                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                           href="javascript:void(0)">RP</a>
                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                           href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td
                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                    35
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End Top Leader Table -->
    <!-- *************************************************************** -->
@endsection
