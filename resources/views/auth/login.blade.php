@extends('layouts.auth')

@section('title', 'Connexion')
@section('description', 'Connectez-vous pour accéder à votre espace administrateur')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="row gy-3" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <x-admin.form-input-row
            class="col-12"
            type="email"
            label="Adresse email"
            placeholder="exemple@email.com"
            inputName="email"
            required
            autofocus
            autocomplete="email"
        />

        <!-- Password -->
        <x-admin.form-input-row
            class="col-12"
            type="password"
            label="Mot de passe"
            placeholder="Votre mot de passe sécurisé"
            inputName="password"
            required
            autocomplete="current-password"
        />

        <!-- Remember Me -->
        <x-admin.form-checkbox-row
            class="col-12"
            label="Garder ma session active"
            inputName="remember"
        />

        <div class="mt-2">
            <x-admin.primary-button class="btn-lg d-block w-100 mb-4">
                {{ __('Connexion') }}
            </x-admin.primary-button>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <span class="text-muted">
                        {{ __('Mot de passe oublié ?') }}
                        <a href="{{ route('password.request') }}" class="text-primary">
                            {{ __('Cliquez ici pour le réinitialiser') }}
                        </a>
                    </span>
                </div>
            @endif
        </div>
    </form>

    <div class="text-center mt-4">
        <p class="text-muted">
            {{ __('Vous n\'avez pas de compte ?') }}
            <a href="{{ route('register') }}" class="text-primary">
                {{ __('Inscrivez-vous') }}
            </a>
        </p>
    </div>
@endsection
