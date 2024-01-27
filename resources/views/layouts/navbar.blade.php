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