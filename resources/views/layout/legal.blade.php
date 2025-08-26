<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <meta name="robots" content="noindex, nofollow">
</head>

<body class="bg-light text-dark flex flex-col min-h-screen">
    <x-base.header />
    <main class="grow">
        @yield('content')
    </main>

    <x-base.footer />
</body>

</html>
