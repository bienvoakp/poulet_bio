@extends('layouts.admin')

@section('title')
    Détails de l'aliment <q>{{ $aliment->titre }}</q>
@endsection

@section('description')
        <p class="lead">Toutes les informations sur {{ $aliment->titre }}</p>
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.index') }}">
        <i class="bi bi-arrow-left"></i> Retour
    </x-admin.primary-link>

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
                        @if ($aliment->image)
                            <div class="text-center mb-4">
                                <img src="{{ asset('storage/' . $aliment->image) }}"
                                     alt="{{ $aliment->titre }}"
                                     class="img-fluid rounded shadow"
                                     style="max-height: 300px;">
                            </div>
                        @endif

                        <dl class="row g-3">
                            <dt class="col-sm-4 text-muted">Nom :</dt>
                            <dd class="col-sm-8 fw-bold">{{ $aliment->titre }}</dd>

                            <dt class="col-sm-4 text-muted">Energie fournie (/g) d'aliment  :</dt>
                            <dd class="col-sm-8">{{ $aliment->energie }}</dd>

                            @if ($aliment->desc)
                                <dt class="col-sm-4 text-muted">Description :</dt>
                                <dd class="col-sm-8">{{ $aliment->desc }}</dd>
                            @endif

                            <dt class="col-sm-4 text-muted">Disponible ? :</dt>
                            <dd class="col-sm-8 fw-bold">{{ $aliment->disponible ? 'Oui' : 'Non' }}</dd>

                            <dt class="col-sm-4 text-muted">Date de création :</dt>
                            <dd class="col-sm-8">
                                {{ \Carbon\Carbon::parse($aliment->created_at)->locale('fr')->isoFormat('dddd D MMMM YYYY à H:mm') }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
