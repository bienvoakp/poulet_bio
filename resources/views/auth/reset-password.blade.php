@extends('layouts.auth')

@section('title', 'Réinitialiser votre mot de passe')

@section('description', 'Définissez votre nouveau mot de passe')

@section('content')
<form method="POST" class="row gy-3" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <x-admin.form-input-row
        class="col-12"
        type="email"
        label="Adresse email"
        placeholder="exemple@email.com"
        inputName="email"
        :value="old('email', $request->email)"
        required
        autofocus
        autocomplete="username"
    />

    <!-- Password -->
    <x-admin.form-input-row
        class="col-12"
        type="password"
        label="Nouveau mot de passe"
        placeholder="Votre nouveau mot de passe sécurisé"
        inputName="password"
        required
        autocomplete="new-password"
    />

    <!-- Confirm Password -->
    <x-admin.form-input-row
        class="col-12"
        type="password"
        label="Confirmer le mot de passe"
        placeholder="Confirmez votre nouveau mot de passe"
        inputName="password_confirmation"
        required
        autocomplete="new-password"
    />

    <div class="mt-2">
        <x-admin.primary-button class="btn-lg d-block w-100">
            {{ __('Réinitialiser le mot de passe') }}
        </x-admin.primary-button>
    </div>
</form>

@endsection
