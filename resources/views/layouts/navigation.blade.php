<head>
        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script defer src="{{asset('js/app.js')}}"></script>
</head>



<nav x-data="{ open: false }" class="fixed border-r border-brand-gray hidden lg:block">
    <!-- Primary Navigation Menu -->
<div class="h-screen p-3 space-y-2 w-48 text-brand-black">
    <div class="flex justify-center mb-8 items-center">
		<a href={{url('/')}} class="inline-flex gap-2 items-center justify-center">
			<img src="/logo-black.png" class="mb-1 h-8 w-8 "  alt="logo orientation.com" srcset="">
			<span class="text-xs font-bold text-gray-500">Orientation</span>
		</a>
    </div>
	<div class="flex flex-col items-center mt-8">
		<img
        id="avatar"
        alt="" class="w-20 h-20 p-0.5 rounded-full bg-brand-black">
		<div >
			<h2 class="text-lg font-semibold text-center capitalize">
				{{ Auth::user()->name }}
			</h2>
            <h3 class="text-sm font-semibold text-center text-brand-gray">
                <a href="mailto:@gmail.com">
                    {{ Auth::user()->email }}
                </a>
            </h3>

		</div>
	</div>
	<div class="divide-y divide-gray-300">

		
		<ul class="pt-2 pb-4 space-y-1 text-sm">
			<li class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				<a rel="noopener noreferrer" href="{{url('/dashboard')}}" class="flex items-center p-2 space-x-3 rounded-md">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current duration-300 transition-colors text-brand-black group-hover:text-white">
						<path d="M68.983,382.642l171.35,98.928a32.082,32.082,0,0,0,32,0l171.352-98.929a32.093,32.093,0,0,0,16-27.713V157.071a32.092,32.092,0,0,0-16-27.713L272.334,30.429a32.086,32.086,0,0,0-32,0L68.983,129.358a32.09,32.09,0,0,0-16,27.713V354.929A32.09,32.09,0,0,0,68.983,382.642ZM272.333,67.38l155.351,89.691V334.449L272.333,246.642ZM256.282,274.327l157.155,88.828-157.1,90.7L99.179,363.125ZM84.983,157.071,240.333,67.38v179.2L84.983,334.39Z"></path>
					</svg>
					<span>Tableau de bord</span>
				</a>
			</li>

			
			<li class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				<a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 duration-300 transition-colors text-brand-black group-hover:text-white">
						<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
					  </svg>
					  
					<span>Utilisateurs </span>
				</a>
			</li>
			<li class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				<a rel="noopener noreferrer" href="{{url('/Ajouter_Articles')}}" class="flex items-center p-2 space-x-3 rounded-md">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
					  </svg>
					<span>Ecrire un article</span>
				</a>
			</li>

			<li class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				<a rel="noopener noreferrer" href="{{url('/Listes_des_articles')}}" class="flex items-center p-2 space-x-3 rounded-md">

					  
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 duration-300 transition-colors text-brand-black group-hover:text-white">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
					  </svg>
					  
					  
					<span>Listes Articles </span>
				</a>
			</li>

			
			<li class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				<a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">

					  
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-5 h-5 duration-300 transition-colors text-brand-black group-hover:text-white">
				<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
			  </svg>
					  
					  
					<span>Commentaires</span>
				</a>
			</li>


			  
			  

		</ul>
		<ul class="pt-4 pb-2  text-sm">
				<form method="POST" action="{{ route('logout') }}" class="rounded group text-brand-black hover:text-white hover:bg-brand-black transition-colors duration-300">
				

						
							@csrf
							<x-nav-link :href="route('logout')"
									onclick="event.preventDefault();
												this.closest('form').submit();">
											<span class="flex items-center p-2 space-x-3 rounded-md">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current duration-300 transition-colors text-brand-black group-hover:text-white">
													<path d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z"></path>
													<rect width="32" height="64" x="256" y="232"></rect>
												</svg>
												<div class="ml-3">
													
													{{ __('Déconnexion') }}
												</div>
											</span>	

							</x-nav-link>
						</form>

		</ul>
	</div>
</div>



    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">
					{{-- {{ Auth::user()->name }}--}}
					USERNAME 
				</div>
                <div class="font-medium text-sm text-gray-500">{{--{{ Auth::user()->email }} --}} User email</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


<script>
    const random = Math.floor(Math.random() * 1000);
    const seed = random.toString();
    const url = `https://api.dicebear.com/5.x/lorelei-neutral/svg?seed=${seed}`;
    const img = document.querySelector('#avatar');

    img.setAttribute('src', url);
</script>
