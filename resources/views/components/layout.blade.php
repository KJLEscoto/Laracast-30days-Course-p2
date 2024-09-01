<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-10">
        <nav class="flex justify-between p-5">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>

            <div class="space-x-5 font-medium">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
                <!-- request()->routeIs('about')' -->
            </div>

            @auth
                <div class="space-x-5 flex items-center font-medium">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <x-forms.button class="bg-red-600 hover:bg-red-700">Log Out</x-forms.button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-5 font-medium">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>

        <hr class="border-white/10">

        <main class="mt-10 mx-auto max-w-[986px] mb-20">
            {{ $slot }}
        </main>
    </div>

</body>

</html>