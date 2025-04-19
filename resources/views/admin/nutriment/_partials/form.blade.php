@php
    $titre = !empty($nutriment) ? $nutriment->titre : null;
    $desc = !empty($nutriment) ? $nutriment->desc : null;
@endphp

<x-admin.form-input-row class="col-lg-12" label="Nom du nutriment" required placeholder="Donnez un titre au nutriment" inputName="titre" :defaultValue="$titre" />

<x-admin.form-textarea-row class="col-lg-12" label="Description" required placeholder="Description du nutriment" inputName="desc" :defaultValue="$desc" />
