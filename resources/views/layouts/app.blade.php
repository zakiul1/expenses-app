<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Expenses App') }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="160x160" type="image/x-icon">


    <!-- Fonts  android-chrome-512x512.png-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- side bar and Main Content --}}
    <div class="flex pt-16 overflow-hidden bg-sky-50 dark:bg-gray-900">
        {{-- Sidebar --}}
        @include('layouts.sidebar')
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-sky-50 lg:ml-64 dark:bg-gray-900">
            <main>
                {{-- Main Content --}}
                @yield('content')
            </main>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/datepicker.min.js"></script>

</body>

</html>
