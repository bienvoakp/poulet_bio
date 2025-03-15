<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'href' => '',
    'label' => '',
    'badge' => '',
    'icon' => ''
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'href' => '',
    'label' => '',
    'badge' => '',
    'icon' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<li class="nk-menu-item">
    <a href= "<?php echo e($href); ?>" class="nk-menu-link">
        <?php if($icon): ?>
        <span class="nk-menu-icon"><em class="icon <?php echo e($icon); ?>"></em></span>
        <?php endif; ?>
        <span class="nk-menu-text"> <?php echo e($label); ?> </span>
        <?php if($badge): ?>
        <span class="nk-menu-badge"><?php echo e($badge); ?></span>
        <?php endif; ?>
    </a>
</li>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/components/admin/sidebar-menu-link.blade.php ENDPATH**/ ?>