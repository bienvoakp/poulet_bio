@props([
    'label' => '',
    'defaultValue' => '',
    'inputName' => '',
    'inputId' => 'id' . uniqid(),
    'class' => 'col-lg-12',
])

@php
    $required = $attributes->has('required');
@endphp

<div class="{{ $class }}">
    <div class="form-group">
        <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $inputId }}"> {{ $label }}
        </label>
        <div class="form-control-wrap">
            <input
                type="file"
                class="form-control"
                {{ $attributes->except(['value', 'id', 'class', 'name']) }}
                id="{{ $inputId }}"
                name="{{ $inputName }}">
        </div>
        @error($inputName)
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
