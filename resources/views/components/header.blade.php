<header class="bg-white text-gray-500 py-4 px-6 z-10 shadow">
    <div class="container mx-auto flex justify-between items-center md:justify-end">
        <button @click="sidebarOpen = ! sidebarOpen" class="md:hidden hover:text-gray-800">
            <x-heroicon-o-menu class="w-6 h-6"/>
        </button>

        <ul class="w-20 flex justify-between items-center">
            <li class="w-6 h-6">
                <button class="hover:text-gray-800">
                    <x-heroicon-o-moon class="w-full h-full"/>
                </button>
            </li>
            <li>
                <button class="w-8 h-8 bg-gray-400 text-white rounded">A</button>
            </li>
        </ul>
    </div>
</header>
