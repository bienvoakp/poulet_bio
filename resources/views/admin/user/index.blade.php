@extends('layouts.admin')

@section('title')
    Les utilisateurs
@endsection

@section('actions')
    <x-admin.primary-link href="{{ route('users.create') }}">Ajouter</x-admin.primary-link>
@endsection

@section('content')
    <x-admin.table>

        <x-slot:thead>
            <x-admin.table.th>#</x-admin.table.th>
            <x-admin.table.th>Titre</x-admin.table.th>
            <x-admin.table.th>Email</x-admin.table.th>
            <x-admin.table.th>Statut</x-admin.table.th>
            <x-admin.table.th class="text-center"></x-admin.table.th>
            <x-admin.table.th class="text-center"><em class="icon ni ni-more-h"></em></x-admin.table.th>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $users = \App\Models\user::paginate(10);
            @endphp

            @foreach ($users as $key => $user)
                <x-admin.table.tr>
                    <x-admin.table.td> {{ $users->firstItem() + $key }} </x-admin.table.td>
                    <x-admin.table.td> {{ $user->name }} </x-admin.table.td>
                    <x-admin.table.td> {{ $user->email }} </x-admin.table.td>
                    <x-admin.table.td> {{ $user->statut }} </x-admin.table.td>
                    <x-admin.table.td-action class="text-center">
                        @if ($user->email_verified_at)
                            {{ 'Vérifié le ' .  \Carbon\Carbon::parse($user->email_verified_at)->locale('fr')->isoFormat('dddd D MMMM YYYY') . ' à ' . $user->email_verified_at->format('H:i') }}
                        @else
                            {{ 'Non vérifié' }}
                        @endif
                    </x-admin.table.td-action>


                    <x-admin.table.td-action class="text-center">
                        <div class="dropdown">
                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">

                                <ul class="link-list-plain">

                                    <li><a href="{{ route('users.edit', $user->id) }}" class="text-secondary d-flex justify-content-center"><i class="fas fa-marker"></i></a></li>

                                    <li><a href="{{ route('users.show', $user->id) }}" class="text-info d-flex justify-content-center"><i class="fas fa-eye"></i></a></li>

                                    <li><a href="{{ route('users.destroy', $user->id) }}" class="text-danger d-flex justify-content-center" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) document.getElementById('delete-user-{{ $user->id }}').submit();"><i class="fas fa-trash"></i></a></li>
                                    <form id="delete-user-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
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
