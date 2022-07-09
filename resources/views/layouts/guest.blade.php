{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-commerce UI Kit and web templates to design shopping websites on   Sketch, Figma">

    <meta name="keywords"
        content="design system, UIkit, eCommerce, online shop, components, e-commerce, Sketch and Figma, ecommerce web design">

    {{-- <title>@yield('title') - {{ config('app.name') }}</title> --}}
    @include('partials.styles')

    @livewireStyles
</head>

<body class="">
    @include('partials.header')
    {{-- @yield('content') --}}
    {{ $slot }}
    @include('partials.footer')
    @include('partials.scripts')
    @livewireScripts
</body>

</html>

