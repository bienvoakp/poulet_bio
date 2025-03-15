@extends('layouts.admin')

@section('title', 'Créer un aliment')
@section('description', 'Ajouter un aliment à votre ration ')

@section('actions')
    <a class="btn btn-primary" href="{{ route('aliments.index') }}">Retour</a>
@endsection

@section('content')

    <form action="" method="POST">
        @csrf
        <div class="row gy-4">
            <x-admin.form-input-row label="Nom de l'aliment" required placeholder="Le nom de l'aliment" name="titre" />
            <x-admin.form-input-row label="Energie fournie (/g) d'aliment" required
                placeholder="Energie fournie par gramme d'aliment" name="energie" />
            <x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Le nom de l'aliment"
                name="desc" />
            <x-admin.form-checkbox-row label="Disponible ?" required type='checkbox' name="titre" />
        </div>
    </form>

@endsection
