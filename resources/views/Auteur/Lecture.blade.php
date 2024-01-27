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
    <x-navbar/>

        <div class="mt-4 lg:mt-12 mx-auto max-w-6xl px-4 lg:px-8">
            <div class="max-w-2xl mx-auto pt-4 lg:pt-12 ">
                
<div class="flex flex-col gap-4 relative">
    
    <div class=" absolute animate-blob filter  -top-20 -right-4 opacity-70 blur-xl h-40 w-40  lg:h-40 lg:w-40 bg-purple-300 mix-blend-multiply  rounded-full"></div>
    <div class=" absolute  top-0 animate-blob filter bottom-16  opacity-70 left-16 blur-xl  h-40 w-40   lg:h-40 lg:w-40 bg-yellow-300 mix-blend-multiply  rounded-full"></div>

    <h2 class="text-base font-medium text-brand-gray ">
        {{$Articles->created_at}} 
    </h2>
    <h1 class="text-4xl lg:text-5xl text-brand-black font-bold uppercase ">
        {{$Articles->Titre}} 
    </h1>
<div class="border-2 border-black rounded-2xl p-2 ">
    <img src="{{asset('/../fichier/img/'.$Articles->Image)}}" class=" lg:h-96 lg:w-full rounded-2xl " alt="">
</div>

<div class="mt-4">
    

    <p class="font-medium text-lg text-left text-black">
        {!!$Articles->Text!!} 
 
    </p>


    {{-- FORM FOR COMMENTARY  --}}

<div>
    <h2 class="text-2xl text-brand-black pt-16 pb-8 font-bold">
        Commentaires ({{$commentaire->count()}})
    </h2>
    <form class="shadow-xl  rounded-xl" action="{{ route('articles.commentaire') }}" method="POST">
        @csrf
        <div class="w-full mb-4 border border-gray-200 rounded-xl bg-gray-50">
            <div class="px-4 py-2 bg-white rounded-t-xl ">
                <label for="comment" class="sr-only">Votre commentaire...</label>
                <textarea id="comment" rows="4" name="commentaire" class="w-full px-0 text-sm placeholder:text-gray-600 text-gray-900 bg-white border-0  focus:ring-0 " placeholder="Ecrivez un commentaire..." required></textarea>
            </div>
            <div class="mb-4" hidden>
                
                <input type="text" id="title" name="article" placeholder="Enter le titre" value="{{$Articles->Id}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>

            <div class="flex flex-row-reverse items-center justify-between px-3 py-2 border-t rounded-b-xl">
                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-brand-black rounded-xl focus:ring-4 focus:ring-blue-200 ">
                    Poster un commentaire
                </button>
            </div>
        </div>
     </form>
     
</div>

    {{-- END FORM FOR COMMENTARY  --}}


    {{-- COMMENTARY  --}}
    
    <hr class="mt-16 mb-8 border-brand-black"/>
    <div class="p-6">
        
        

        @if ($commentaire->count() == 0)
        <p>Il n'ya pas de commentaires pour ce article</p>
        @else
        @foreach ($commentaire as $commentaires)

        <div class="">
            {{-- one message --}}
            <article class="p-6 text-base   text-brand-black">
                <footer class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm  text-brand-black"><img
                                class="mr-2 w-6 h-6 rounded-full"
                                src="https://api.dicebear.com/6.x/initials/svg?seed={{$commentaires->name}}"
                                alt="Helene Engels">{{$commentaires->name}}</p>
                        <p class="text-sm  text-brand-black"><time pubdate datetime="2022-06-23"
                                title="June 23rd, 2022"> publié le : {{$commentaires->created_at}}</time></p>
                    </div>
                </footer>
                <p class=" text-brand-black  ">{{$commentaires->commentaire}}</p>
    
            </article>
            <hr class="mt-16 mb-8 border-brand-black"/>
        </div>
        @endforeach  
        
        @endif

    
    
    </div>

</div>

        </div>
    </div>

   
        <x-footer/>
    </body>
</html>


{{-- <!DOCTYPE html>
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
        {{$Articles->created_at}} 
    </h2>
    <h1 class="text-4xl lg:text-5xl text-brand-black font-bold uppercase ">
        {{$Articles->Titre}} 
    </h1>
    
<div class=" uppercase text-xs font-medium">
    #Scolaire 
</div>
<div class="border-2 border-black rounded-2xl p-2">
    <img src="{{asset('/fichier/img/'.$Articles->Image)}}" class=" lg:h-96 lg:w-full rounded-2xl " alt="">
</div>

<div class="mt-4">
    <p class="text-2xl lg:text-3xl mb-5 text-brand-black font-bold">
        Sous-titre
    </p>
    <p class="font-medium text-lg text-left">
       {{$Articles->Text}} 
 
    </p>
</div>

        </div>

   
    </body>
</html> --}}
