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

    <main
        class="relative mx-auto xl:max-w-lg lg:max-w-md md:w-[50%] sm:w-[70%] w-[90%] border-[1px] border-slate-400 bg-[#f4f4f47e]  rounded-lg shadow-xl p-8 pb-15 pt-15">

        <h1 class="text-3xl font-extrabold text-center text-indigo-700 mb-6">Login</h1>
        <form class="space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 text-sm sm:text-base">
            </div>
            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500 text-sm sm:text-base">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white font-semibold text-sm sm:text-base hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500">
                    Login
                </button>
            </div>
        </form>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Tidak memiliki akun?
                <a href="/pendaftaran" class="text-indigo-600 hover:underline">Daftar</a>
            </p>
        </div>
    </main>
</body>

</html>
