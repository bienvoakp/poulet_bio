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
            <x-admin.table.th>...</x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @foreach ($aliments as $key => $aliment)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $aliments->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->titre }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->energie_label() }} </x-admin.table.td>
                    <x-admin.table.td> {{ $aliment->is_disponible() }} </x-admin.table.td>
                    <x-admin.table.td>
                        <td class="tb-odr-action">
                            <div class="tb-odr-btns d-none d-md-inline">
                                <a href="#" class="btn btn-sm btn-primary">Voir</a>
                            </div>
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                    <ul class="link-list-plain">
                                        <li><a href="#" class="text-primary">Modifier</a></li>
                                        <li><a href="#" class="text-primary">Voir</a></li>
                                        <li><a href="#" class="text-danger">Supprimer</a></li>
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
