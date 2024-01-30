<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <style>
        [x-cloak] {
            display: none;
        }
    </style>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
     @wireUiScripts
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-notifications position="top-right" />
<div class="relative">
    <div class="w-screen h-screen">
        <img src="{{ asset('images/logo2.png') }}" alt="" class="w-full h-full blur-sm">
    </div>
    <div class="absolute top-2 w-screen ">
        <div class="w-full mx-auto bg-white border-b 2xl:max-w-8xl">
            <div x-data="{ open: false }" class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
              <div class="flex flex-row items-center justify-between lg:justify-start">
                <a class="text-lg tracking-tight text-black uppercase focus:outline-none focus:ring lg:text-2xl" href="/">
                  <img src="{{ asset('images/logonani.png') }}" alt="" class="w-16 h-20">
                </a>
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
              <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-end md:flex-row">
                <a class="px-2 py-2 text-sm text-gray-500 lg:ml-auto lg:px-6 md:px-3 hover:text-blue-600" href="#">
                  Customers
                </a>
                <a href="{{ route('products') }}" class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="#">
                  Products
                </a>
                <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="{{ route('dileverysched') }}">
                    Delivery Schedule
                  </a>
                <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="{{ route('order') }}">
                Orders
                </a>
                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">


                         <span class="underline">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"> <button class="block px-4 py-2 mt-2 text-sm text-red-500 md:mt-0 hover:text-red-600 focus:outline-none focus:shadow-outline">
                            LOGOUT
                             </button></a>


                </div>
              </nav>
            </div>
          </div>
          <main>
                <div class="">
                    <div class="  border-gray-200  rounded-lg dark:border-gray-700">
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
          </main>
    </div>

    <div class="absolute right-4 " style="top: 620px;">
        <a href="{{ route('chatify') }}" class=""><i class="ri-messenger-fill text-8xl text-green-600 hover:text-green-700"></i></a>
    </div>

</div>


</body>

</html>
