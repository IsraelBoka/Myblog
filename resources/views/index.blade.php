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

    <nav class="mx-auto max-w-6xl px-4 lg:px-8 mt-4"  x-data="{ open: false }">
        <ul class=" flex items-center justify-between lg:justify-start text-xl gap-5 font-medium ">
            <div class="">
                <li class="cursor-pointer">Orientation.com</li>
            </div>
                
            <div class="hidden [&>li]:uppercase py-0.5 px-0.5 rounded-full mx-auto border-2 border-[#292929] bg-white lg:flex gap-5 [&>li]:transition-all  [&>li]:duration-300  [&>li]:cursor-pointer [&>li]:rounded-full [&>li]:p-2 hover:[&>li]:bg-[#292929]  hover:[&>li]:text-white">
                <li class="">Passer un test </li>
                <li>
                    A propos 
                </li>
                <li>
                    Contact
                </li>
            </div>
            
            <div class="hidden lg:flex">
                    
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-[#292929] text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ">Se connecter </a>
    
                @endauth
        @endif
                    </div>
                    
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-black   focus:outline-none  transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'scale-75 opacity-0 ': open, 'opacity-100 scale-100': ! open }" class="inline-flex transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'opacity-0': ! open, 'opacity-100': open }" class="opacity-0 inline-flex transition-opacity duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

   
                      
        </ul>
        
        <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden block">
            <div class=" ">
                <a href="#" class="font-medium block px-4 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">Passer un test</a>
                <a href="#" class="font-medium block px-4 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">A propos</a>
                <a href="#" class="font-medium block px-4 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">Contact</a>
            </div>
        </div>

    </nav>

    <!-- Div annonce  -->
<!--
    <div class="flex items-center justify-center mt-6 ">
        <div class="relative">
            
        <div class="absolute bg-gradient-to-r from-purple-500 to-yellow-500 blur rounded-full inset-0 "></div>
        <a class=" duration-200 transition-transform relative cursor-pointer rounded-full px-2 py-0.5 font-medium bg-[#f2f2f2] border border-[#292929]  text-[#292929] ">
            Conférence sur l'orientation scolaire ce samedi 12/12/2020
        </a>
        </div>
    </div> -->


    <!-- Body index page  -->


    <div class="grid  relative   lg:grid-cols-2  mx-auto max-w-6xl px-4 lg:px-8 mt-12">
        <div class="">
            <img src="/images/image1.jpg" alt="image1" class="rounded-md z-10">
        </div>
        <div class="font-bold relative text-center flex gap-4 flex-col items-center justify-center">
            <div class=" absolute animate-blob   filter  -top-20 -right-4 opacity-70 blur-xl h-40 w-40  lg:h-72 lg:w-72 bg-purple-300 mix-blend-multiply  rounded-full"></div>
            <div class=" absolute  top-0 animate-blob filter bottom-16  opacity-70 left-16 blur-xl  h-40 w-40   lg:h-72 lg:w-72 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <h1 class="text-xl z-10 ">
                Passer un test pour votre enfant ?
            </h1>
            <h2 class="text-md font-medium z-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br class="hidden md:block" /> Quisquam, quod.
            </h2>
            <div class="hover:scale-105 duration-150 transition-transform z-10">
                <a href="/test" class="bg-white border-2 text-xl   border-[#292929] rounded-3xl p-2 ">Passer un test </a>

            </div>
        </div> 

    </div>

    <!-- Section Blogs -->

    <div class=" mx-auto max-w-6xl px-4 lg:px-8 mt-12">
        <div class="flex flex-col lg:flex-row lg:items-end gap-2 lg:gap-10  ">
            
        <h1 class="text-5xl  font-bold ">Blog </h1>
        <div class="md:text-xl text-sm font-medium  ">
            Apprenez à mieux connaitre votre enfant et à l'aider dans son orientation scolaire
        </div>
        </div>

        <!-- Trier les articles  -->

        <div class="flex flex-wrap gap-2 mt-5">
            <button class="p-2 z-10 text-sm lg:text-base bg-[#292929] text-white rounded-full ">Toutes</button>
            <button class="p-2 z-10  text-sm lg:text-base border-dashed border-[#292929] transition-all  rounded-3xl border-2 hover:rounded-xl">Scolaire</button>
            <button class="p-2 z-10  text-sm lg:text-base border-dashed border-[#292929] transition-all  rounded-3xl border-2 hover:rounded-xl">Catégorie 3</button>
            <button class="p-2 z-10  text-sm lg:text-base border-dashed border-[#292929]  transition-all rounded-3xl border-2 hover:rounded-xl">Catégorie 4</button>
        </div>


        <!-- les articles -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 relative lg:grid-cols-3 gap-5 mt-10">                
            <div class="absolute hidden lg:block    animate-blob   filter -top-16 right-36   opacity-70 blur-xl  h-60 w-60 bg-purple-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute hidden lg:block animate-blob   filter  -top-16 left-36 opacity-70 blur-xl  h-60 w-60 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute  hidden lg:block animate-blob   filter  top-0 right-8 opacity-70 blur-xl  h-20 w-20 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute  hidden lg:block animate-blob   filter  top-0 left-4 opacity-70 blur-xl  h-20 w-20 bg-purple-300 mix-blend-multiply  rounded-full"></div>

   <!-- foreach pour les articles -->


<div class="  z-10 bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-[#292929] ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
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

<div class=" z-10  bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-[#292929] ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
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


<div class=" z-10  bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-[#292929] ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
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

<div class=" z-10  bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-[#292929] ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
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

<div class = " z-10  bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 . 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-[#292929] ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
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
        <!-- 
        
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
                <p class="hover:text-white  transition-colors duration-150 text-sm lg:text-base">
                    Notre but est de vous aider à trouver votre voie et à vous <br class="hidden md:block " /> accompagner  dans votre projet d'orientation.

                </p>
                
            <ul class="flex gap-2 justify-center [&>li]:underline">
                <li>
                    <a href="" class="text-[#747675] text-sm lg:text-base font-medium hover:text-white transition-colors duration-150">Accueil</a>
                </li>
                <li>
                    <a href="" class="text-[#747675] text-sm lg:text-base font-medium hover:text-white transition-colors duration-150">A propos</a>
                </li>
                <li>
                    <a href="" class="text-[#747675] text-sm lg:text-base font-medium hover:text-white transition-colors duration-150">Contact</a>
                </li>
            </ul>

            </div>


        </div>-->
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
