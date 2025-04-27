<div>
    <div>
        @foreach ($composition_nutritives as $key => $data)
            @php
                $id = $data['id'] ?? null;
                $nutriment_id = $data['nutriment_id'] ?? null;
                $proportion = $data['proportion'] ?? null;
            @endphp
            <div class="container-fluid p-0">
                <div class="row gy-2 my-2">
                    <x-admin.form-select-row class="col-md-6" label="Nutriment" placeholder="Selectionner un nutriment"
                        required wire:model="composition_nutritives.{{ $key }}.nutriment_id"
                        inputName="composition_nutritives[{{ $key }}][nutriment_id]"
                        :options="\App\Models\Nutriment::all()->mapWithKeys(fn($a) => [$a->id => $a->titre])" />
                    <x-admin.form-input-row class="col-md-6" label="Proportion" required
                        wire:model="composition_nutritives.{{ $key }}.proportion"
                        placeholder="Entrez la proportion du nutriment"
                        inputName="composition_nutritives[{{ $key }}][proportion]" />
                </div>
                <input type="hidden" name="composition_nutritives[{{ $key }}][id]"
                    wire:model="composition_nutritives.{{ $key }}.id">
                <button type="button" class="btn btn-danger"
                    wire:click="remove({{ $key }})">Supprimer</button>
            </div>
        @endforeach
        <button type="button" wire:click="add" class="btn btn-primary mt-3">Associer un nutriment</button>
    </div>
</div>
