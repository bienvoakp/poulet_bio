@php
    $titre = !empty($animal) ? $animal->titre : null;
    $desc = !empty($animal) ? $animal->desc : null;
    $races = \App\Models\Race::all();
    // $nutriments = \App\Models\Nutriment::all();
@endphp

<x-admin.form-select-row label="Race de l'animal" placeholder="Selectionner la race de l'animal" required inputName="race_id"
        :options="$races->mapWithKeys(fn($race) => [$race->id => $race->titre])" />

<x-admin.form-input-row label="Nom de l'animal" required placeholder="Le nom de l'animal" inputName="titre"
    :defaultValue="$titre" />

{{-- <x-admin.form-select-row label="race" class="col-lg-6" placeholder="Selectionner la race de l'animal" required
    inputName="race" :options="\App\Models\Race::pluck('titre', 'titre')->toArray()" :defaultValue="$race"/> --}}


<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Le nom de l'animal" inputName="desc"
    :defaultValue="$desc" />

<x-admin.form-checkbox-row label="Disponible ?" inputName="disponible" value="1" :checked="old('disponible', $animal->disponible ?? false) == true" />

{{-- @dump(old()) --}}

@livewire('composition-aliment-repeater', [
    'aliment' => isset($aliment) ? $aliment : null,
])

@section('script')
    <script>
        $repeater.setList(@json(old('composition_nutritive_aliments')));
    </script>
@endsection
