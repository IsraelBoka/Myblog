<x-guest-layout>
    <x-auth-card>

        <div className="flex flex-col items-start justify-start">
                
              <a href={{url('/')}}>
                <img src="/logo-black.png" class="mb-1 h-20 w-20"  alt="logo orientation.com" srcset="">
              </a>
            <h2 class="mt-8 text-lg font-semibold text-gray-900">
                Se connecter à votre compte
            </h2>
            <p class="mt-2 text-sm text-gray-700">
                Ou <a href="{{ route('register') }}" class="font-medium underline text-gray-600 hover:text-gray-900">
                    créer un compte
                </a>
                
            </p>
          </div>
          <div class="mt-10">
            <div class="mt-6">
                
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" class="space-y-7" action="{{ route('login') }}">
                    @csrf
        
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" class="mb-3 block text-sm font-medium text-gray-700" :value="__('Email')" />
        
                        <x-input id="email" class="block w-full  caret-brand-black appearance-none rounded-md border border-gray-200 bg-gray-50 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-gray-500 focus:bg-white focus:outline-none focus:ring-gray-500 sm:text-sm" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" class="mb-3 block text-sm font-medium text-gray-700" :value="__('Password')" />
        
                        <x-input id="password" class="block w-full  caret-brand-black appearance-none rounded-md border border-gray-200 bg-gray-50 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-gray-500 focus:bg-white focus:outline-none focus:ring-gray-500 sm:text-sm"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
                    
                    
                <x-button
                  type="submit"
                  class="w-full rounded-full group border border-transparent bg-brand-black py-2 px-4 text-base font-semibold text-white shadow-sm  focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                >
                  
                {{ __('Se connecter') }} <span class="opacity-0 transition-[opacity,transform] duration-300 ease-in-out -translate-x-full group-hover:opacity-100 group-hover:translate-x-0 inline-flex ">&rarr;</span>
                </x-button>

                
        
                </form>
                
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-brand-black shadow-sm focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-brand-black">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>
                    
                <div class="flex items-center justify-center mt-2">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif
                </div>
        
            </div>
          </div>


    </x-auth-card>
</x-guest-layout>
