@extends('layouts.admin')

@section('title')
    Détails de l'animal <q>{{ $animal->titre }}</q>
@endsection

@section('description')
        <p class="lead">Toutes les informations sur {{ $animal->titre }}</p>
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('animaux.index') }}">
        <i class="bi bi-arrow-left"></i> Retour
    </x-admin.primary-link>
    <x-admin.info-link href="{{ route('animaux.niveau-maturite.create', ['animaux' => $animal->id]) }}">
        <i class="bi bi-plus-circle"></i> Niveau de maturité
    </x-admin.info-link>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Informations principales
                        </h5>
                    </div>

                    <div class="card-body">
                        @if ($animal->image)
                            <div class="text-center mb-4">
                                <img src="{{ asset('storage/' . $animal->image) }}"
                                     alt="{{ $animal->titre }}"
                                     class="img-fluid rounded shadow"
                                     style="max-height: 300px;">
                            </div>
                        @endif

                        <dl class="row g-3">
                            <dt class="col-sm-4 text-muted">Titre :</dt>
                            <dd class="col-sm-8 fw-bold">{{ $animal->titre }}</dd>

                            <dt class="col-sm-4 text-muted">Race :</dt>
                            <dd class="col-sm-8">{{ $animal->race->titre }}</dd>

                            <dt class="col-sm-4 text-muted">Date de création :</dt>
                            <dd class="col-sm-8">
                                {{ \Carbon\Carbon::parse($animal->created_at)->locale('fr')->isoFormat('dddd D MMMM YYYY à H:mm') }}
                            </dd>

                            @if ($animal->desc)
                                <dt class="col-sm-4 text-muted">Description :</dt>
                                <dd class="col-sm-8">{{ $animal->desc }}</dd>
                            @endif
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
