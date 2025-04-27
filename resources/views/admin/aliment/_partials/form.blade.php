@php
    $titre = !empty($aliment) ? $aliment->titre : null;
    $energie = !empty($aliment) ? $aliment->energie : null;
    $desc = !empty($aliment) ? $aliment->desc : null;
    // $nutriments = \App\Models\Nutriment::all();
@endphp

<x-admin.form-input-row label="Nom de l'aliment" required placeholder="Le nom de l'aliment" inputName="titre"
    :defaultValue="$titre" />

<x-admin.form-input-row label="Energie fournie (/g) d'aliment" required placeholder="Energie fournie par gramme d'aliment"
    inputName="energie" :defaultValue="$energie" />


<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Le nom de l'aliment" inputName="desc"
    :defaultValue="$desc" />

<x-admin.form-checkbox-row label="Disponible ?" inputName="disponible" value="1" :checked="old('disponible', $aliment->disponible ?? false) == true" />

{{-- @dump(old()) --}}

@livewire('composition-aliment-repeater', [
    'aliment' => isset($aliment) ? $aliment : null,
])
