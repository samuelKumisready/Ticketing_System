@extends('user_views.layouts.app')
@section('content')
    <section class="bg-slate-300 h-screen ">

        <div class="container mx-auto items-center py-5 ">
            <div class="grid md:grid-cols-10 gap-4  rounded-xl py-10 px-5">
                <div class="hidden md:block col-span-4 px-5 bg-white rounded-lg shadow-lg">
                    <img class="object-cover mt-7" src="/assets/images/Complains1.jpg" alt="">

                    {{--  <div class="border-gray-300 mb-5 mt-20">
                        <div class="h-52 w-52 bg-blue-500 rounded-full mx-auto items-center justify-center shadow-md">
                            <h1 class="text-center justify-center text-8xl font-bold py-12 text-white ">
                                {{ Str::substr(auth()->user()->name, 0, 1) }}</h1>
                        </div>
                    </div>  --}}
                    {{--  <div class="text-4xl font-bold text-center">{{ auth()->user()->name }}</div>
                    <div class="text-md font-bold text-center text-gray-500">{{ auth()->user()->email }}</div>  --}}
                </div>
                <div class="md:col-span-6 px-5 bg-white rounded-lg shadow-lg">
                    <h1 class="font-bold text-3xl pl-5 mb-2 mt-2 text-blue-600">Your Tickets</h1>
                    <div class="px-5 h-listboxheight overflow-x-hidden customscrollbar">
                        @livewire('tickets', ['user' => auth()->user()], key(auth()->user()->id))
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
