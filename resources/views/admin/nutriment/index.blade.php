@extends('layouts.admin')

@section('title', 'Tous vos nutriments')
@section('description', 'Visualisez tous les nutriments disponibles que vous avez créées ')

@section('actions')
    <x-admin.primary-link href="{{ route('nutriments.create') }}">Ajouter</x-admin.primary-link>
@endsection

@section('content')

    <x-admin.table>

        <x-slot:thead>
            <x-admin.table.th>#</x-admin.table.th>
            <x-admin.table.th>Titre</x-admin.table.th>
            <x-admin.table.th>Description</x-admin.table.th>
            <x-admin.table.th>...</x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $races = \App\Models\Race::paginate(10);
            @endphp

            @foreach ($nutriments as $key => $nutriment)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $nutriments->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $nutriment->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $nutriment->desc }} </x-admin.table.td>
                    <x-admin.table.td>

                    </x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
