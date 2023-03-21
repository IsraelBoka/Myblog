<x-app-layout>
    <x-slot name="header">
        <h2 class="pt-2 text-2xl font-bold ml-4 text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
    <div class="flex ">
        
    <div class="flex-1 flex">
        <div class="flex   p-4 gap-3  w-[80%]  bg-red-500">
            <div class="h-28 p-4 hover:text-white border hover:bg-brand-black rounded-xl group ">
                <p class=" text-sm flex items-center  group-hover:text-gray-300 ">Nombres d'articles
                <span class="ml-5 flex  group-hover:border-t-brand-black border-t-white   border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>
    
            <div class="h-28 p-4 text-white bg-brand-black rounded-xl ">
                <p class="text-gray-300 text-sm flex items-center ">Nombres d'articles
                <span class="ml-5 flex border-t-brand-black  border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>
    
            
            <div class="h-28 p-4 text-white bg-brand-black rounded-xl ">
                <p class="text-gray-300 text-sm flex items-center ">Nombres d'articles
                <span class="ml-5 flex border-t-brand-black  border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>



        </div>

        {{-- recent articles section --}}

        <div class=" w-96 p-4 bg-blue-500">
            <div class="flex flex-col">
                
            <div class="flex items-center justify-between">
                <h1 class="text-lg font-bold ">
                    Liste des articles
                </h1>
                <a href="" class="text-xs underline ">
                    Voir tous
                </a>
            </div>

            <div>
                <p class="font-semibold">Titre de l'article </p>
                <p>Description de l'article </p>
                <p>Jour et année </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, in, maiores numquam, quis omnis eaque eveniet animi ut repellendus ad placeat beatae cumque distinctio quisquam sint? Similique ullam porro ab.</p>
            </div>
            </div>
            
        </div>



    </div>
    </div>
    <div class="bg-purple-500">
        
        
        <div>
            lasfkasmf

        </div>
    </div>
    
</x-app-layout>
