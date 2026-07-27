<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saras App</title>
    @vite('resources/css/app.css')

</head>
<body >

<div class="flex flex-col items-center">
    <img
        src="{{ asset('images/logo.png') }}"
        alt="Logo"
        class="w-20 h-50 object-contain"
    >

<div class="text-center px-8 py-3">
<h1 >
    Welcome to Sara's App
</h1>
<p>Click the button below to see the Cats Gallery :P</p>
<div class="mt-5 flex justify-center gap-2">
    <a href="/cats" class="btn">🐱 More Cats</a>
</div>

<div class="mt-2 flex justify-center gap-2">
    @auth
        <a href="/dashboard" class="btn">🏠 Dashboard</a>
    @else
        <a href="/login" class="btn">🔑 Log in</a>
        <a href="/register" class="btn">🪶 Register</a>
    @endauth
</div>
</div>
</div>

</body>
</html>
