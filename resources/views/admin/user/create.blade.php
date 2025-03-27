@extends('layouts.admin')


@section('title')
Ajouter un utilisateur
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('utilisateurs.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')
<form class="row gy-4" action="{{ route('utilisateurs.store') }}" method="POST">
    @csrf

    @include('admin.user._partials.form')

    <div class="col-12">
        <x-admin.primary-button>Enregistrer</x-admin.primary-button>
    </div>
</form>
@endsection
