@extends('layouts.admin')

@section('title', 'Tous les aliments')
@section('description', 'Liste de tous les aliments ajoutés ')

@section('actions')
    <x-admin.primary-link href="{{ route('aliments.create') }}">Ajouter</x-admin.primary-link>
@endsection

@section('content')

    {{-- <x-admin.form-select-row label="Les aliments ?" placeholder="Selectionner un aliment" required name="titre"
        :options="$aliments->mapWithKeys(fn($a) => [$a->id => $a->titre])" />
     --}}

     <x-admin.table>

        <x-slot:thead>
            <x-admin.table.th>#</x-admin.table.th>
            <x-admin.table.th>Titre</x-admin.table.th>
            <x-admin.table.th>Energie</x-admin.table.th>
            <x-admin.table.th>Disponible ?</x-admin.table.th>
            <x-admin.table.th></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @foreach ($aliments as $key => $aliment)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $aliments->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->energie_label() }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->is_disponible() }} </x-admin.table.td>
                    <x-admin.table.td>..</x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
