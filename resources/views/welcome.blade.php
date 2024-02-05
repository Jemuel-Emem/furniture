<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Furniture</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="w-screen h-screen">
                <img src="{{ asset('images/logo2.png') }}" alt="" class="w-full h-full blur-sm">
            </div>

            <div class="absolute top-24">
               <div class="flex flex-col">
                <span class=" font-black text-5xl text-gray-800 text-center " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;  letter-spacing: 5px;">WELCOME TO AGILS FURNITURE</span>
               <span class="text-center text-xl mt-2 text-gray-900">"Furnishing your space, one click at a time"</span>
               </div>

               <div class="mt-4 flex justify-center gap-2">
               <a href="{{ route('register') }}"> <button class="bg-gray-300 hover:bg-gray-400 hover:text-white p-2 rounded-xl w-32">Sign-up</button></a>
               <a href="{{ route('login') }}"> <button class="bg-gray-600 hover:bg-gray-700 hover:text-white p-2 rounded-xl w-32">Login</button>
               </div></a>
            </div>


        </div>
    </body>
</html>
