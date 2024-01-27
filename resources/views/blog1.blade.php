<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="">
        <nav class="mx-auto max-w-6xl px-4 lg:px-8 mt-4"  x-data="{ open: false }">
            <ul class=" flex  justify-between lg:justify-between text-xl gap-5 font-medium ">
                <div class="">
                    <li class="cursor-pointer">
                        <a href={{url('/')}}>Orientation.com</a>
                    </li>
                </div>
                    
                <div class="hidden [&>li]:uppercase py-0.5 px-0.5 rounded-full  lg:flex gap-5 items-center">
    
                
    
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
                        <a href="{{ route('login') }}" class="bg-[#292929] text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ">Se connecter </a>
        
                    @endauth
            @endif
                        </div>
                </div>
    
                
                        
                <div class="-mr-2 flex items-center lg:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-black   focus:outline-none  transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'scale-75 opacity-0 ': open, 'opacity-100 scale-100': ! open }" class="inline-flex transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'opacity-0 scale-75': ! open, 'opacity-100 scale-100': open }" class="opacity-0 inline-flex transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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

        <div class="mt-4 lg:mt-12 mx-auto max-w-6xl px-4 lg:px-8">
            <div class="max-w-2xl mx-auto pt-4 lg:pt-12 ">
                
<div class="flex flex-col gap-4">
    
    <h2 class="text-base font-medium text-brand-gray ">
        Mardi, 12 janvier 2021 · 5 min de lecture
    </h2>
    <h1 class="text-4xl lg:text-5xl text-brand-black font-bold uppercase ">
        Titre du blog LELMLSDKF
    </h1>
    
<div class=" uppercase text-xs font-medium">
    #Scolaire 
</div>
<div class="border-2 border-black rounded-2xl p-2">
    <img src="/images/image1.jpg" class=" lg:h-96 lg:w-full rounded-2xl " alt="">
</div>

<div class="mt-4">
    <p class="text-2xl lg:text-3xl mb-5 text-brand-black font-bold">
        Sous-titre
    </p>
    <p class="font-medium text-lg text-left">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis sint ducimus, magnam illo quasi maxime. Eos autem est voluptas officiis quaerat dolores nostrum, nulla voluptatibus, culpa molestias dolor. Necessitatibus, rerum!
        Itaque rerum unde assumenda porro est repellat possimus aut soluta odit repellendus impedit nam qui similique magnam commodi, eos consectetur vitae laborum dolorum, dolorem, praesentium nostrum odio minima autem. Reiciendis!
        Vero nam magni voluptas similique, natus tempora reprehenderit rem officia consequuntur distinctio recusandae illum unde in est quibusdam praesentium deleniti. A tempora velit ducimus quidem minima. Voluptatum aliquid quas dolore?
        Libero porro magnam quidem tenetur repellat. Autem dolor dolorum cupiditate aliquam adipisci sed molestiae reiciendis exercitationem labore optio quis id harum alias voluptate, consequuntur maxime odit voluptates beatae laudantium. Nesciunt!
        Quod magnam dolorem aliquid eaque quaerat ea corporis ut saepe sit? Pariatur quis, odit dolor cum aliquam soluta quibusdam, quaerat ea fuga similique officiis. Obcaecati earum corrupti doloribus porro est!
        Suscipit, dolor error! Expedita, doloremque esse doloribus ipsum temporibus odio molestias optio ullam voluptatum eos accusamus eligendi at aperiam non blanditiis cum! Porro, maiores earum itaque adipisci explicabo cupiditate repellendus!
        Non, provident. Necessitatibus ullam architecto ad fugiat deleniti dolores esse officia eius nihil hic maxime minus voluptate eaque facere, totam suscipit. Delectus consectetur eos harum nemo quod dignissimos, repellat aliquam.
        Eveniet obcaecati animi harum praesentium? Culpa fugiat placeat nulla blanditiis expedita consectetur tenetur ab debitis. Illum, fuga rem perspiciatis quae commodi aspernatur consectetur totam non, expedita quasi ipsa distinctio accusamus!
 
    </p>
</div>

        </div>

   
    </body>
</html>
