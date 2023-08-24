<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCIS | Signup</title>
    @livewireStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-300">
    <main>
        <section>
            <div class="container mt-20  py-[5%] w-min mx-auto px-10">
                <div
                    class="md:flex bg-gradient-to-br from-blue-500 to-purple-300 items-center justify-center shadow-lg rounded-lg">
                    <div class="p-4">
                        <div class="w-52 text-center mx-auto">
                            <h1 class="text-2xl font-bold text-white mb-5">Welcome to SCIS Examaniations Helpdesk</h1>
                            <h4 class=" text-gray-100">Kindly signup to resgister all your examinations
                                issues as we are
                                readily available to help
                                you
                                solve them</h4>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-r-lg"> @livewire('signup')</div>
                </div>
            </div>
        </section>
    </main>
    @livewireScripts()
</body>

</html>
