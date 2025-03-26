@php
    $titre = !empty($race) ? $race->titre : null;
    $desc = !empty($race) ? $race->desc : null;
@endphp

<x-admin.form-input-row label="Nom de la race" required placeholder="Donnez un titre à la race" name="titre" :defaultValue="$titre" />

<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Description de la race" name="desc" :defaultValue="$desc" />
