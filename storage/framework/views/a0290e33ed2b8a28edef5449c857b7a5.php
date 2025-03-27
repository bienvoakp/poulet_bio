<?php $__env->startSection('title', 'Créer un race d\'animal'); ?>
<?php $__env->startSection('description', 'Cette interface vous permet d\'ajouter une nouvelle race'); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('races.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('races.index')).'']); ?>Retour <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b)): ?>
<?php $attributes = $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b; ?>
<?php unset($__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b)): ?>
<?php $component = $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b; ?>
<?php unset($__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="row gy-4" action="<?php echo e(route('races.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php echo $__env->make('admin.race._partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-12">
            <?php if (isset($component)) { $__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Enregistrer <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3)): ?>
<?php $attributes = $__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3; ?>
<?php unset($__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3)): ?>
<?php $component = $__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3; ?>
<?php unset($__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3); ?>
<?php endif; ?>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/race/create.blade.php ENDPATH**/ ?>