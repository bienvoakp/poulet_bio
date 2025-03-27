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
            <x-admin.table.th>...</x-admin.table.th>
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
                    <x-admin.table.td>
                        <td class="tb-odr-action">

                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('races.edit', $race->id) }}" class="text-primary d-flex justify-content-center"><i class="fas fa-marker"></i></a></li>

                                        <li><a href="{{ route('races.show', $race->id) }}" class="text-primary d-flex justify-content-center"><i class="fas fa-eye"></i></a></li>

                                        <li><a href="{{ route('races.destroy', $race->id) }}" class="text-danger d-flex justify-content-center" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette race ?')) document.getElementById('delete-race-{{ $race->id }}').submit();"><i class="fas fa-trash"></i></a></li>
                                        <form id="delete-race-{{ $race->id }}" action="{{ route('races.destroy', $race->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>

@endsection
