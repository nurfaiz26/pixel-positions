<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap"
        rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <title>Pixel Positions</title>
</head>

<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="bg-white rounded-md py-3 px-2">
                <a href="/">
                    <img width="100" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div class="font-bold flex gap-x-6">
                    <a href="/jobs/create">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log In</a>
                    <a href="/register">Sign Up</a>
                </div>
            @endguest

        </nav>

        <main class="my-10 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
