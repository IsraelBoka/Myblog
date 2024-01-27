<x-guest-layout>
    <x-auth-card>
                <x-application-logo />

        <div class="mb-4 text-base text-left  text-gray-600 py-12">
            
            {{-- 
                
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                
                translate in french --}}
            {{ __('Vous avez oublié votre mot de passe? Pas de problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation du mot de passe qui vous permettra d\'en choisir un nouveau.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="w-full rounded-full group border border-transparent bg-brand-black py-2 px-4 text-base font-semibold text-white shadow-sm  focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" >
                    {{-- 
                    {{ __('Email Password Reset Link') }}
                        
                        in french --}}
                    {{ __('Envoyer le lien') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
