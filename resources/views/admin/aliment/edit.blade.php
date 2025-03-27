@extends('layouts.admin')

@section('title', 'Modiier un aliment')
@section('description', 'Ajouter un aliment à votre ration ')

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form enctype="multipart/form-data" class="row gy-4"
        action="{{ route('aliments.update', ['aliment' => $aliment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.aliment._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Modifier</x-admin.primary-button>
        </div>
    </form>

@endsection
