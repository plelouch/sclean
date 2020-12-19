<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nom') }}" />
                <x-jet-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Prenom') }}" />
                <x-jet-input id="prenoms" class="block mt-1 w-full" type="text" name="prenoms" :value="old('prenoms')" required />
            </div>

            <div>
                <x-jet-label for="login" value="{{ __('Nom utilisateur') }}" />
                <x-jet-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="login" />
            </div>

            <div class="mt-4">
                <x-jet-label for="contact" value="{{ __('Contact') }}" />
                <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="categ" value="{{ __('Type') }}" />
                <select id="categ" name="categ" required
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Sélectionnez Le Type</option>
                    <option value="Admin">Administrateur</option>
                    <option value="User">Utilisateur</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
