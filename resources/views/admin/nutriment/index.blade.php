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
            <x-admin.table.th class="text-center"><em class="icon ni ni-more-h"></em></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $nutriments = \App\Models\nutriment::paginate(10);
            @endphp

            @foreach ($nutriments as $key => $nutriment)
            <x-admin.table.tr>
                <x-admin.table.td> {{ $nutriments->firstItem() + $key }} </x-admin.table.td>
                <x-admin.table.td> {{ $nutriment->titre }} </x-admin.table.td>
                <x-admin.table.td> {{ $nutriment->desc }} </x-admin.table.td>
                <x-admin.table.td-action class="text-center">
                        <div class="dropdown">
                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">

                                <ul class="link-list-plain">

                                    <li><a href="{{ route('nutriments.edit', $nutriment->id) }}" class="text-secondary d-flex justify-content-center"><i class="fas fa-marker"></i></a></li>

                                    <li><a href="{{ route('nutriments.show', $nutriment->id) }}" class="text-info d-flex justify-content-center"><i class="fas fa-eye"></i></a></li>

                                    <li><a href="{{ route('nutriments.destroy', $nutriment->id) }}" class="text-danger d-flex justify-content-center" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce nutriment ?')) document.getElementById('delete-nutriment-{{ $nutriment->id }}').submit();"><i class="fas fa-trash"></i></a></li>
                                    <form id="delete-nutriment-{{ $nutriment->id }}" action="{{ route('nutriments.destroy', $nutriment->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </ul>
                            </div>
                        </div>
                </x-admin.table.td-action>
            </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
