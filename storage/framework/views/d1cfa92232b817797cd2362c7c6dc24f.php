<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'defaultValue' => '',
    'inputName' => '',
    'inputId' => 'id' . uniqid(),
    'class' => 'col-lg-6',
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
    'label' => '',
    'defaultValue' => '',
    'inputName' => '',
    'inputId' => 'id' . uniqid(),
    'class' => 'col-lg-6',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $required = $attributes->has('required');
?>

<div class="<?php echo e($class); ?>">
    <div class="form-group">
        <label class="form-label <?php echo e($required ? 'required' : ''); ?>" for="<?php echo e($inputId); ?>"> <?php echo e($label); ?>

        </label>
        <div class="form-control-wrap">
            <textarea class="form-control" <?php echo e($attributes->except(['value', 'id', 'class', 'name'])); ?> id="<?php echo e($inputId); ?>"
                name="<?php echo e($inputName); ?>"><?php echo e(old($inputName, $defaultValue)); ?></textarea>
        </div>
        <?php $__errorArgs = [$inputName];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/components/admin/form-textarea-row.blade.php ENDPATH**/ ?>