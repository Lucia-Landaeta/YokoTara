<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
<body>
    <main class="min-h-screen w-full bg-gray-100 text-gray-700">
        <!-- navbar-->
        <x-own.nav_admin />
        <div class="flex">
            <!-- menu lateral -->
            <x-own.sidebar />
            <!-- contenido -->
            @section('slot')

            @show
        </div>
    </main>
    @livewireScripts
</body>
</html>