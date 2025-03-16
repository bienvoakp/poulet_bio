@extends('layouts.auth')


@section('title', ' Connexion ')
@section('description', ' ..... ')

@section('content')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="row gy-2" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->

        <x-admin.form-input-row class="col-12" type="email" label="Mail" required placeholder="Entrez le mail"
            inputName="email" required autofocus autocomplete="email" />

        <!-- Password -->

        <x-admin.form-input-row class="col-12" type="password" label="Mot de Passe" required
            placeholder="Entrez votre mot de passe" inputName="password" required autofocus autocomplete="password" />

        <!-- Remember Me -->
        <x-admin.form-checkbox-row class="col-12" label="Se souvenir de moi" inputName="remember" />

        <div>


            <x-admin.primary-button class="d-block w-100 my-4">
                {{ __('Se connecter') }}
            </x-admin.primary-button>

            @if (Route::has('password.request'))
                <span>
                    {{ __("Vous avez oublié votre mot de passe ? ") }}

                    <a href="{{ route('password.request') }}">
                        {{ __('Réinitialisez-le ') }}
                    </a>
                </span>
            @endif
        </div>
    </form>


@endsection
