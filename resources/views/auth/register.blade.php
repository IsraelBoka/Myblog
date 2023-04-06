<x-guest-layout>
    <x-auth-card>

        <div className="flex flex-col items-center justify-center lg:items-start lg:justify-start">
            <div class="inline-flex justify-center items-center">
                
            <x-application-logo/>
            </div>
            <h2 class="mt-4 text-lg font-semibold text-gray-900">
                Créer un compte
            </h2>
            <p class="mt-2 text-sm text-gray-700">
                Ou <a href="{{ route('login') }}" class="font-medium underline text-blue-600 hover:text-blue-800 transition-colors ">
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
                <a class="underline text-sm text-blue-600 hover:text-blue-800 transition-colors" href="{{ route('login') }}">
                    {{ __('Déja enregistré?') }}
                </a>

                <x-button >
                    {{ __("S'enregistrer") }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
