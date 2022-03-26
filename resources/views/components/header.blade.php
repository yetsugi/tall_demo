<header class="bg-white text-gray-500 py-4 px-6 z-10 shadow dark:bg-zinc-800 dark:text-zinc-400">
    <div class="container mx-auto flex justify-between items-center md:justify-end">
        <button @click="sidebarOpen = ! sidebarOpen" class="md:hidden hover:text-gray-800 dark:hover:text-zinc-200">
            <x-heroicon-o-menu class="w-6 h-6"/>
        </button>

        <ul class="w-20 flex justify-between items-center">
            <li class="w-6 h-6">
                <button @click="toggleTheme()" class="hover:text-gray-800 dark:hover:text-zinc-200">
                    <x-heroicon-o-moon x-show="! darkTheme" class="w-full h-full" />
                    <x-heroicon-o-sun x-show="darkTheme" class="w-full h-full" />
                </button>
            </li>
            <li class="relative">
                <button class="w-8 h-8 bg-gray-400 text-white rounded dark:bg-zinc-600" @click="toggleProfileMenu()">A</button>
                <x-dropdown-menu x-show="profileMenuOpen" @click.outside="profileMenuOpen = false">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center w-full px-2 py-1 font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-zinc-800 dark:hover:text-zinc-100">
                                <x-heroicon-o-logout class="w-4 h-4" />
                                <span class="ml-4">Log out</span>
                            </button>
                        </form>
                    </li>
                </x-dropdown-menu>
            </li>
        </ul>
    </div>
</header>
