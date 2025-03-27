@extends('layouts.admin')

@section('actions')
<a class="btn btn-primary" href="{{ route('admin.utilisateurs.edit',['user' => $user->uuid]) }}">Modifier</a>
<a class="btn btn-white shadow-sm" href="{{ route('admin.utilisateurs.index') }}">Retour</a>
@endsection

@section('title')
L'utilisateur <q>{{ $user->name }}</q>
@endsection

@section('navigation')
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.index') }}">Acceuil</a></li>
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.roles.index') }}">Utilisateurs</a></li>
<li class="breadcrumb-item active" aria-current="page"> {{ $user->name }} </li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-header-title"> {{ $user->name }} </h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <span class="fw-bold text-dark">Nom de l'utilisateur</span>
                <div
                    class="border-dashed border-show-box shadow-sm form-control form-control-hover-light form-control-lg mt-2 mb-3">
                    {{ $user->name }}
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <span class="fw-bold text-dark">Adresse email</span>
                <div
                    class="border-dashed border-show-box shadow-sm form-control form-control-hover-light form-control-lg mt-2 mb-3">
                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <span class="fw-bold text-dark">Rôles</span>
                <div
                    class="border-dashed border-show-box shadow-sm form-control form-control-hover-light form-control-lg mt-2 mb-3">
                    @foreach ($user->roles as $role)
                    <a data-bs-toggle="tooltip" target="_blank" data-bs-html="true"
                        title="Cliquer pour <br> plus de détails"
                        href="{{ route('admin.roles.show',['role' => $role->uuid]) }}">
                        <h4 class="d-inline-block mb-0">
                            <span class="badge shadow-sm border-primary border bg-light text-primary">
                                <i class="bi bi-tags-fill"></i> {{ $role->display_name }}
                            </span>
                        </h4>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <span class="fw-bold text-dark">Statut ?</span>
                <div
                    class="border-dashed border-show-box shadow-sm form-control form-control-hover-light form-control-lg mt-2 mb-3">
                    @if ($user->email_verified_at)
                    <span class="legend-indicator bg-success"></span> Actif
                    <small class="fw-bold">(le {{ format_date($user->email_verified_at) }})</small>
                    @else
                    <span class="legend-indicator bg-danger"></span> Inactif
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <span class="fw-bold text-dark">
                    Première connexion ?
                    <i data-bs-toggle="tooltip" title="Si éffective, l'utilisateur aura donc déjà changer le mot de passe par défaut qui lui à été attribué" class="bi-info-circle-fill text-muted"></i>
                </span>
                <div
                    class="border-dashed border-show-box shadow-sm form-control form-control-hover-light form-control-lg mt-2 mb-3">
                    @if (!$user->is_on_first_login)
                    <span class="legend-indicator bg-success"></span> Effectué
                    @else
                    <span class="legend-indicator bg-warning"></span> En attente
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@include('admin._partials.audit_info', ['model' => $user])
@endsection
