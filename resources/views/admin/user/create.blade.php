@extends('layouts.admin')


@section('title')
Ajouter un utilisateur
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('users.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')
<form class="row gy-4" action="{{ route('users.store') }}" method="POST">
    @csrf

    {{-- @dump($errors->all()) --}}

    @include('admin.user._partials.form')

    <div class="col-12">
        <x-admin.primary-button>Enregistrer</x-admin.primary-button>
    </div>
</form>
@endsection
