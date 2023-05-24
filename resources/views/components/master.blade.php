<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Marek Miklusek</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#000]">

        <div class="pt-24">
            <x-navbar></x-navbar>
            {{ $slot }}
            <x-footer></x-footer>
        </div>

    </body>
</html>




