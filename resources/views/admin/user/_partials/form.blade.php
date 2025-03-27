<div class="card-body">
    <div class="row g-3">
        <div class="col-md-6 col-lg-4">
            <div class="mb-2">
                <label for="name" class="form-label required plain">Nom de l'utilisateur</label>
                <input autocomplete="username" required type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', !empty($user) ? $user->name : null) }}"
                    placeholder="Entrer le nom du nouvel utilisateur">
                <x-admin.input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="mb-2">
                <label for="nom" class="form-label required plain">Adresse email</label>
                <input autocomplete="email" required type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email', !empty($user) ? $user->email : null) }}" placeholder="Adresse email">
                <x-admin.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="mb-2">
                <label for="nom" class="form-label">
                    Mote de passe
                    <i data-bs-toggle="tooltip" title="Un mot de passe aléatoire sera génerer si le champ est vide"
                        class="bi-info-circle-fill text-muted ms-1"></i>
                </label>
                <div tabindex="0" class="input-group input-group-merge form-control p-0"
                    data-hs-validation-validate-class>
                    <input autocomplete="new-password" {{ !empty($user) ? 'disabled' : null }} type="password" class="js-toggle-password form-control" name="password" id="password"
                        placeholder="Saisissez votre mot de passe"
                        aria-label="Saisissez votre mot de passe" data-hs-toggle-password-options='{
                     "target": "#changePassTarget",
                     "defaultClass": "bi-eye-slash",
                     "showClass": "bi-eye",
                     "classChangeTarget": "#changePassIcon"
                   }'>
                    <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:void(0);">
                        <i id="changePassIcon" class="bi-eye"></i>
                    </a>
                </div>
                <x-admin.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="tom-select-custom tom-select-custom-with-tags mb-2">
                <label class="form-label required plain" for="roles">Rôles</label>
                <select id="roles" class="js-select form-select" multiple name="roles[][name]" autocomplete="off"
                    data-hs-tom-select-options='{
                    "placeholder": "Attribuer des roles",
                    "allowEmptyOption": true
                }'>
                    @foreach (App\Models\Role::all() as $key => $role)
                    <option value="{{ $role->name }}"
                        @if (collect(old('roles'))->pluck('name')->contains($role->name))
                        selected
                        @elseif (count(old('roles') ?? []) == 0 && !empty($user) && $user->hasRole($role->name))
                        selected
                        @endif
                    >
                        {{ $role->display_name }}
                    </option>
                    @endforeach
                </select>
                <x-admin.input-error :messages="$errors->get('roles')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-4 mt-auto">
            <div class="form-check form-switch mt-4 mb-3">
                <input type="hidden" class="form-check-input" name="is_active" value="0">
                <input type="checkbox" class="form-check-input" name="is_active" value="1" id="interne" {{
                    old('is_active', !empty($user) ? ($user->email_verified_at == true) : null ) ? 'checked' : '' }}>
                <label class="form-check-label" for="interne">
                    Actif ?
                </label>
            </div>
        </div>
        {{-- <div class="col-md-4 mt-auto">
            <div class="form-check form-switch mt-4 mb-3">
                <input type="hidden" class="form-check-input" name="is_on_first_login" value="0">
                <input type="checkbox" class="form-check-input" name="is_on_first_login" value="1"
                    id="is_on_first_login" {{ old('is_on_first_login', !empty($user) ? ($user->is_on_first_login ==
                true) : true ) ? 'checked' : ''
                }}>
                <label class="form-check-label" for="is_on_first_login">
                    Première connexion ?
                    <i data-bs-toggle="tooltip"
                        title="Cocher pour indiquer si l'utilisateur doit réinitialiser son mot de passe à la connexion"
                        class="bi-info-circle-fill ms-1"></i>
                </label>
            </div>
        </div> --}}
    </div>
</div>
<div class="card-footer">
    <div class="row mb-0">
        <div class="col-12 text-start">
            <button type="submit" class="btn btn-primary">{{ empty($user) ? 'Enregistrer' : 'Modifier' }}</button>
            <button type="reset" class="btn btn-white">Annuler</button>
        </div>
    </div>
</div>
