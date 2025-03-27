@extends('layouts.admin')

@section('title', 'Modifier un aliment')
@section('description', 'Dans cette page, vous pouvez modifier un aliment')

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.index') }}">Retour</x-admin.primary-link>
@endsection

@section('content')

    <form class="row gy-4" action="{{ route('aliments.update', $aliment->id) }}" method="POST">
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

        @include('admin.aliment._partials.form')

        <div class="col-12">
            <x-admin.primary-button>Modifier</x-admin.primary-button>
        </div>
    </form>

@endsection
