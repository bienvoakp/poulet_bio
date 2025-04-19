
@extends('layouts.auth')


@section('title', ' Inscription  ')
@section('description', ' Inscription  ')

@section('content')


<form class="row gy-2" method="POST" action="{{ route('register') }}">
        @csrf
    @dump($errors->all())
        <!-- Name -->
        <x-admin.form-input-row class="col-12" label="Nom" required placeholder="Le nom de l'aliment" inputName="name" required autofocus autocomplete="name" />



        <!-- Email Address -->
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <x-admin.form-input-row class="col-12" type="email" label="Mail" required placeholder="Entrez le mail" inputName="email" required autofocus autocomplete="email" />


        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <x-admin.form-input-row class="col-12" type="password" label="Mot de Passe" required placeholder="Entrez votre mot de passe" inputName="password" required autofocus autocomplete="password" />


        <!-- Confirm Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <x-admin.form-input-row class="col-12" type="password" label="Confirmez votre mot de passe" required placeholder="Entrez votre mot de passe" inputName="password_confirmation" required autofocus autocomplete="password_confirmation" />

        <div>


            <x-admin.primary-button class="d-block w-100 my-4">
                {{ __('S\'inscrire') }}
            </x-admin.primary-button>

            <span>
                {{ __("Nouveau sur l'application ? ") }}
                <a  href="{{ route('login') }}">
                    {{ __('Créez un compte') }}
                </a>
            </span>

        </div>
    </form>
@endsection
