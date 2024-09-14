<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    @vite('resources/css/app.scss')
    @livewireStyles
</head>
<body>
    {{ $slot }}

    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
