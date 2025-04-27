@extends('layouts.admin')

@php($useRepeater = true)

@section('title', 'Ajouter un niveau de maturité')

@section('description', '')

@section('actions')
    <x-admin.primary-link href="{{ route('animaux.show', ['animaux' => $animaux]) }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('animaux.niveau-maturite.store', ['animaux' => $animaux]) }}" method="POST">
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


         @include('admin.animal.niveau_maturite._partials.form')


        <div class="col-12">
            <x-admin.primary-button>Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
