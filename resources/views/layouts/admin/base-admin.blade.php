<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-commerce UI Kit and web templates to design shopping websites on   Sketch, Figma">

    <meta name="keywords"
        content="design system, UIkit, eCommerce, online shop, components, e-commerce, Sketch and Figma, ecommerce web design">
    <link rel="shortcut icon" href="favicon.ico">

    {{-- <title>@yield('title') - {{ config('app.name') }}</title> --}}
    @include('partials.admin.styles')

    @livewireStyles
</head>

<body class="app">
    @include('partials.admin.header')
    {{-- @yield('content') --}}
    {{ $slot }}
    @include('partials.admin.scripts')
    @livewireScripts

</body>
</html>
