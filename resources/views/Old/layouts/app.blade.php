<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
    class="{{ session('theme', 'light') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- SEO Metadata --}}
    <title>@yield('title', 'Calls Trak')</title>
    <meta name="description" content="@yield('meta_description', 'Callstrak - منصة لتحسين التواصل وتحليل المكالمات.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Callstrak, تتبع المكالمات, تسويق, CRM')">
    <meta name="author" content="Callstrak Team">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/assets/logo.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="!p-0 bg-bg-soft dark:bg-gray-900 text-gray-800 dark:text-white min-h-screen overflow-x-hidden">
    <div class="  flex max-w-[2000px] w-full mx-auto ">
        <div class=" flex-shrink-0 z-10 relative ">
            @include('partials.sidebar')
        </div>
        <main class="flex-1 relative  overflow-x-hidden">
            @include('partials.header')
            <div class="px-4  py-4 min-h-[calc(100vh-135px)] ">
                @yield('content')
            </div>
            <footer class="w-full py-6 px-4 text-center text-sm dark:bg-[#1f2937] text-[#A7ABB7] bg-white" >جميع الحقوق محفوظة لدي 2025</footer>
        </main>
    </div>

    @stack('scripts')
</body>

</html>




















