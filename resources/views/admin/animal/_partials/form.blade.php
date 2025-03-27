@php
    $titre = !empty($animal) ? $animal->titre : null;
    $desc = !empty($animal) ? $animal->desc : null;
    $races = \App\Models\Race::all();
@endphp

<x-admin.form-select-row label="Race de l'animal" placeholder="Selectionner la race de l'animal" required inputName="race_id"
        :options="$races->mapWithKeys(fn($race) => [$race->id => $race->titre])" />

<x-admin.form-input-row label="Nom de l'animal" required placeholder="Le nom de l'animal" inputName="titre" :defaultValue="$titre" />

<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Description de l'animal" inputName="desc" :defaultValue="$desc" />


