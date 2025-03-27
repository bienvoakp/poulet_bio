@extends('layouts.admin')

@section('title', 'Modifier un nutriment')
@section('description', 'Dans cette page, vous pouvez modifier un nutriment')

@section('actions')
    <x-admin.primary-link href="{{ route('nutriments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('nutriments.update', $nutriment->id) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        @include('admin.nutriment._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Modifier</x-admin.primary-button>
        </div>
    </form>

@endsection
