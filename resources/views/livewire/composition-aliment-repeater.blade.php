<div class="col-12">
    <div>
        <div class="container ">
            <div class="row gy-2 my-2">
                <x-admin.form-select-row class="col-md-6" label="Nutriment" placeholder="Selectionner un nutriment"
                    required inputName="nutriment_id" :options="$nutriments->mapWithKeys(fn($a) => [$a->id => $a->titre])" />
                <x-admin.form-input-row class="col-md-6" label="Proportion" required
                    placeholder="Entrez la proportion du nutriment" inputName="proportion" />
            </div>
            <input type="button" class="btn btn-danger" value="Delete" />
        </div>
        <input type="button" class="btn btn-primary" value="Associer un nutriment" />
    </div>
</div>
