@extends('admin.layouts.app')
@section('content')
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Welcome To SCIS</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-12">

                        <!--Row-->
                        <div class="row row-sm  mt-lg-4">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card bg-primary custom-card card-box">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                                <h4 class="d-flex  mb-3">
                                                    <span class="font-weight-bold text-white ">Sonia
                                                        Taylor!</span>
                                                </h4>
                                                <p class="tx-white-7 mb-1">You have two projects to finish, you
                                                    had completed <b class="text-warning">57%</b> from your montly
                                                    level,
                                                    Keep going to your level
                                            </div>
                                            <img src="/admin/assets/img/pngs/work3.png" alt="user-img" class="wd-200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Row -->

                        <!--Row-->
                        <div class="row row-sm">
                            <div class="col-sm-6 col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body text-center">
                                        <div class="icon-service bg-primary-transparent rounded-circle text-primary">
                                            <i class="fas fa-ticket-alt"></i>
                                        </div>
                                        <p class="mb-1 text-muted">Total Tickets</p>
                                        <h4 class="mb-0">{{ $totalTickets }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body text-center">
                                        <div class="icon-service bg-success-transparent rounded-circle text-success">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p class="mb-1 text-muted">Resolved Tickets</p>
                                        <h4 class="mb-0">{{ $resolvedTickets }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body text-center">
                                        <div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <p class="mb-1 text-muted">Pending Tickets</p>
                                        <h4 class="mb-0">{{ $activeTickets }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End row-->

                        <!--row-->
                        <div class="row row-sm">
                            <div class="col-xl-12  mb-5">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="d-flex p-3">
                                            <h5 class="float-left main-content-label mb-0 mt-2">Lastest Tickets</h5>
                                        </div>
                                        @foreach ($latestTickets as $ticket)
                                            <div class="media mt-0 p-4 border-bottom border-top">
                                                <div class="d-flex mr-3">
                                                    <a href="#"><img
                                                            class="media-image avatar avatar-md rounded-circle"
                                                            alt="64x64" src="assets/img/users/8.jpg"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1 font-weight-semibold tx-16">
                                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="verified"><i
                                                                class="fa fa-check-circle-o text-success"></i></span>
                                                        {{ $ticket->createdBy->name }}
                                                    </h5>
                                                    <span
                                                        class="text-muted tx-13">{{ $ticket->created_at->format('F d, Y') }}</span>

                                                    <h5 class="mb-1 font-weight-semibold tx-16 mt-2">
                                                        {{ $ticket->title }}
                                                    </h5>
                                                    <p class="font-13  mb-2 mt-2">
                                                        {{ $ticket->description }}
                                                    </p>


                                                    <a href="#" class="mr-2">
                                                        @if ($ticket->status == 'open')
                                                            <span class="badge badge-primary">{{ $ticket->status }}</span>
                                                        @elseif ($ticket->status == 'pending')
                                                            <span class="badge badge-danger">{{ $ticket->status }}</span>
                                                        @elseif ($ticket->staus == 'resolved')
                                                            <span class="badge badge-sucess">{{ $ticket->status }}</span>
                                                        @endif
                                                    </a>
                                                    <a href="#" class="mr-2" data-toggle="modal"
                                                        data-target="#Comment"><span class="">Comment</span></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        <a class="text-center w-100 d-block p-3 font-weight-bold" href="/admin/tickets">
                                            View All Tickets</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row end -->
                    </div><!-- col end -->
                </div><!-- Row end -->
            </div>
        </div>
    </div>
@endsection
