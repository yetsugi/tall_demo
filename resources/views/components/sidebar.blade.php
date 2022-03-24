<aside class="hidden w-64 shrink-0 z-20 bg-white md:block">
    <div class="mt-4">
        <div class="text-lg font-bold text-gray-800">
            <a href="{{ route('dashboard') }}" class="ml-6">{{ config('app.name') }}</a>
        </div>
        <nav class="mt-5 text-sm font-semibold text-gray-500">
            <ul>
                <li>
                    <a href="#" class="block flex items-center px-6 py-3 hover:text-gray-800 hover:bg-gray-100">
                        <x-heroicon-o-briefcase class="w-5 h-5"/>    
                        
                        <span class="ml-4">Clients</span>
                    </a>
                </li>
                <li class="relative">
                    <span class="absolute inset-y-0 w-1 bg-orange-600 rounded-tr rounded-br"></span>

                    <a href="{{ route('users.index') }}" class="block flex items-center px-6 py-3 text-gray-800 hover:bg-gray-100">
                        <x-heroicon-o-users class="w-5 h-5"/>    
                        
                        <span class="ml-4">Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div x-show="sidebarOpen" class="fixed inset-0 z-10 bg-black/50"></div>

<aside
    x-show="sidebarOpen"
    @click.outside="sidebarOpen = false"
    class="fixed inset-0 mt-16 z-20 w-64 bg-white"
>
    <div class="mt-4">
        <div class="text-lg font-bold text-gray-800">
            <a href="{{ route('dashboard') }}" class="ml-6">{{ config('app.name') }}</a>
        </div>
        <nav class="mt-5 text-sm font-semibold text-gray-500">
            <ul>
                <li>
                    <a href="#" class="block flex items-center px-6 py-3 hover:text-gray-800 hover:bg-gray-100">
                        <x-heroicon-o-briefcase class="w-5 h-5"/>    
                        
                        <span class="ml-4">Clients</span>
                    </a>
                </li>
                <li class="relative">
                    <span class="absolute inset-y-0 w-1 bg-orange-600 rounded-tr rounded-br"></span>

                    <a href="{{ route('users.index') }}" class="block flex items-center px-6 py-3 text-gray-800 hover:bg-gray-100">
                        <x-heroicon-o-users class="w-5 h-5"/>    
                        
                        <span class="ml-4">Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
