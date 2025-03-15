@props([
    'label' => '',
    'inputName' => '',
    'inputId' => 'id' . uniqid(),
    'class' => 'col-lg-12',
])

@php
    $required = $attributes->has('required');
@endphp

<div class="{{ $class }}">
    <div class="custom-control custom-checkbox">

        <input type="checkbox" class="custom-control-input" {{ $attributes->except(['id', 'class', 'name']) }} id="{{ $inputId }}"
            name="{{ $inputName }}">
        <label class="custom-control-label" for="{{ $inputId }}">
            {{ $label }}
        </label>
        @error($inputName)
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
