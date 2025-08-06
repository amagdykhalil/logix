<!DOCTYPE html>
<html class="{{ session('theme', 'light') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- SEO Metadata --}}
    <title>@yield('title', 'LOGIX COD')</title>
    <meta name="description" content="@yield('meta_description', 'خدمات لوجستية كاملة بين إيديك… تسهل عليك وتخليك تركز على تجارتك في النمو و النجاح. ')">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="author" content="Logix Cod team">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/assets/logo.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="!p-0 min-h-screen">
    @yield('content')

    @stack('scripts')
</body>

</html>
