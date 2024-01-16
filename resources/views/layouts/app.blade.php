<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@System System'))</title>

    {{-- Styles css common --}}
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.header')
    <div class="h-[calc(100vh-60px-84px)] p-3 overflow-y-auto bg-gray-300">
        @yield('breadcrumb')
        <div class="mt-3 bg-white p-3 rounded-lg">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')

    {{-- Scripts js common --}}
    {{-- Scripts link to file or js custom --}}
    @yield('scripts')
</body>

</html>
