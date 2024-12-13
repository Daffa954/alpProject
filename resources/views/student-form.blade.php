<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Form Pendaftaran</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="w-full relative">
    <header class="bg-slate-200 mb-10 z-[1000] relative" x-data="{ isOpen: false }">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1 items-center">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
                <h1 class="font-bold ps-3 text-xl">Sekolahnya siapa</h1>
            </div>
            <div class="flex lg:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/form" class="text-sm/6 font-semibold text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="isOpen" class="lg:hidden " role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-[#f6f6f6] px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                    <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>






    <main class="ps-8 pe-8 pb-2 -z-1000">
        <img src="images/aset1.png" alt=""
            class="absolute -bottom-10 left-[-90px] sm:left-[-70px] md:left-[-30px] lg:left-[-40px] w-[300px] sm:w-[350px] md:w-[400px] lg:w-[450px] mb-4">
        <img src="images/aset3.png" alt=""
            class="absolute -bottom-4 right-[3px] sm:right-[-10px] md:right-[-20px] lg:right-[0px] w-[260px] sm:w-[300px] md:w-[350px] lg:w-[400px] mb-4">

        <div
            class="m-auto w-full xl:w-[60%] border-[1px] border-slate-400 bg-[#f4f4f47e] rounded-lg shadow-lg p-8 relative z-10">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                <h1 class="text-3xl font-extrabold text-center text-indigo-700 mb-6">Form Pendaftaran Ekstrakurikuler
                </h1>
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="class" class="block text-sm font-semibold text-gray-700">Kelas</label>
                    <input type="number" name="class" id="class" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="jenjang" class="block text-sm font-semibold text-gray-700">Jenjang</label>
                    <select name="jenjang" id="jenjang" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="" disabled selected>Pilih Jenjang</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <div>
                    <label for="asal_kelas" class="block text-sm font-semibold text-gray-700">Asal Kelas</label>
                    <input type="text" name="asal_kelas" id="asal_kelas" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="ekstrakurikuler"
                        class="block text-sm font-semibold text-gray-700">Ekstrakurikuler</label>
                    <select name="ekstrakurikuler" id="ekstrakurikuler" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="" disabled selected>Pilih Ekstrakurikuler</option>
                        @for ($i = 1; $i <= 3; $i++)
                            <option value="{{ $i }}">Ekstrakurikuler {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white font-semibold shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Daftar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
