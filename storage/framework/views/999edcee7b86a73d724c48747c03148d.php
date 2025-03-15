<?php $__env->startSection('title', 'Créer un aliment'); ?>
<?php $__env->startSection('description', 'Ajouter un aliment à votre ration '); ?>

<?php $__env->startSection('actions'); ?>
    <a class="btn btn-primary" href="<?php echo e(route('aliments.index')); ?>">Retour</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row gy-4">
            <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Nom de l\'aliment','required' => true,'placeholder' => 'Le nom de l\'aliment','name' => 'titre']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nom de l\'aliment','required' => true,'placeholder' => 'Le nom de l\'aliment','name' => 'titre']); ?>
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
            <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Energie fournie (/g) d\'aliment','required' => true,'placeholder' => 'Energie fournie par gramme d\'aliment','name' => 'energie']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Energie fournie (/g) d\'aliment','required' => true,'placeholder' => 'Energie fournie par gramme d\'aliment','name' => 'energie']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-textarea-row','data' => ['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'aliment','name' => 'desc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'aliment','name' => 'desc']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-checkbox-row','data' => ['label' => 'Disponible ?','required' => true,'type' => 'checkbox','name' => 'titre']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-checkbox-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Disponible ?','required' => true,'type' => 'checkbox','name' => 'titre']); ?>
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
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/aliment/create.blade.php ENDPATH**/ ?>