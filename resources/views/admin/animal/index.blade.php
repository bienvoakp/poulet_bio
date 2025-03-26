@extends('layouts.admin')

@section('title', 'Tous les animaux')
@section('description', 'Liste de tous les animaux ajoutés ')

@section('actions')
    <x-admin.primary-link href="{{ route('animaux.create') }}">Ajouter</x-admin.primary-link>
@endsection

@section('content')

    {{-- <x-admin.form-select-row label="Les aliments ?" placeholder="Selectionner un aliment" required name="titre"
        :options="$aliments->mapWithKeys(fn($a) => [$a->id => $a->titre])" />
     --}}

     <x-admin.table>

        <x-slot:thead>
            <x-admin.table.th>#</x-admin.table.th>
            <x-admin.table.th>Titre</x-admin.table.th>
            <x-admin.table.th>Race</x-admin.table.th>
            <x-admin.table.th></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $animaux = \App\Models\Animal::paginate(10);
            @endphp

            @foreach ($animaux as $key => $animal)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $animaux->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $animal->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $animal->race->titre }} </x-admin.table.td>
                    <x-admin.table.td>..</x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
