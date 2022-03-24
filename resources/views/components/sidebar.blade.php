<aside class="hidden w-64 shrink-0 bg-white md:block z-10">
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
                    <span class="absolute inset-y-0 w-1 bg-orange-600"></span>
                    <a href="{{ route('users.index') }}" class="block flex items-center px-6 py-3 text-gray-800 hover:bg-gray-100">
                        <x-heroicon-o-users class="w-5 h-5"/>    
                        
                        <span class="ml-4">Users</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
