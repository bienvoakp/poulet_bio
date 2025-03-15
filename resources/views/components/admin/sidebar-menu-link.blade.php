@props([
    'href' => '',
    'label' => '',
    'badge' => '',
    'icon' => ''
])

<li class="nk-menu-item">
    <a href= "{{ $href }}" class="nk-menu-link">
        @if ($icon)
        <span class="nk-menu-icon"><em class="icon {{ $icon }}"></em></span>
        @endif
        <span class="nk-menu-text"> {{ $label }} </span>
        @if ($badge)
        <span class="nk-menu-badge">{{ $badge }}</span>
        @endif
    </a>
</li>
