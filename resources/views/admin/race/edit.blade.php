@extends('layouts.admin')

@section('title', 'Modifier une race')
@section('description', 'Dans cette page, vous pouvez modifier une race')

@section('actions')
    <x-admin.primary-link href="{{ route('races.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('races.update', $race->id) }}" method="POST">
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

        @include('admin.race._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Modifier</x-admin.primary-button>
        </div>
    </form>

@endsection
