<div class="relative m-auto max-w-md bg-[#f6f6f6] border border-gray-200 rounded-lg shadow-lg p-8">
      <h1 class="text-3xl font-extrabold text-center text-indigo-700 mb-6">Login</h1>
      <form class="space-y-6" action="{{ route('login') }}" method="POST">
          @csrf
          <div>
              <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
              <input type="email" name="email" id="email" required
                  class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500">
          </div>
          <div>
              <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
              <input type="password" name="password" id="password" required
                  class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-500">
          </div>
          <div>
              <button type="submit"
                  class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white font-semibold hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500">Login</button>
          </div>
      </form>
</div>
