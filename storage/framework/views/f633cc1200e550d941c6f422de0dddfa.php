<?php
    $titre = !empty($animal) ? $animal->titre : null;
    $desc = !empty($animal) ? $animal->desc : null;
    $races = \App\Models\Race::all();
    // $nutriments = \App\Models\Nutriment::all();
?>

<?php if (isset($component)) { $__componentOriginal2fc4ee10de36c616941cdd84c8511d79 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-select-row','data' => ['label' => 'Race de l\'animal','placeholder' => 'Selectionner la race de l\'animal','required' => true,'inputName' => 'race_id','options' => $races->mapWithKeys(fn($race) => [$race->id => $race->titre])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-select-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Race de l\'animal','placeholder' => 'Selectionner la race de l\'animal','required' => true,'inputName' => 'race_id','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($races->mapWithKeys(fn($race) => [$race->id => $race->titre]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fc4ee10de36c616941cdd84c8511d79)): ?>
<?php $attributes = $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79; ?>
<?php unset($__attributesOriginal2fc4ee10de36c616941cdd84c8511d79); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fc4ee10de36c616941cdd84c8511d79)): ?>
<?php $component = $__componentOriginal2fc4ee10de36c616941cdd84c8511d79; ?>
<?php unset($__componentOriginal2fc4ee10de36c616941cdd84c8511d79); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Nom de l\'animal','required' => true,'placeholder' => 'Le nom de l\'animal','inputName' => 'titre','defaultValue' => $titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nom de l\'animal','required' => true,'placeholder' => 'Le nom de l\'animal','inputName' => 'titre','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($titre)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05654859b3e6faac406a8a768194bb6d)): ?>
<?php $attributes = $__attributesOriginal05654859b3e6faac406a8a768194bb6d; ?>
<?php unset($__attributesOriginal05654859b3e6faac406a8a768194bb6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05654859b3e6faac406a8a768194bb6d)): ?>
<?php $component = $__componentOriginal05654859b3e6faac406a8a768194bb6d; ?>
<?php unset($__componentOriginal05654859b3e6faac406a8a768194bb6d); ?>
<?php endif; ?>




<?php if (isset($component)) { $__componentOriginal963a47805a453fe2c445c82beb4ce95e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal963a47805a453fe2c445c82beb4ce95e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-textarea-row','data' => ['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'animal','inputName' => 'desc','defaultValue' => $desc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'animal','inputName' => 'desc','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($desc)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal963a47805a453fe2c445c82beb4ce95e)): ?>
<?php $attributes = $__attributesOriginal963a47805a453fe2c445c82beb4ce95e; ?>
<?php unset($__attributesOriginal963a47805a453fe2c445c82beb4ce95e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal963a47805a453fe2c445c82beb4ce95e)): ?>
<?php $component = $__componentOriginal963a47805a453fe2c445c82beb4ce95e; ?>
<?php unset($__componentOriginal963a47805a453fe2c445c82beb4ce95e); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal38729de5a4b1f4c89e49345526e8468a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38729de5a4b1f4c89e49345526e8468a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-checkbox-row','data' => ['label' => 'Disponible ?','inputName' => 'disponible','value' => '1','checked' => old('disponible', $animal->disponible ?? false) == true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-checkbox-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Disponible ?','inputName' => 'disponible','value' => '1','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('disponible', $animal->disponible ?? false) == true)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38729de5a4b1f4c89e49345526e8468a)): ?>
<?php $attributes = $__attributesOriginal38729de5a4b1f4c89e49345526e8468a; ?>
<?php unset($__attributesOriginal38729de5a4b1f4c89e49345526e8468a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38729de5a4b1f4c89e49345526e8468a)): ?>
<?php $component = $__componentOriginal38729de5a4b1f4c89e49345526e8468a; ?>
<?php unset($__componentOriginal38729de5a4b1f4c89e49345526e8468a); ?>
<?php endif; ?>



<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('composition-aliment-repeater', [
    'aliment' => isset($aliment) ? $aliment : null,
]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3697354084-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php $__env->startSection('script'); ?>
    <script>
        $repeater.setList(<?php echo json_encode(old('composition_nutritive_aliments'), 15, 512) ?>);
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/animal/_partials/form.blade.php ENDPATH**/ ?>