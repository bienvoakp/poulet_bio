@extends('layouts.admin')

@section('title', 'Créer un aliment')
@section('description', 'Ajouter un aliment à votre ration ')

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('aliments.store') }}" method="POST">
        @csrf

        @include('admin.aliment._partials.form')

        <div class="col-12">
            <x-admin.primary-button href="{{ route('aliments.index') }}">Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
