<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Cale Bybee's Portfolio"
        />
        <title>Cale Bybee</title>
        <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        <style>
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-main overflow-x-hidden">
        <nav class="w-full text-accent h-8 md:h-14 lg:h-20">
            <div class="text-sm sm:text-2xl font-bold flex items-center h-full">
                calebybee
            </div>
        </nav>

        <div class="bg-red-500 w-full scroll-smooth snap-y h-screen">
            <div class="bg-green-500 snap-start h-[calc(100%-2rem)] md:h-[calc(100%-3.5rem)] lg:h-[calc(100%-5rem)]">

            </div>
            <div class="bg-blue-500 snap-start h-[calc(100%-2rem)] md:h-[calc(100%-3.5rem)] lg:h-[calc(100%-5rem)]">

            </div>
        </div>
    </body>
</html>
