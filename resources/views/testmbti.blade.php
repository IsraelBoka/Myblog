<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Orientation et Apprentissage
    </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{asset('js/app.js')}}"></script>

</head>

<!-- Navbar -->

<body class=" selection:bg-brand-black selection:text-white">


    <x-navbar />

    <div class="mx-auto max-w-6xl px-4 lg:px-8 mt-8 ">
        <div class="mx-auto flex-col flex items-center relative ">
            <div
                class="absolute hidden lg:block    animate-blob   filter -top-16 right-36   opacity-70 blur-xl  h-60 w-60 bg-purple-300 mix-blend-multiply  rounded-full">
            </div>
            <div
                class="absolute hidden lg:block animate-blob   filter  -top-16 left-36 opacity-70 blur-xl  h-60 w-60 bg-yellow-300 mix-blend-multiply  rounded-full">
            </div>

            <h1 class="text-4xl font-semibold    p-4">
                Passer le test MBTI
            </h1>
            <!-- 
                Responsive google forms
            -->
            <div class="z-10 w-full overflow-hidden lg:rounded-lg lg:shadow-lg">
                <div class="w-full overflow-x-auto">
                    <iframe class="w-full " src="" width="700" height="520" frameborder="0" marginheight="0"
                        marginwidth="0">Chargement…</iframe>
                </div>
            </div>


        </div>
    </div>


    <x-footer />






</body>


</html>


<!--
    <div>
    <h1>
        Test MBTI
    </h1>
    <div>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScjVdCrrTvhQZB1wrExsKqtuago_25oIhIu8A6MDVSH97fMog/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
    </div>
</div>
 -->