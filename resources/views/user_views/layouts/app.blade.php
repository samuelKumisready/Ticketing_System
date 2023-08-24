<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <header>
        <nav id="navbar" class="solidbg text-white sticky top-0 w-full z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div class="flex space-x-4 items-center font-bold ">
                        <div class="px-5"><a href="/"><img src="/assets/images/ksb-logo-one.png" alt="KSBLOGO"
                                    class="h-10"></a>
                        </div>
                        <div class="hidden md:flex space-x-8">
                            <div class="hover:text-nav_hover cursor-pointer ease-in duration-200">Home</div>
                            <div class="hover:text-nav_hover cursor-pointer ease-in duration-200"><a
                                    href="/createticket">Creat a Tickets</a>
                            </div>
                            <div class="hover:text-nav_hover cursor-pointer ease-in duration-200"><a href="/tickets">My
                                    Tickets
                            </div></a>
                        </div>
                    </div>
                    <ul class="hidden md:flex items-center space-x-4 ">
                        @guest
                            <li>
                                <a href="/login"
                                    class="font-semibold  hover:text-nav_hover cursor-pointer ease-in duration-200"> Login
                                </a>
                            </li>
                            <li><a href="/signup"
                                    class=" border-2 border-solid font-semibold py-2 px-6 rounded-md text-white hover:bg-nav_hover ease-in duration-200 hover:border-white uppercase">Signup</a>
                            </li>
                        @endguest
                        @auth
                            <li>@livewire('logout-user')
                            </li>
                        @endauth
                    </ul>
                    {{--  mobile nav  --}}
                    <div id="humburger" class="md:hidden lg:hidden pr-4 hover:cursor-pointer z-50 overflow-hidden"><i
                            class="fa-solid fa-bars"></i>
                    </div>
                    <div id="menu" class="hidden md:hidden fixed inset-0  bg-gray-900 py-10 px-10 ">

                        <ul class=" grid grid-cols-1 gap-12 font-semibold ">
                            <li id="hLink">
                                <div class="hover:text-Color_red cursor-pointer ease-in duration-200"><a
                                        href="/">Home</a></div>
                            </li>
                            @auth
                                <li id="hLink">
                                    <div class="hover:text-Color_red cursor-pointer ease-in duration-200"><a
                                            href="/createticket">Create a
                                            Ticket</a>
                                    </div>
                                </li>
                                <li id="hLink">
                                    <div class="hover:text-Color_red cursor-pointer ease-in duration-200"><a
                                            href="/tickets">My
                                            Ticket</a>
                                    </div>
                                </li>
                            @endauth
                            <li id="hLink">
                                <a class="font-semibold  hover:text-Color_red cursor-pointer ease-in duration-200">
                                    Login
                                </a>
                            </li>
                            <li><a href="/signup"
                                    class=" border-2 border-solid font-semibold py-2 px-6 rounded-md text-white hover:bg-red-600 ease-in duration-200 hover:border-white uppercase">Signup</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="bg-gray-900 text-white">
        <div class="container py-4 px-5">
            <div class="grid grid-cols-1 md:place-items-center gap-10 md:items-start md:grid-cols-3 mt-10">
                <div class="">
                    {{--  logo  --}}
                    <div class="mb-5"><img src="/assets/images/ksb-logo-one.png" alt="" class="h-10"></div>
                    <p class="font-semibold">Effortlessly resolve your exam-related queries with our student support
                        system. </p>
                </div>
                <div class="">
                    <h1 class="font-bold text-2xl capitalize mb-5">useful links</h1>
                    <div>
                        <ul class="font-semibold">
                            @auth
                                <li><a href="/">Home</a></li>
                                <li><a href="/createticket">Create a Ticket</a></li>
                            @endauth
                            @guest
                                <li><a href="/signup">Signup</a></li>
                                <li><a href="/login">Login</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="">
                    <h1 class="font-bold text-2xl capitalize mb-5">Contact Us</h1>
                    <div class=" flex relative mb-2 font-semibold">
                        <div class="absolute h-5 w-5 bg-gray-50 opacity-40 rounded-full"></div>
                        <div class="pl-2  "> <i class="fa-solid fa-home pr-4"></i> Ayim Complex SF04</div>
                    </div>
                    <div class=" flex relative mb-2 font-semibold">
                        <div class="absolute h-5 w-5 bg-gray-50 opacity-40 rounded-full"></div>
                        <div class="pl-2 "> <i class="fa-solid fa-envelope pr-4"></i> scis@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts()
    @stack('scripts')
</body>

</html>
