<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name') }}</title>

        <livewire:styles />
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div x-data="{ sidebarOpen: false }" class="h-screen flex bg-gray-50">
            <x-sidebar />

            <div class="flex-1 flex flex-col">
                <x-header />

                <main class="h-full overflow-y-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
