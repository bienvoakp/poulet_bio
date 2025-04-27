@php
    $isNiveauMaturiteNotEmpty = !empty($niveau_maturite);
    $titre = $isNiveauMaturiteNotEmpty ? $niveau_maturite->titre : null;
    $energie = $isNiveauMaturiteNotEmpty ? $niveau_maturite->energie : null;
    $poids_max = $isNiveauMaturiteNotEmpty ? $niveau_maturite->poids_max : null;
    $poids_min = $isNiveauMaturiteNotEmpty ? $niveau_maturite->poids_min : null;
    $age_min = $isNiveauMaturiteNotEmpty ? $niveau_maturite->age_min : null;
    $age_max = $isNiveauMaturiteNotEmpty ? $niveau_maturite->age_max : null;
    $desc = $isNiveauMaturiteNotEmpty ? $niveau_maturite->desc : null;
    // $nutriments = \App\Models\Nutriment::all();
@endphp

<x-admin.form-input-row label="Titre du niveau de maturité" required placeholder="Niveau de maturité" inputName="titre"
    :defaultValue="$titre" />

<x-admin.form-input-row label="Energie fournie (/g)" required placeholder="Energie fournie par gramme d'aliment"
    inputName="energie" :defaultValue="$energie" />

<x-admin.form-input-row label="Poids Min" required placeholder="Le poids minimum de l'animal" inputName="poids_min"
    :defaultValue="$poids_min" />

<x-admin.form-input-row label="Poids Max" required placeholder="Le poids maximum de l'animal" inputName="poids_max"
    :defaultValue="$poids_max" />

<x-admin.form-input-row label="Age Min" required placeholder="L'âge minimum de l'animal" inputName="age_min"
    :defaultValue="$age_min" />

<x-admin.form-input-row label="Age Max" required placeholder="L'âge maximum de l'animal" inputName="age_max"
    :defaultValue="$age_max" />

<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Petite description du niveau de maturite"
    inputName="desc" :defaultValue="$desc" />

<x-admin.form-checkbox-row label="Disponible ?" inputName="disponible" value="1" :checked="old('disponible', $aliment->disponible ?? false) == true" />

{{-- @dump(old()) --}}

@livewire('niveau-maturite-repeater', [
    'niveau_maturite' => isset($niveau_maturite) ? $niveau_maturite : null,
])
