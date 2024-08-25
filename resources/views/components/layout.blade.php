<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-black text-white">

    <div class="px-10">
        <nav class="flex justify-between p-5">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>

            <div class="space-x-5 font-medium">
                <a href="" class="border">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>

        <hr class="border-white/15">

        <main class="mt-10 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>