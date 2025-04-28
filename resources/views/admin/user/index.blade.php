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
            <x-admin.table.th>Description</x-admin.table.th>
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
                    <x-admin.table.td-action class="text-center">
                        @if ($user->email_verified_at)
                            {{ 'Vérifié le ' . \Carbon\Carbon::parse($user->email_verified_at)->locale('fr')->isoFormat('dddd D MMMM YYYY') . ' à ' . $user->email_verified_at->format('H:i') }}
                        @else
                            {{ 'Non vérifié' }}
                        @endif
                    </x-admin.table.td-action>


                </x-admin.table.tr>
            @endforeach
        </x-slot:tbody>

    </x-admin.table>
@endsection
