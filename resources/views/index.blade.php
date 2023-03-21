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
<body class=" selection:bg-brand-black selection:text-white">
    <nav class="mx-auto max-w-6xl px-4 lg:px-8"  x-data="{ open: false }">
        <ul class=" flex items-center  justify-between lg:justify-between text-xl gap-5 font-medium ">
            <div class="">
                <li class="cursor-pointer">
                    <a href={{url('/')}} class="inline-flex items-center justify-center ">
                        <img src="/Logo-black.png" alt="" class="h-16 lg:w-20 w-16 lg:h-20 p-1">
                        <p class="text-brand-gray select-none text-base lg:text-xl">
                            Orientation
                        </p>
                    </a>
                </li>
            </div>
                
            <div class="hidden [&>li]:uppercase py-0.5 px-0.5  lg:flex gap-5 items-center">

            

                <li>
                    
                    <a class='group text-brand-black transition-all duration-300 ease-in-out' href='#'>
                        <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                            Passer un test
                        </span>
                    </a>
                </li>

                <li>
                    
                    <a class='group text-brand-black transition-all duration-300 ease-in-out' href='#'>
                        <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                            A propos
                        </span>
                    </a>
                </li>

                <li>
                    
                    <a class='group text-brand-black transition-all duration-300 ease-in-out' href='#'>
                        <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                            Contact
                        </span>
                    </a>
                </li>

                
            
                
            <div class="hidden lg:flex">
                        
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-[#292929] text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-[#292929] text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ease-in-out ">Se connecter </a>
    
                @endauth
        @endif
                    </div>
            </div>

            
                    
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-black   focus:outline-none  transition duration-150 ease-in-out">
<!--                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'scale-75 opacity-0 ': open, 'opacity-100 scale-100': ! open }" class="inline-flex transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'opacity-0 scale-75': ! open, 'opacity-100 scale-100': open }" class="opacity-0 inline-flex transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>-->
                        <!--
                        <svg class="h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path  d="M2 6h20" :class="{' rotate-45': open, 'opacity-100 ': ! open }" class="inline-flex transition-all duration-300" stroke="black" stroke-width="2"/>
                            <path :class="{' opacity-0 ': open, 'opacity-100 ': ! open }" class="inline-flex transition-all duration-300" d="M2 12h20" stroke="black" stroke-width="2"/>
                            <path :class="{' rotate-45': open, 'opacity-100 ': ! open }" d="M2 18h20" stroke="black" stroke-width="2"/>
                        </svg> -->
                        
                        <svg class="h-6 w-6 items-center inline-flex flex-col justify-center" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path  d="M2 6h20" :class="{' rotate-45 translate-x-1.5': open, 'opacity-100 ': ! open }"  class=" transition-transform duration-500 ease-in-out" stroke="black" stroke-width="2"/>
                            <path :class="{' scale-75 opacity-0 ': open, 'opacity-100 scale-100': ! open }" class="  transition-all  ease-in-out duration-300" d="M2 12h20" stroke="black" stroke-width="2"/>
                            <path d="M2 18h20" :class="{' -rotate-45 translate-y-[0.4rem] -translate-x-2 ': open, 'opacity-100 ': ! open }" class="transition-transform duration-500 ease-in-out" stroke="black" stroke-width="2"/>
                        </svg>
                </button>
            </div>

        </ul>
        
        <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden block">
            <div class=" ">
                <a href="#" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">Passer un test</a>
                <a href="#" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">A propos</a>
                <a href="#" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-black hover:text-white transition-colors duration-150 rounded">Contact</a>
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


    <div class="grid  relative   lg:grid-cols-2  mx-auto max-w-6xl px-4 lg:px-8 mt-12 ">
        <div class="relative">
        <div class="carousel">
            <div class="carousel-container">
              <div class="carousel-item active">
                <img src="/images/image1.jpg"  class="rounded-xl lg:h-96" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="/images/image2.jpg"  class="rounded-xl lg:h-96" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="/images/image3.jpg"  class="rounded-xl lg:h-96" alt="Image 3">
              </div>
            </div>
          </div>

        </div>
        <div class="font-bold relative text-center flex gap-4 flex-col items-center justify-center">
            <div class=" absolute animate-blob   filter  -top-20 -right-4 opacity-70 blur-xl h-40 w-40  lg:h-72 lg:w-72 bg-purple-300 mix-blend-multiply  rounded-full"></div>
            <div class=" absolute  top-0 animate-blob filter bottom-16  opacity-70 left-16 blur-xl  h-40 w-40   lg:h-72 lg:w-72 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <h1 class="text-xl lg:text-3xl z-10 ">
                Passer un test pour votre enfant ?
            </h1>
            <h2 class=" text-base lg:text-2xl lg:leading-relaxed font-medium z-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.Quisquam, quod.
            </h2>
                <a href="/test" class="bg-white border-2 text-lg md:text-xl hover:scale-105 duration-150 transition-transform z-10 inline-flex  border-[#292929] rounded-3xl p-1.5 md:p-2 ">Passer un test </a>
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


