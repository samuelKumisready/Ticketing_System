@extends('admin.layouts.app')
@section('content')
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">

                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Categories</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <button type="button" class="btn btn-primary my-2 btn-icon-text bg-custom_purple_color"
                                data-target="#modaldemo1" data-toggle="modal">
                                <i class=" fa fa-solid fa-add"></i> Create a
                                new Category
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-4 ">
                        <div class="card custom-card card-dashboard-calendar pb-0">
                            <img class="object-cover" src="/assets/images/Complains1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-8">

                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Categories</h6>

                                </div>
                                @livewire('category-table')
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @livewire('create-category')
@endsection
