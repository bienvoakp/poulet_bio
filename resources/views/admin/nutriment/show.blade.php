@extends('layouts.admin')

@section('title')
    Détails du nutriment <q>{{ $nutriment->titre }}</q>
@endsection

@section('description')
        <p class="lead">Toutes les informations sur {{ $nutriment->titre }}</p>
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('nutriments.index') }}">
        <i class="bi bi-arrow-left"></i> Retour
    </x-admin.primary-link>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Informations principales
                        </h5>
                    </div>

                    <div class="card-body">


                        <dl class="row g-3">
                            <dt class="col-sm-4 text-muted">Nom :</dt>
                            <dd class="col-sm-8 fw-bold">{{ $nutriment->titre }}</dd>

                           

                            @if ($nutriment->desc)
                                <dt class="col-sm-4 text-muted">Description :</dt>
                                <dd class="col-sm-8">{{ $nutriment->desc }}</dd>
                            @endif

                            <dt class="col-sm-4 text-muted">Disponible ? :</dt>
                            <dd class="col-sm-8 fw-bold">{{ $nutriment->disponible ? 'Oui' : 'Non' }}</dd>

                            <dt class="col-sm-4 text-muted">Date de création :</dt>
                            <dd class="col-sm-8">
                                {{ \Carbon\Carbon::parse($nutriment->created_at)->locale('fr')->isoFormat('dddd D MMMM YYYY à H:mm') }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
