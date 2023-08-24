@extends('user_views.layouts.app')
@section('content')
    <main>
        <section>
            {{--  <div class="flex flex-col lg:flex-row bg-cover bg-center md:h-screen "
                style="background-image: url('/assets/images/blue-background.jpg');">
                <div class="container py-5 mt-32 ">
                    <div class="flex flex-col md:flex-row">
                        <div class="px-5 place-items-center mb-10 md:w-1/2">
                            <h1 class="text-white text-3xl md:text-5xl font-bold mb-10">SCIS Department Examinations
                                Support
                                Center
                            </h1>
                            <p class="text-xl text-gray-200 font-semibold mb-10">
                                Effortlessly resolve your exam-related queries with our student support system.</p>
                            <div><a href=""
                                    class="bg-Color_red py-4 px-5 text-white font-bold text-xl capitalize rounded-lg hover:bg-gray-900 ease-in duration-200 ">
                                    Create a Ticket</a></div>
                        </div>
                        <div class="items-center mx-auto mt-10 -mb-5 lg:mt-0 a"><img
                                src="/assets/images/school-of-business3.jpg" alt="Happy Customer"
                                class=" rounded-xl md:h-imageHeigt">
                        </div>
                    </div>
                </div>

            </div>  --}}
            <div class="h-1/2 md:h-5/6  bg-slate-100">
                <div class="container items-center justify-center md:flex py-10 px-10">
                    <div class="md:w-1/2 md:mt-20 mt-10">
                        <h1 class="text-gray-700 text-2xl md:text-6xl font-bold mb-5 md:mb-10"><span
                                class="text-nav_bg">SCIS</span>
                            Department Examinations
                            Support
                            Center
                        </h1>
                        <p class="text-xl text-black font-semibold mb-10">
                            Effortlessly resolve your exam-related queries with our student support system.</p>
                    </div>
                    <div class=" hidden md:block relative justify-center items-center mx-auto ">
                        <div class="absolute left-28 -top-3 ">
                            <div class="relative bg-white h-10 w-10 rounded-full shadow-lg shadow-blue-200">
                                <i class="fa-regular fa-file text-xl font-semibold absolute top-2.5 left-3"></i>
                            </div>
                        </div>
                        <div class="absolute right-32 -top-16 h-16 w-16 rounded-full shadow-lg shadow-blue-200"> <img
                                class="object-cover rounded-full w-16 h-16" src="\assets\images\ksbstudents.jpg"
                                alt="">
                        </div>
                        <div x-data="{ show: true }">
                            <div class="absolute bottom-5 left-16 h-16 w-16 rounded-full shadow-lg shadow-blue-200"
                                x-show="show" x-transition:enter="transition-opacity ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition-opacity ease-in duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <img class="object-cover h-16 w-16 rounded-full"
                                    src="/assets/images/school-of-business3.jpg" alt="">
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-16 h-16 w-16 rounded-full shadow-lg shadow-blue-200"><img
                                class="object-cover h-16 w-16 rounded-full" src="/assets/images/school-of-business.jpg"
                                alt=""></div>
                        <div class="relative lightcoloredcirle border-solid border-2 rounded-full p-4 mx-custommx1">
                            <div class="deepcoloredcirle bg-nav_bg w-24 h-24 rounded-full">
                            </div>
                            <div class="absolute top-8 right-12">
                                <h3 class="text-5xl text-white shadow-lg">e</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
