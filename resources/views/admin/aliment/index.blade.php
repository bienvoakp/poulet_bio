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
            <x-admin.table.th class="text-center"><em class="icon ni ni-more-h"></em></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @foreach ($aliments as $key => $aliment)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $aliments->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->energie_label() }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->is_disponible() }} </x-admin.table.td>
                    <x-admin.table.td-action class="text-center">


                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('aliments.edit', $aliment->id) }}" class="text-primary d-flex justify-content-center"><i class="fas fa-marker"></i></a></li>

                                        <li><a href="{{ route('aliments.show', $aliment->id) }}" class="text-primary d-flex justify-content-center"><i class="fas fa-eye"></i></a></li>

                                        <li><a href="{{ route('aliments.destroy', $aliment->id) }}" class="text-danger d-flex justify-content-center" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette aliment ?')) document.getElementById('delete-aliment-{{ $aliment->id }}').submit();"><i class="fas fa-trash"></i></a></li>
                                        <form id="delete-aliment-{{ $aliment->id }}" action="{{ route('aliments.destroy', $aliment->id) }}" method="POST" style="display: none;">
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
