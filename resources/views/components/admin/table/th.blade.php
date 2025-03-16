@props(['width' => 'auto'])

<th style="width: {{ $width }}" {{ $attributes->merge(['class' => 'tb-odr-info']) }}>
    {{ $slot }}
</th>
