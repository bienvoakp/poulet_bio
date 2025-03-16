@php
    $titre = !empty($aliment) ? $aliment->titre : null;
    $energie = !empty($aliment) ? $aliment->energie : null;
    $desc = !empty($aliment) ? $aliment->desc : null;
@endphp


<x-admin.form-input-row label="Nom de l'aliment" required placeholder="Le nom de l'aliment" name="titre" :defaultValue="$titre" />
<x-admin.form-input-row label="Energie fournie (/g) d'aliment" required placeholder="Energie fournie par gramme d'aliment"
    name="energie" :defaultValue="$energie" />
<x-admin.form-textarea-row class="col-12" label="Description" required placeholder="Le nom de l'aliment" name="desc" :defaultValue="$desc" />
<x-admin.form-checkbox-row label="Disponible ?" required type='checkbox' name="titre" />
