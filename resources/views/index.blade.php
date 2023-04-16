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
    

    <x-navbar/>
    <!-- Div annonce  -->
<!--
    <div class="flex items-center justify-center mt-6 ">
        <div class="relative">
            
        <div class="absolute bg-gradient-to-r from-purple-500 to-yellow-500 blur rounded-full inset-0 "></div>
        <a class=" duration-200 transition-transform relative cursor-pointer rounded-full px-2 py-0.5 font-medium bg-[#f2f2f2] border border-brand-black  text-brand-black ">
            Conférence sur l'orientation scolaire ce samedi 12/12/2020
        </a>
        </div>
    </div> -->


    <!-- Body index page  -->


    <div class="grid  relative   lg:grid-cols-2  mx-auto max-w-6xl px-4 lg:px-8 mt-12 ">
        <div class="relative">
        <div class="carousel">
            <div class="carousel-container">
              <div class="carousel-item ">
                <img src="/images/image1.jpg"  class="rounded-xl object-cover  lg:h-96" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="/images/image2.jpg"  class="rounded-xl object-cover  lg:h-96" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="/images/image3.jpg"  class="rounded-xl  object-cover lg:h-96" alt="Image 3">
              </div>
            </div>
          </div>

        </div>
        <div class="font-bold relative text-center flex gap-4 flex-col items-center justify-center">
            <div class=" absolute animate-blob filter  -top-20 -right-4 opacity-70 blur-xl h-40 w-40  lg:h-72 lg:w-72 bg-purple-300 mix-blend-multiply  rounded-full"></div>
            <div class=" absolute  top-0 animate-blob filter bottom-16  opacity-70 left-16 blur-xl  h-40 w-40   lg:h-72 lg:w-72 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <h1 class="text-2xl lg:text-3xl z-10 mt-10 lg:mt-0  " id="hero-title">
                Passer un test pour votre enfant ?
            </h1>
            <h2 class=" text-xl lg:text-2xl lg:leading-relaxed font-medium z-10   " id="hero-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.Quisquam, quod.
            </h2>
                <a href="/test" class="bg-white border-2 text-lg md:text-xl hover:scale-105 duration-150 transition-transform z-10 inline-flex  border-brand-black rounded-3xl p-1.5 md:p-2 ">Passer un test </a>
        </div> 

    </div>

    <!-- Section Blogs -->

    <div class=" mx-auto max-w-6xl px-4 lg:px-8 mt-12">
        <div class="flex flex-col lg:flex-row lg:items-end gap-2 lg:gap-10  ">
            
        <h1 class="text-5xl  font-bold ">Blog </h1>
        <div class="md:text-xl text-base font-medium  ">
            Apprenez à mieux connaitre votre enfant et à l'aider dans son orientation scolaire
        </div>
        </div>

        <!-- Trier les articles  -->

        <div class="flex flex-wrap gap-2 mt-5">
            <button class="categorie active" data-categorie="all">Toutes</button>
            <button class="categorie " data-categorie="Scolaire">Scolaire</button>
            <button class="categorie"  data-categorie="Professionnel">Professionnel</button>
            <button  class="categorie "  data-categorie="Apprentissage">Apprentissage</button>
            <button class="categorie"  data-categorie="Education">Education</button>
        </div>


        <!-- les articles -->
        <div>
        <div class="grid grid-cols-1 md:grid-cols-2 relative lg:grid-cols-3 gap-5 mt-10">                
            <div class="absolute hidden lg:block    animate-blob   filter -top-16 right-36   opacity-70 blur-xl  h-60 w-60 bg-purple-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute hidden lg:block animate-blob   filter  -top-16 left-36 opacity-70 blur-xl  h-60 w-60 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute  hidden lg:block animate-blob   filter  top-0 right-8 opacity-70 blur-xl  h-20 w-20 bg-yellow-300 mix-blend-multiply  rounded-full"></div>
            <div class="absolute  hidden lg:block animate-blob   filter  top-0 left-4 opacity-70 blur-xl  h-20 w-20 bg-purple-300 mix-blend-multiply  rounded-full"></div>

   <!-- foreach pour les articles -->


<a href={{url('blog1')}} data-categorie="Scolaire" class="  hover:scale-[1.01] duration-300 transition-transform article z-10  shadow-2xl bg-white rounded-2xl py-4 px-1 border-2 border-brand-black">
        
    <img src="/images/image2.jpg" class="rounded-2xl lg:h-64 object-cover " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 · 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-brand-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
        <div class="text-end uppercase text-xs font-medium">
            #Scolaire 
        </div>
        
    </div>
</a>


