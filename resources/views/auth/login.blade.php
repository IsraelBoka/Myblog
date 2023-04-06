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
                Ou <a href="{{ route('register') }}" class="font-medium underline text-blue-600 hover:text-blue-900">
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
        
                        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" class="mb-3 block text-sm font-medium text-gray-900" :value="__('Mot de passe')" />
        
                        <x-input id="password" class=""
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
                    
                    
                <x-button
                  type="submit"
                >
                  
                {{ __('Se connecter') }}
                </x-button>

                
        
                </form>
                
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" class="rounded-sm" type="checkbox"  name="remember">
                            <span class="ml-2 text-sm text-brand-black">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>
                    
                <div class="flex items-center justify-center mt-2">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif
                </div>
        
            </div>
          </div>


    </x-auth-card>
</x-guest-layout>
