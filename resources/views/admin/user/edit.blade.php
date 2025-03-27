@extends('layouts.admin')

@php($useTogglePassword = true)
@php($useTomSelect = true)

@section('title')
Modifier l'utilisateur <q>{{ $user->name }}</q>
@endsection

@section('navigation')
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.index') }}">Accueil</a></li>
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.utilisateurs.index') }}">Utilisateurs</a>
</li>
<li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('admin.utilisateurs.show',['user' => $user->uuid]) }}">{{ $user->name }}</a></li>
<li class="breadcrumb-item active text-primary" aria-current="page">Modifier</li>
@endsection

@section('actions')
<a class="btn btn-primary" href="{{ route('admin.utilisateurs.show', ['user' => $user->uuid]) }}">Détails</a>
<a class="btn btn-white shadow-sm" href="{{ route('admin.utilisateurs.index') }}">Retour</a>
@endsection

@section('content')
<div class="card">
    <form action="{{ route('admin.utilisateurs.update',['user' => $user->uuid]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.user._partials.form')
    </form>
</div>
@endsection
