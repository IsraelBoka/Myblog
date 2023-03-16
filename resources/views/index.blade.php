<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>

    </head>
    
        <!-- Navbar -->

    <nav class="mx-auto max-w-6xl px-4 lg:px-8 mt-4">
        <ul class=" flex items-center  text-xl gap-5 font-medium ">
            <li class="cursor-pointer">Orientation.com</li>
            <div class="py-0.5 px-0.5 rounded-full mx-auto border-2 border-black bg-white flex gap-5 [&>li]:transition-colors [&>li]:duration-300 [&>li]:cursor-pointer [&>li]:rounded-full [&>li]:p-2 hover:[&>li]:bg-black  hover:[&>li]:text-white">
                <li>Passer un test </li>
                <li>
                    A propos 
                </li>
                <li>
                    Contact
                </li>
            </div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-black text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ">Se connecter </a>

                @endauth
        @endif
        </ul>
    </nav>

    <!-- Div annonce  -->

    <div class="flex items-center justify-center mt-6 ">
        <div class="relative">
            
        {{-- <div class="absolute bg-gradient-to-r from-pink-500 to-blue-500 blur rounded-full inset-0 "></div> --}}
        <a class=" duration-200 transition-transform relative cursor-pointer rounded-full px-2 py-0.5 font-medium bg-[#e5e5e5]  text-black ">
            Conférence sur l'orientation scolaire ce samedi 12/12/2020
        </a>
        </div>
    </div>


    <!-- Body index page  -->


    <div class="grid lg:grid-cols-2  mx-auto max-w-6xl px-4 lg:px-8 mt-12">
        <div class="">
            <img src="/image1.jpg" alt="image1" class="rounded-md">
        </div>
        <div class="font-bold text-center flex gap-4 flex-col">
            <h1 class="text-xl ">
                Passer un test pour votre enfant ?
            </h1>
            <h2 class="text-md font-medium ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br class="hidden md:block" /> Quisquam, quod.
            </h2>
            <div class="hover:scale-105 duration-150 transition-transform">
                <a href="/test" class="bg-white border-2 text-xl   border-black rounded-3xl p-2 ">Passer un test </a>

            </div>
        </div>

    </div>

    <!-- Section Blogs -->

    <div class=" mx-auto max-w-6xl px-4 lg:px-8 mt-12">
        <div class="flex items-end gap-10  ">
            
        <h1 class="text-5xl  font-bold ">Blog </h1>
        <div class="text-xl font-medium  ">
            Apprenez à mieux connaitre votre enfant et à l'aider dans son orientation scolaire
        </div>
        </div>

        <!-- Trier les articles  -->

        <div class="flex gap-2 mt-5">
            <button class="p-2 bg-black text-white rounded-full ">Toutes</button>
            <button class="p-2  border-dashed border-black transition-all  rounded-3xl border-2 hover:rounded-xl">Scolaire</button>
            <button class="p-2  border-dashed border-black transition-all  rounded-3xl border-2 hover:rounded-xl">Catégorie 3</button>
            <button class="p-2  border-dashed border-black  transition-all rounded-3xl border-2 hover:rounded-xl">Catégorie 4</button>
        </div>


        <!-- les articles -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">
   <!-- foreach pour les articles -->


<div class="bg-white rounded-2xl py-4 px-1 border-2 border-black">
        
    <img src="/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie2 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie3 
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl py-4 px-1 border-2 border-black">
        
    <img src="/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie2 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie3 
        </div>
    </div>
</div>


<div class="bg-white rounded-2xl py-4 px-1 border-2 border-black">
        
    <img src="/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie2 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie3 
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl py-4 px-1 border-2 border-black">
        
    <img src="/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie2 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie3 
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl py-4 px-1 border-2 border-black">
        
    <img src="/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie2 
        </div>
        <div class="text-end uppercase text-xs font-medium">
            #Catégorie3 
        </div>
    </div>
</div>

<!-- enforeach -->
            </div>
        </div>
    </div>  


    <!-- footer --> 

    <div class=" mx-auto max-w-6xl px-4 lg:px-8 mt-12 mb-4">
        <div class=" bg-black rounded-md text-white p-2 flex items-center justify-between ">
            <div>
                
            <span class="text-xl font-bold w-1/2">
                Orientation.com
            </span>

            <p class="text-center text-[#747675]">Nous contacter ? </p>
            <p class="text-center ">
                <a href="mailto:@mail.com" class="text-[#747675] underline-offset-1
                underline text-base font-medium hover:text-white transition-colors duration-150">
                    @mail.com
                </a>
            </p>

            </div>
            <div class="text-[#747675] text-base font-medium w-1/2 flex flex-col gap-5 justify-center items-center">
                <p class="hover:text-white  transition-colors duration-150">
                    Notre but est de vous aider à trouver votre voie et à vous <br class="hidden md:block " /> accompagner  dans votre projet d'orientation.

                </p>
                
            <ul class="flex gap-2 justify-center [&>li]:underline">
                <li>
                    <a href="" class="text-[#747675] text-base font-medium hover:text-white transition-colors duration-150">Accueil</a>
                </li>
                <li>
                    <a href="" class="text-[#747675] text-base font-medium hover:text-white transition-colors duration-150">A propos</a>
                </li>
                <li>
                    <a href="" class="text-[#747675] text-base font-medium hover:text-white transition-colors duration-150">Contact</a>
                </li>
            </ul>

            </div>


        </div>
    </div>


    <!--
            @if (Route::has('login'))
                <div class="flex justify-center items-center flex-col gap-5 mt-5">
                    
            <a href="/">
                <x-application-logo class="w-16 h-16 hover:scale-110 duration-150 transition-all fill-current text-gray-500" />
            </a>
                    <h1 class="text-2xl font-bold " >My Blog </h1>
                    <h2 class="animate-bounce text-xl text-gray-800 " >
                        En cours de développement 
                    </h2>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-gray-400 text-xl rounded-md py-2 px-4 transition-colors hover:bg-gray-500 duration-150 ">Se connecter </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-gray-400 text-xl rounded-md py-2 px-4 transition-colors hover:bg-gray-500 duration-150">S'enregistrer </a>
                        @endif
                    @endauth
                </div>
            @endif -->

</html>
