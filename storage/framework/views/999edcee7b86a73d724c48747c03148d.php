<?php $__env->startSection('title', 'Créer un aliment'); ?>
<?php $__env->startSection('description', 'Ajouter un aliment à votre ration '); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('aliments.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('aliments.index')).'']); ?>Retour <?php echo $__env->renderComponent(); ?>
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

    <form class="row gy-4" action="<?php echo e(route('aliments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>


        

        <?php
            $titre = !empty($aliment) ? $aliment->titre : null;
            $energie = !empty($aliment) ? $aliment->energie : null;
            $desc = !empty($aliment) ? $aliment->desc : null;
        ?>


        <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Nom de l\'aliment','required' => true,'placeholder' => 'Le nom de l\'aliment','inputName' => 'titre','defaultValue' => $titre]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nom de l\'aliment','required' => true,'placeholder' => 'Le nom de l\'aliment','inputName' => 'titre','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($titre)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Energie fournie (/g) d\'aliment','required' => true,'placeholder' => 'Energie fournie par gramme d\'aliment','inputName' => 'energie','defaultValue' => $energie]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Energie fournie (/g) d\'aliment','required' => true,'placeholder' => 'Energie fournie par gramme d\'aliment','inputName' => 'energie','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($energie)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-textarea-row','data' => ['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'aliment','inputName' => 'desc','defaultValue' => $desc]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => 'Description','required' => true,'placeholder' => 'Le nom de l\'aliment','inputName' => 'desc','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($desc)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-checkbox-row','data' => ['label' => 'Disponible ?','inputName' => 'disponible','value' => '1','checked' => old('disponible', $aliment->disponible ?? false) == true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-checkbox-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Disponible ?','inputName' => 'disponible','value' => '1','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('disponible', $aliment->disponible ?? false) == true)]); ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/aliment/create.blade.php ENDPATH**/ ?>