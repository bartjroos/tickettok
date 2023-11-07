<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TicketTok</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="/img/chicken.png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-b from-yellow-50 to-yellow-100 mb-8">
        <nav class="pb-3">
            <div class="mx-auto max-w-7xl">
                <div class="py-4">
                    <div class="flex items-center">
                        <img class="h-9 w-auto me-3" src="/img/chicken.png" alt="Ticket Tok">
                        <span class="me-7 text-2xl font-semibold">TicketTok</span>
                        <a href="{{ route('home') }}" class="hover:underline underline-offset-4 px-3 py-2 text-sm font-medium">Events</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="min-h-screen mx-auto max-w-7xl">
            {{ $slot }}
        </div>
    </body>
</html>
