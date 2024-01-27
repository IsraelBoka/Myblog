<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <meta name="google-site-verification" content="gHeNLRYZ2XmNOIdu7qpPjj9AY26HBxoSg1fsdNbDIpE" />
        
        
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
              $('#example').DataTable();
          });
          
        </script>  
    </body>
</html>