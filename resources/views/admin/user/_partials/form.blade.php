@php
    $nom = !empty($user) ? $user->name : null;
    $email = !empty($user) ? $user->email : null;
    $password = !empty($user) ? $user->password : null;
    $image = !empty($user) ? $user->image : null;
@endphp

<div class="row">
    <x-admin.form-select-row label="Statut" class="col-lg-6" placeholder="Selectionner le statut de l'utilisateur" required inputName="statut"
            :options="['admin' => 'Admin', 'user' => 'User']" :defaultValue="$user->statut ?? 'user'" />

    <x-admin.form-input-row label="Nom" class="col-lg-6" required placeholder="Le nom de l'utilisateur" inputName="name" :defaultValue="$nom" />
</div>

<div class="row">
    <x-admin.form-input-row label="Email" type="email" class="col-lg-6" required placeholder="Entrez l'email de l'utilisateur" inputName="email" :defaultValue="$email" />

    <x-admin.form-input-row label="Mot de Passe" class="col-lg-6" type="passeword" required placeholder="Entrez le mot de passe de l'utilisateur" inputName="password" :defaultValue="$password" />
</div>

<div class="row">
    <x-admin.form-input-file label="Choisir une image de profil (optionnel)" inputName="image" :defaultValue="$image" />
</div>

