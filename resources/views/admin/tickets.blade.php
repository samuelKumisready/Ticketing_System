@extends('admin.layouts.app')
@section('content')
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Tickets</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Tickets</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Row -->
                @livewire('all-tickets')
                <!-- End Row -->
            </div>
        </div>
    </div>
@endsection
