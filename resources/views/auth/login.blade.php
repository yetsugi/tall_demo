<x-layout title="Login">
    <div class="flex items-center justify-center h-screen p-6 bg-gray-50">
        <div class="flex-1 max-w-md p-12 bg-white rounded-lg shadow-xl text-gray-800 dark:text-zinc-200">
            <x-logo class="text-4xl text-center" />
            <hr class="my-6">
            <h1 class="text-xl font-semibold">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="block mt-4 text-sm">
                    <span class="dark:text-zinc-400">Email</span>
                    <input type="email" name="email" class="block w-full mt-1 rounded border-gray-200 focus:border-gray-400 focus:ring focus:ring-gray-300/50 dark:text-zinc-300" />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="dark:text-zinc-400">Password</span>
                    <input type="password" name="password" class="block w-full mt-1 rounded border-gray-200 focus:border-gray-400 focus:ring focus:ring-gray-300/50 dark:text-zinc-300" />
                </label>
                <button type="submit" class="block w-full px-4 py-2 mt-4 border rounded border-gray-300 focus:border-gray-500 focus:outline-none focus:ring focus:ring-gray-300/50 hover:border-gray-500 active:text-gray-500">Login</button>
            </form>
        </div>
    </div>
</x-layout>
