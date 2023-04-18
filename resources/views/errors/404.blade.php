<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Page introuvable - Orientation et Apprentissage
        </title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>

    </head>
    
        <!-- Navbar -->
<body class=" selection:bg-brand-black selection:text-white">
    

    <x-navbar/>
    

  <main
  class="flex-grow items-center  w-full flex flex-col mx-auto max-w-6xl px-4 lg:px-8 mt-8 "
>
  <div class="flex-shrink-0 my-auto py-16 sm:py-32">
    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">
        Erreur 404
    </p>
    <h1
      class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl"
    >
        Page introuvable
    </h1>
    <p class="mt-2 text-base text-gray-500">
        Excusez-nous, nous n'avons pas pu trouver la page que vous cherchez.
    </p>
    <div class="mt-6">
      <a
        href="{{url('/')}}"
        class="text-base font-medium text-gray-600 hover:text-gray-500"
        >
        Retourner à l'accueil
        <span aria-hidden="true"> &rarr;</span></a
      >
    </div>
  </div>
</main>
  <x-footer />
  
</body>