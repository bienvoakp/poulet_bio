<?php $__env->startSection('title', 'Tous les animaux'); ?>
<?php $__env->startSection('description', 'Liste de tous les animaux ajoutés '); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('animaux.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('animaux.create')).'']); ?>Ajouter <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Race <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.th','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?><em class="icon ni ni-more-h"></em> <?php echo $__env->renderComponent(); ?>
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
            <?php
                $animaux = \App\Models\Animal::paginate(10);
            ?>

            <?php $__currentLoopData = $animaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component->withAttributes([]); ?> <?php echo e($animaux->firstItem() + $key); ?>  <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?> <?php echo e($animal->titre); ?>  <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>
                        <?php if($animal->race): ?>
                            <?php echo e($animal->race->titre); ?>

                        <?php else: ?>
                            Aucune race associée à cet animal
                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $attributes = $__attributesOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__attributesOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleca1dccf8d8f432f50f17071a804c199)): ?>
<?php $component = $__componentOriginaleca1dccf8d8f432f50f17071a804c199; ?>
<?php unset($__componentOriginaleca1dccf8d8f432f50f17071a804c199); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal4d97fc85576508a3b97b3ed4809886d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d97fc85576508a3b97b3ed4809886d1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table.td-action','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table.td-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                    <ul class="link-list-plain">
                                        <li><a href="<?php echo e(route('animaux.edit', $animal->id)); ?>" class="text-secondary d-flex justify-content-center"><i class="fas fa-marker"></i></a></li>


                                        <li><a href="<?php echo e(route('animaux.show', $animal->id)); ?>" class="text-info d-flex justify-content-center"><i class="fas fa-eye"></i></a></li>

                                        <li><a href="<?php echo e(route('animaux.destroy', $animal->id)); ?>" class="text-danger d-flex justify-content-center" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cet animal ?')) document.getElementById('delete-animal-<?php echo e($animal->id); ?>').submit();"><i class="fas fa-trash"></i></a></li>
                                        <form id="delete-race-<?php echo e($animal->id); ?>" action="<?php echo e(route('animaux.destroy', $animal->id)); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                        </form>
                                    </ul>
                                </div>
                            </div>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d97fc85576508a3b97b3ed4809886d1)): ?>
<?php $attributes = $__attributesOriginal4d97fc85576508a3b97b3ed4809886d1; ?>
<?php unset($__attributesOriginal4d97fc85576508a3b97b3ed4809886d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d97fc85576508a3b97b3ed4809886d1)): ?>
<?php $component = $__componentOriginal4d97fc85576508a3b97b3ed4809886d1; ?>
<?php unset($__componentOriginal4d97fc85576508a3b97b3ed4809886d1); ?>
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

    <?php if($animaux->links()->paginator->hasPages()): ?>
    <div class="card-footer pb-1">
        <?php echo e($animaux->links()); ?>

    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/animal/index.blade.php ENDPATH**/ ?>