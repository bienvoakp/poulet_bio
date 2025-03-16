@props([
    'label' => '',
    'defaultValue' => '',
    'inputName' => '',
    'placeholder' => 'Selectionner un élément dans la liste',
    'inputId' => 'id' . uniqid(),
    'class' => 'col-lg-6',
    'options' => []
])

@php
    $required = $attributes->has('required');
@endphp

<div class="{{ $class }}">
    <div class="form-group">
        <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $inputId }}">
            {{ $label }}
        </label>
        <div class="form-control-wrap">
            <select class="form-control" id="{{ $inputId }}" name="{{ $inputName }}" {{ $attributes->except(['value', 'id', 'class', 'name']) }}>
                <option value="" @disabled($required) {{ old($inputName, $defaultValue) === '' ? 'selected' : '' }}>
                   {{ $placeholder }}
                </option>
                @foreach ($options as $value => $option)
                    <option value="{{ $value }}" {{ old($inputName, $defaultValue) == $value ? 'selected' : '' }}>
                        {{ $option }}
                    </option>
                @endforeach
            </select>
        </div>
        @error($inputName)
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
