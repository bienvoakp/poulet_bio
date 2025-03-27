@extends('layouts.admin')

@php($useBooleanChecker = true)

@section('title')
Les utilisateurs
@endsection

@section('navigation')
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.index') }}">Accueil</a></li>
<li class="breadcrumb-item active text-primary" aria-current="page">Utilisateurs</li>
@endsection

@section('actions')
<a class="btn btn-primary" href="{{ route('admin.utilisateurs.create') }}">Ajouter</a>
@endsection

@section('content')
<div class="card" id="table_wrapper">
    <div class="card-header card-header-content-md-between">
        <div class="d-none d-md-flex gap-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header-title">Utilisateurs</h5>
            </div>
        </div>
        <div class="mb-2 mb-md-0">
            <form method="GET">
                <div class="input-group input-group-merge input-group-flush">
                    <button role="button" data-bs-toggle="tooltip" title="Filtre avancé" type="button" class="input-group-prepend input-group-text">
                        <i class="bi-funnel"></i>
                    </button>
                    <input name="recherche" type="search" class="form-control" placeholder="Rechercher un utilisateur"
                        value="{{ request('recherche') }}" aria-label="Recherche de rôles">
                    <button role="button" type="submit" class="input-group-append input-group-text">
                        <i class="bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive datatable-custom">
        <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
            <thead class="thead-light">
                <tr>
                    <th>Nom de l'utilisateur</th>
                    <th>Email</th>
                    <th style="width: 2rem">Statut</th>
                    <th class="text-center" style="width: 2rem">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td style="width: 2rem">{{ $user->name }}</td>
                    <td><a target="_blank" href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    <td>
                        <x-admin.boolean-checker-input
                            :url="route('admin.utilisateurs.toggle-status')"
                            :uid="$user->uuid"
                            :checked="$user->email_verified_at != null"
                            check-label="Actif"
                            uncheck-label="Inactif"
                        />
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="{{ route('admin.utilisateurs.edit', $user->uuid) }}"
                                title="Modifier">
                                <i class="bi-pen"></i> <span class="ms-1">Modifier</span>
                            </a>
                            <a class="btn btn-white btn-sm btn-icon" title="Détails" data-bs-toggle="tooltip"
                                href="{{ route('admin.utilisateurs.show', $user->uuid) }}"> <i class="bi bi-list"></i></a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="4">Aucune donnée</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($users->links()->paginator->hasPages())
    <div class="card-footer pb-1">
        {{ $users->links() }}
    </div>
    @endif
</div>
@endsection
