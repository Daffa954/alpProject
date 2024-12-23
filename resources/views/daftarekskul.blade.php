<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Atten-cropped.svg') }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Ekskul</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="flex overflow-x-hidden bg-[#F4F4F4]">
    <x-sidebar></x-sidebar>
    <x-layout_homepage>
        <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
        <div
            class="flex flex-wrap items-center justify-between bg-white w-full h-[60px] rounded-md px-4 xl:px-10 mb-4 border-s-[10px] shadow border-custom-blue">
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">Id Ekskul</h1>
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">Nama Ekskul</h1>
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">Divisinpm</h1>
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">Level</h1>
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">PIC</h1>
            <h1 class="text-black sm:text-sm text-[11px] w-1/6 text-center">Absensi Siswa</h1>
        </div>
        @foreach ($ekskulList as $ekskul)
            <!-- Data Row -->
        <div
        class="flex flex-wrap items-center justify-between bg-white w-full h-[80px] rounded-md px-4 xl:px-10 mb-[3px] border-s-[11px] shadow border-custom-blue">
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">#{{ $ekskul['id`'] }}</h1>
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">{{ $ekskul['name'] }}</h1>
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">{{ $ekskul['divisi'] }}</h1>
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">{{ $ekskul['level'] }}</h1>
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">Jonas</h1>
        <h1 class="text-[#726F6F] sm:text-sm text-[11px] w-1/6 text-center">
            <a href="#"
                class="xl:border-[1px] xl:no-underline underline xl:border-custom-blue hover:text-blue-700 text-custom-blue xl:px-4 xl:py-2 rounded-xl md:hover:bg-custom-blue md:hover:text-white transition-all duration-300">Detil
                Absensi</a>
        </h1>
    </div>
        @endforeach
        

        {{-- <div class="flex flex-col justify-center items-center h-screen">
            <h1 class="text-gray-500 text-lg">Tidak ada ekskul</h1>
        </div> --}}

    </x-layout_homepage>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const content = document.getElementById('content');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-64');
            content.classList.toggle('ml-64');
        });
    </script>
</body>

</html>
