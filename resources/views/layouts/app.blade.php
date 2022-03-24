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
        <div x-data="app" :class="{ 'dark': darkTheme }">
            <div class="h-screen flex bg-gray-50 dark:bg-zinc-900">
                <x-sidebar />

                <div class="flex-1 flex flex-col">
                    <x-header />

                    <main class="h-full overflow-y-auto text-gray-700 dark:text-zinc-300">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
