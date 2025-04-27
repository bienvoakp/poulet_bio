@extends('layouts.admin')

@section('title')
    Détails de l'animal <q> {{ $animal->titre }} </q>
@endsection
@section('description')

@section('actions')
    <x-admin.primary-link href="{{ route('animaux.index') }}">Retour</x-admin.primary-link>
    <x-admin.info-link href="{{ route('animaux.niveau-maturite.create', ['animaux' => $animal->id]) }}">Ajouter un niveau
        de maturité</x-admin.info-link>
@endsection

@section('content')

@endsection
