@extends('layouts.admin')

@section('title', 'Créer un aliment')
@section('description', 'Ajouter un aliment à votre ration ')

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('aliments.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {{-- @include('admin.aliment._partials.form') --}}

        @php
            $titre = !empty($aliment) ? $aliment->titre : null;
            $energie = !empty($aliment) ? $aliment->energie : null;
            $desc = !empty($aliment) ? $aliment->desc : null;
        @endphp


        <x-admin.form-input-row label="Nom de l'aliment" required placeholder="Le nom de l'aliment" inputName="titre"
            :defaultValue="$titre" />

        <x-admin.form-input-row label="Energie fournie (/g) d'aliment" required
            placeholder="Energie fournie par gramme d'aliment" inputName="energie" :defaultValue="$energie" />


        <x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Le nom de l'aliment"
        inputName="desc" :defaultValue="$desc" />

        <x-admin.form-checkbox-row label="Disponible ?" inputName="disponible" value="1" :checked="old('disponible', $aliment->disponible ?? false) == true" />


        <div class="col-12">
            <x-admin.primary-button>Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