<a href={{url('blog1')}}   data-categorie="Professionnel" class=" hover:scale-[1.01] duration-300 article z-10 transition-transform cursor-pointer shadow-2xl bg-white rounded-2xl py-4 px-1 border-2 border-brand-black">
        
    <img src="/images/image1.jpg" class="rounded-2xl lg:h-64 object-cover " alt="">
    <span class="text-xs font-medium text-[#6a6f7a] ">
        Mardi , 25 Novembre 2020 · 5 min de lecture
    </span>
    <h1 class="text-center text-xl font-bold border-t-2 mt-2 border-dashed border-brand-black ">Titre de l'article </h1>
    <p class="text-[#6a6f7a] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

    <div class="flex gap-2 justify-end mt-2 flex-wrap  ">
        <div class="text-end uppercase text-xs font-medium">
            #Professionnel 
        </div>
        
    </div>
</a>

<!-- enforeach -->
            </div>
            
<h1 class="no-articles w-full text-2xl font-bold text-center py-16   hidden">
    Aucun article correspondant à votre recherche
</h1>
        </div>
    </div>  


    <!-- footer --> 


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
// change the innerhtml of the herotitle and herodescription headers at the same time as the images changes
const heroTitle = document.querySelector('#hero-title');
const heroDescription = document.querySelector('#hero-description');

const heroTitles = [
    'Passer un test pour votre enfant ',
    "Passer un test pour votre étudiant ",
    'Passer un test pour votre enfant en difficulté ',
];

const heroDescriptions = [
    'Description pour votre enfant ',
    "Description pour votre étudiant ",
    'Description pour votre enfant en difficulté',
];


let currentIndex = 0;

function moveCarousel() {
  currentIndex++;
  if (currentIndex >= carouselItems.length) {
    currentIndex = 0;
  }
  carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    heroTitle.innerHTML = heroTitles[currentIndex];
    heroDescription.innerHTML = heroDescriptions[currentIndex];
    
}

const interval = setInterval(moveCarousel, 5000);


// filter categories when i click on the categorie button
const categories = document.querySelectorAll('.categorie');
const articles = document.querySelectorAll('.article');

categories.forEach((categorie) => {
    categorie.addEventListener('click', () => {
        // remove the active class from all the categories
        categories.forEach((categorie) => {
            categorie.classList.remove('active');
        });
        // add the active class to the categorie that i clicked on
        categorie.classList.add('active');
        // filter the articles
        const categorieName = categorie.getAttribute('data-categorie');
        articles.forEach((article) => {

            const articleCategorie = article.getAttribute('data-categorie');
            if (categorieName === articleCategorie || categorieName === 'all') {
                article.style.display = 'block';
                article.classList.add('animate-fade-in');
            } else {
                article.style.display = 'none';
                article.classList.remove('animate-fade-in');
                article.classList.add('animate-fade-out');
                setTimeout(() => {
                    article.classList.remove('animate-fade-out');
                }, 500);
            }

        });

        const numArticles = document.querySelectorAll('.article[data-categorie="' + categorieName + '"]').length;
        if (numArticles === 0 && categorieName !== 'all') {
            document.querySelector('.no-articles').classList.remove('hidden');
        } else {
            document.querySelector('.no-articles').classList.add('hidden');
        }


    });
});




          </script>

<div class=" mx-auto max-w-6xl px-4 lg:px-8 mt-24">

    <h1 class="text-center text-2xl font-bold p-2 ">
        Vous souhaitez recevoir nos actualités ?
    </h1>
    <p class="text-center text-xl font-medium p-2 ">
        Recevez nos actualités par mail et restez informé de nos nouveautés
    </p>

<form action="" method="post" name="mc-embedded-subscribe-form" target="_blank" class="mt-6">
    <div class="max-w-lg mx-auto ">
        <label class="sr-only" for="email">Email</label>
        <div class="bg-[length:400%_400% relative animate-border rounded-lg bg-gradient-to-r  from-brand-gray to-brand-black p-0.5 focus-within:ring">
            <input class="w-full p-4 pr-32 text-lg font-medium border-none rounded-md border-brand-black bg-white text-brand-black placeholder-brand-black/50" id="email" type="email" name="EMAIL" required="" placeholder="entrez votre mail">
            <button class="absolute top-1/2 right-[0.35rem] -translate-y-1/2 rounded-xl bg-brand-black px-5 py-3 font-medium text-white transition">
                <span class="hidden sm:inline">S'inscrire</span>
                <span class="sm:hidden">S'inscrire</span>
            </button>
        </div>
    </div>
</form>

</div>


<x-footer/>

   


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

