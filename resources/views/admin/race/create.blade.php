@extends('layouts.admin')

@section('title', 'Créer un race d\'animal')
@section('description', 'Cette interface vous permet d\'ajouter une nouvelle race')

@section('actions')
    <x-admin.primary-link href="{{ route('races.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('races.store') }}" method="POST">
        @csrf

        @include('admin.race._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
