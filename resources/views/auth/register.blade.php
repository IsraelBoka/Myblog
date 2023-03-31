<x-guest-layout>
    <x-auth-card>

        <div className="flex flex-col items-start justify-start">
                
              <a href={{url('/')}}>
                <img src="/logo-black.png" class="mb-1 h-20 w-20"  alt="logo orientation.com" srcset="">
              </a>
            <h2 class="mt-8 text-lg font-semibold text-gray-900">
                Créer un compte
            </h2>
            <p class="mt-2 text-sm text-gray-700">
                Ou <a href="{{ route('login') }}" class="font-medium underline text-gray-600 hover:text-gray-900">
                    se connecter
                </a>
                
            </p>
          </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="mt-8">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex flex-col-reverse gap-2 items-center justify-end mt-8">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déja enregistré?') }}
                </a>

                <x-button class="w-full rounded-full group border border-transparent bg-brand-black py-2 px-4 text-base font-semibold text-white shadow-sm  focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" >
                    {{ __("S'enregistrer") }} <span class="opacity-0 transition-[opacity,transform] duration-300 ease-in-out -translate-x-full group-hover:opacity-100 group-hover:translate-x-0 inline-flex ">&rarr;</span>
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
