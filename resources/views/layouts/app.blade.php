<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>

    </head>
    <body class="">
        <div class="flex  ">
            @include('layouts.navigation')
            <div class="flex flex-col  mx-auto ">
                

            <!-- Page Heading -->
            <header class="">
                <div class="">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <div class="flex items-center justify-center   mx-auto">
                
            <main class=" mx-auto  items-center flex justify-center ">
                {{ $slot }}
            </main>
            </div>
            </div>
        </div>
    </body>
</html>
