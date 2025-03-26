@extends('layouts.admin')

@section('title', 'Toutes vos races')
@section('description', 'Visualisez toutes les races que vous avez créées ')

@section('actions')
    <x-admin.primary-link href="{{ route('races.create') }}">Ajouter</x-admin.primary-link>
@endsection

@section('content')

    <x-admin.table>

        <x-slot:thead>
            <x-admin.table.th>#</x-admin.table.th>
            <x-admin.table.th>Titre</x-admin.table.th>
            <x-admin.table.th>Description</x-admin.table.th>
            <x-admin.table.th></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $races = \App\Models\Race::paginate(10);
            @endphp

            @foreach ($races as $key => $race)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $races->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $race->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $race->desc }} </x-admin.table.td>
                    <x-admin.table.td>..</x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
