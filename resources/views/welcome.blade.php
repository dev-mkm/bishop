<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Bishop') }}
    </h2>
                    </div>
                </header>

            <!-- Page Content -->
            <main class="text-gray-800 dark:text-gray-200">

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-2xl">
                <header>
                    <h2 class="text-lg font-medium mb-4">
                        {{ __('Bishop') }}
                    </h2>
                </header>
                <form action="/bishop" method="post">
                    @csrf
                <x-input-label class="px-2" for="startPos" :value="__('startPos')" />
                        <x-text-input id="startPos" name="startPos" type="text" class="m-2 block w-full" required />
                        <x-input-label class="px-2" for="endPos" :value="__('endPos')" />
                        <x-text-input id="endPos" name="endPos" type="text" class="m-2 block w-full" required />
                        <x-input-label class="px-2" for="number" :value="__('number')" />
                        <x-text-input id="number" name="number" type="numeric" class="m-2 block w-full" required />
                        <x-primary-button class="btn btn-primary m-2" type="submit">validate</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
            </main>
        </div>
    </body>
</html>
