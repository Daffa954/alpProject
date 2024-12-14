<div
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
    </div>