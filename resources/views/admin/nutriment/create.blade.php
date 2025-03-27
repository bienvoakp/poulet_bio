@extends('layouts.admin')

@section('title', 'Créer un nutriment')
@section('description', 'Cette interface vous permet d\'ajouter un nouveau nutriment')

@section('actions')
    <x-admin.primary-link href="{{ route('nutriments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('nutriments.store') }}" method="POST">
        @csrf

        @include('admin.nutriment._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
