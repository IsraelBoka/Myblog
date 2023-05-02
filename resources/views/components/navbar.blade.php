<nav class="mx-auto max-w-6xl px-4 lg:px-8"  x-data="{ open: false }">
    <ul class=" flex items-center  justify-between lg:justify-between text-xl gap-5 font-medium ">
        <div class="">
            <li class="cursor-pointer">
                <a href={{url('/')}} class="inline-flex items-center justify-center ">
                    <img src="/Logo-black.png" alt="" class="h-16 lg:w-20 w-16 lg:h-20 p-1">
                    <p class="text-brand-black select-none text-base lg:text-xl">
                        Orientation
                    </p>
                </a>
            </li>
        </div>
            
        <div class="hidden [&>li]:uppercase py-0.5 px-0.5  lg:flex gap-5 items-center">
            <li>
                <a class='group text-brand-black transition-all duration-300 ease-in-out' href='{{url('mbti')}}'>
                    <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                        Passer un test
                    </span>
                </a>
            </li>
            <li>
                
                <a class='group text-brand-black transition-all duration-300 ease-in-out' href='{{url('a-propos')}}'>
                    <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                        A propos
                    </span>
                </a>
            </li>
            <li>
                <a class='group text-brand-black transition-all duration-300 ease-in-out' href='{{url('contact')}}'>
                    <span class='py-1 bg-left-bottom bg-gradient-to-r from-brand-black to-brand-black bg-[length:0%_5px] bg-no-repeat group-hover:bg-[length:100%_5px] transition-all duration-500 ease-out'>
                        Contact
                    </span>
                </a>
            </li>

        <div class="hidden lg:flex">
                    
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-brand-black text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-brand-black text-xl  py-2 px-4 transition-all rounded-3xl hover:rounded-2xl  duration-200 text-white ease-in-out ">Se connecter </a>
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
                    
                    <svg class="h-[32px] w-[32px] items-center inline-flex flex-col justify-center" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path  d="M2 6h20" :class="{' rotate-45 translate-x-1.5': open, 'opacity-100 ': ! open }"  class=" transition-transform duration-500 ease-in-out" stroke="#000E38" stroke-width="2"/>
                        <path :class="{' scale-75 opacity-0 ': open, 'opacity-100 scale-100': ! open }" class="  transition-all  ease-in-out duration-300" d="M2 12h20" stroke="#000E38" stroke-width="2"/>
                        <path d="M2 18h20" :class="{' -rotate-45 translate-y-[0.4rem] -translate-x-2 ': open, 'opacity-100 ': ! open }" class="transition-transform duration-500 ease-in-out" stroke="#000E38" stroke-width="2"/>
                    </svg>
            </button>
        </div>

    </ul>
    
    <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden block">
        <div class=" ">
            <a href="{{url('mbti')}}" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-brand-black hover:text-white transition-colors duration-150 rounded">Passer un test</a>
            <a href="{{url('a-propos')}}" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-brand-black hover:text-white transition-colors duration-150 rounded">A propos</a>
            <a href="{{url('contact')}}" class="font-medium block px-1.5 py-2 text-base text-black hover:bg-brand-black hover:text-white transition-colors duration-150 rounded">Contact</a>
                        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="text-center font-medium block mt-2 p-1 text-base hover:bg-opacity-80 hover:text-white bg-brand-black text-white transition-colors duration-150 rounded-3xl ">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-center font-medium block mt-2 p-1 text-base hover:bg-opacity-80 hover:text-white bg-brand-black text-white transition-colors duration-150 rounded-3xl ">Se connecter </a>
            @endauth
    @endif
        </div>
    </div>

</nav>