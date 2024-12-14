<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="w-full h-full flex items-center relative justify-center p-4">
    <img src="images/aset4.png" alt=""
        class="absolute -bottom-0 left-[-40px] sm:left-[-10px] md:left-[-30px] lg:left-[0px] w-[250px]  md:w-[380px] lg:w-[380px] mb-4">
    <img src="images/aset5.png" alt=""
        class="absolute -bottom-0 right-[3px] sm:right-[-10px] md:right-[-20px] lg:right-[0px] w-[250px]  md:w-[380px] lg:w-[400px] mb-4">
<x-form-login></x-form-login>
    
</body>

</html>