<a href={{url('blog1')}} class="  z-10 bg-white rounded-2xl py-4 px-1 border-2 border-[#292929]">
        
    <img src="/images/image1.jpg" class="rounded-2xl " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 · 5 min de lecture
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
</a>

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

    <div class=" mx-auto max-w-6xl px-4 mt-12">

          <style>
            .carousel {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-container {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.carousel-item {
  flex-shrink: 0;
  width: 100%;
}

.carousel-item img {
  width: 100%;
}

          </style>

          <script>
            const carouselContainer = document.querySelector('.carousel-container');
const carouselItems = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;

function moveCarousel() {
  currentIndex++;
  if (currentIndex >= carouselItems.length) {
    currentIndex = 0;
  }
  carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
}

const interval = setInterval(moveCarousel, 5000);

          </script>



          
        
        <div class=" bg-black  text-white  grid grid-cols-2  rounded-t p-2">

<div class="flex flex-col justify-center items-center gap-2 ">
    <a href={{url('/')}} class="inline-flex flex-col items-center justify-center ">
        <img src="/Logo-white-background.png" alt="" class="h-16 lg:w-20 w-16 lg:h-20 p-1">
        <p class=" select-none text-base lg:text-xl">
            Orientation
        </p>
    </a>
    <p class="text-xs md:text-sm md:w-1/2 font-medium text-[#6a6f7a] hover:text-white duration-150 transition-opacity">
        Notre mission est de vous aider à trouver votre voie et à vous accompagner dans votre orientation. <span class="hidden md:block">Nous vous proposons des outils et des informations pour vous aider à faire le bon choix.</span>
    </p>
</div>

<div>
    <div class="flex flex-col justify-center h-full items-center gap-2 w-full ">
        <p class="text-base md:text-lg font-bold">
            Liens utiles
        </p>
        <div class="flex flex-col justify-center items-center gap-2 ">

            <a class='group text-xs md:text-sm font-medium text-brand-gray transition-all duration-300 ease-in-out' href={{url('/')}}>
                <span class='py-1 bg-left-bottom hover:text-white bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out'>
                    Accueil
            </span>
            
            <a class='group text-xs md:text-sm font-medium text-brand-gray transition-all duration-300 ease-in-out' href={{url('/')}}>
                <span class='py-1 bg-left-bottom hover:text-white bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out'>
                   A propos
                </span>
            </a>
            </a>
            <a class='group text-xs md:text-sm font-medium text-brand-gray transition-all duration-300 ease-in-out' href={{url('/')}}>
                <span class='py-1 bg-left-bottom hover:text-white bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out'>
                  Contact
                </span>
            </a>
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

    

            </body>
  

</html>

