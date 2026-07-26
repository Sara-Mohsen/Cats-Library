<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>

<body>

    @if (session('success'))
        <div class="alert alert-success text-center bg-green-50 p-4 rounded-lg shadow-md mb-4 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif


    <header>
        <nav>
            <a href="/" class="flex items-center gap-3">
    <img
        src="{{ asset('images/logo.png') }}"
        alt="Logo"
        class="h-12 w-14 rounded-full object-cover"
    >
            </a>
            <h1>Cats Gallery</h1>
            <a href="/">Home</a>
            <a href="/cats">All Cats</a>
            <a href="/cats/create">New Cat?</a>
        </nav>
    </header>

    <main class="container">
       {{$slot}}
    </main>

</body>

</html>
