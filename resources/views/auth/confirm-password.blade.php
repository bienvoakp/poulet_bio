@extends('layouts.auth')

@section('title', 'Confirmez votre mot de passe ')

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-admin.primary-button>
                {{ __('Confirm') }}
            </x-admin.primary-button>
        </div>
    </form>
@endsection
