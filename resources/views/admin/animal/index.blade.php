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
            <x-admin.table.th>...</x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $animaux = \App\Models\Animal::paginate(10);
            @endphp

            @foreach ($animaux as $key => $animal)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $animaux->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $animal->titre }} </x-admin.table.td>
                    <x-admin.table.td>
                        @if ($animal->race)
                            {{ $animal->race->titre }}
                        @else
                            Aucune race associée à cet animal
                        @endif
                    </x-admin.table.td>
                    <x-admin.table.td>
                        <td class="tb-odr-action">
                            <div class="tb-odr-btns d-none d-md-inline">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                            </div>
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                    <ul class="link-list-plain">
                                        <li><a href="#" class="text-primary">Edit</a></li>
                                        <li><a href="#" class="text-primary">View</a></li>
                                        <li><a href="#" class="text-danger">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>

                    </x-admin.table.td>
                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>
    </x-admin.table>

    @if ($animaux->links()->paginator->hasPages())
    <div class="card-footer pb-1">
        {{ $animaux->links() }}
    </div>
    @endif
</div>

@endsection
