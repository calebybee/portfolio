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
    <body class="overflow-x-hidden">
        <nav class="bg-main w-full text-accent h-8 md:h-14 lg:h-20 fixed top-0 z-10">
            <div class="text-sm md:text-2xl lg:text-4xl font-bold flex items-center h-full no-underline mx-7">
                <a href="#intro">calebybee</a>
            </div>
        </nav>

        <div class="bg-red-500 w-full scroll-smooth snap-y h-screen relative top-8 md:top-14 lg:top-20">
            <div class="bg-main h-full" id="intro">
                <div class="w-full h-full flex flex-col justify-center mx-auto px-2.5 md:px-5 lg:px-12 md:pb-12 lg:pb-20">
                    <h2 class="text-center text-accent text-sm lg:text-xl font-bold">Hi there, I'm</h2>
                    <h1 class="text-center text-white text-3xl lg:text-6xl font-bold my-2.5">Cale</h1>
                    <h3 class="text-center text-accent font-bold pb-4 lg:pb-8">
                        <span class="text-xl lg:text-3xl">Hello</span>
                        <span class="animate-blink text-xl lg:text-3xl" style="animation-direction: alternate">|</span>
                    </h3>
                    <p class="text-[#cec7c7] text-sm md:text-lg lg:text-xl px-5 md:px-7 lg:px-44">
                        Software developer specialized in API integrations, eCommerce and monolithic architecture, amongst other things. Currently working at Randall-Reilly as a Solutions Architect over integrations, in addition to some contract work and special projects when free time allows (there's not much to go around).
                    </p>
                </div>

            </div>
            <div class="bg-blue-500 snap-start h-[calc(100%-2rem)] md:h-[calc(100%-3.5rem)] lg:h-[calc(100%-5rem)]">

            </div>
        </div>
    </body>
</html>
