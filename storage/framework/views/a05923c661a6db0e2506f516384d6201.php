<?php $__env->startSection('title', 'Tous les aliments'); ?>
<?php $__env->startSection('description', 'Liste de tous les aliments '); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('aliments.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('aliments.create')).'']); ?>Ajouter <?php echo $__env->renderComponent(); ?>
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

    <?php if (isset($component)) { $__componentOriginal2fc4ee10de36c616941cdd84c8511d79 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-select-row','data' => ['label' => 'Les aliments ?','placeholder' => 'Selectionner un aliment','required' => true,'name' => 'titre','options' => $aliments->mapWithKeys(fn($a) => [$a->id => $a->titre])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-select-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Les aliments ?','placeholder' => 'Selectionner un aliment','required' => true,'name' => 'titre','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aliments->mapWithKeys(fn($a) => [$a->id => $a->titre]))]); ?>
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

    <?php if (isset($component)) { $__componentOriginal53cf72b3da4b8700c9115c02c0eead10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53cf72b3da4b8700c9115c02c0eead10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

         <?php $__env->slot('thead', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?># <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $attributes = $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $component = $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Titre <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $attributes = $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $component = $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Energie <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $attributes = $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $component = $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Disponible ? <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $attributes = $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $component = $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $attributes = $__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__attributesOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761)): ?>
<?php $component = $__componentOriginal3fb29bab3a8233ace8b2e12477ba4761; ?>
<?php unset($__componentOriginal3fb29bab3a8233ace8b2e12477ba4761); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('tbody', null, []); ?> 
            <?php $__currentLoopData = $aliments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $aliment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal06c3fe66d396abf7c82811bd08cac844 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal06c3fe66d396abf7c82811bd08cac844 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginaleca1dccf8d8f432f50f17071a804c199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleca1dccf8d8f432f50f17071a804c199 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo e($aliments->firstItem() + $key); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaleca1dccf8d8f432f50f17071a804c199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleca1dccf8d8f432f50f17071a804c199 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo e($aliment->titre); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaleca1dccf8d8f432f50f17071a804c199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleca1dccf8d8f432f50f17071a804c199 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo e($aliment->energie_label()); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaleca1dccf8d8f432f50f17071a804c199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleca1dccf8d8f432f50f17071a804c199 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo e($aliment->is_disponible()); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginaleca1dccf8d8f432f50f17071a804c199 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleca1dccf8d8f432f50f17071a804c199 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>.. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal06c3fe66d396abf7c82811bd08cac844)): ?>
<?php $attributes = $__attributesOriginal06c3fe66d396abf7c82811bd08cac844; ?>
<?php unset($__attributesOriginal06c3fe66d396abf7c82811bd08cac844); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06c3fe66d396abf7c82811bd08cac844)): ?>
<?php $component = $__componentOriginal06c3fe66d396abf7c82811bd08cac844; ?>
<?php unset($__componentOriginal06c3fe66d396abf7c82811bd08cac844); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53cf72b3da4b8700c9115c02c0eead10)): ?>
<?php $attributes = $__attributesOriginal53cf72b3da4b8700c9115c02c0eead10; ?>
<?php unset($__attributesOriginal53cf72b3da4b8700c9115c02c0eead10); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53cf72b3da4b8700c9115c02c0eead10)): ?>
<?php $component = $__componentOriginal53cf72b3da4b8700c9115c02c0eead10; ?>
<?php unset($__componentOriginal53cf72b3da4b8700c9115c02c0eead10); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/aliment/index.blade.php ENDPATH**/ ?>