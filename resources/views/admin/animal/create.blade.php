@extends('layouts.admin')

@section('title', 'Ajouter un nouvel animal')
@section('description', 'Dans cette page, vous pouvez ajouter vos animaux')

@section('actions')
    <x-admin.primary-link href="{{ route('animaux.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('animaux.store') }}" method="POST">
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

        @include('admin.animal._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Enregistrer</x-admin.primary-button>
        </div>
    </form>

@endsection
