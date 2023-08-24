@extends('user_views.layouts.app')

@section('content')
    <main>

        <section>
            <div>
                <div class="bg-slate-100">
                    <div class="container mx-auto w-min py-10 place-content-center">
                        <div class="md:flex justify-center rounded-2xl shadow-lg bg-white shadow-blue-400 ">
                            <div class="hidden md:block">
                                <div class="w-96 h- custom_height rounded-2xl relative flex items-center justify-center"><img
                                        class="object-cover w-96 h-customImageHeight rounded-l-2xl"
                                        src="/assets/images/product-3-lg.png" alt="">

                                    <div class="absolute bg-blue-500 w-96 h-customImageHeight opacity-95 rounded-l-2xl">
                                    </div>
                                    <div class="absolute justify-center text-center">
                                        <h1 class="text-4xl text-white font-bold mb-5 ">Hi there!</h1>
                                        <p class=" font-semibold text-slate-100 px-5 ">Submit all your examintion complains
                                            and get them
                                            resolved for you
                                            in the next 24
                                            hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" py-5 rounded-r-2xl">
                                @livewire('create-ticket-wire')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
