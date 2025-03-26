<?php $__env->startSection('title', ' Connexion '); ?>
<?php $__env->startSection('description', ' ..... '); ?>

<?php $__env->startSection('content'); ?>

    <!-- Session Status -->
    <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>

    <form method="POST" class="row gy-2" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Email Address -->

        <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['class' => 'col-12','type' => 'email','label' => 'Mail','required' => true,'placeholder' => 'Entrez le mail','inputName' => 'email','autofocus' => true,'autocomplete' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','type' => 'email','label' => 'Mail','required' => true,'placeholder' => 'Entrez le mail','inputName' => 'email','autofocus' => true,'autocomplete' => 'email']); ?>
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

        <!-- Password -->

        <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['class' => 'col-12','type' => 'password','label' => 'Mot de Passe','required' => true,'placeholder' => 'Entrez votre mot de passe','inputName' => 'password','autofocus' => true,'autocomplete' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','type' => 'password','label' => 'Mot de Passe','required' => true,'placeholder' => 'Entrez votre mot de passe','inputName' => 'password','autofocus' => true,'autocomplete' => 'password']); ?>
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

        <!-- Remember Me -->
        <?php if (isset($component)) { $__componentOriginal38729de5a4b1f4c89e49345526e8468a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38729de5a4b1f4c89e49345526e8468a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-checkbox-row','data' => ['class' => 'col-12','label' => 'Se souvenir de moi','inputName' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-checkbox-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => 'Se souvenir de moi','inputName' => 'remember']); ?>
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

        <div>


            <?php if (isset($component)) { $__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-button','data' => ['class' => 'd-block w-100 my-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-block w-100 my-4']); ?>
                <?php echo e(__('Se connecter')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3)): ?>
<?php $attributes = $__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3; ?>
<?php unset($__attributesOriginale88f8aa40b3c8dfd1fd9d84b407092f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3)): ?>
<?php $component = $__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3; ?>
<?php unset($__componentOriginale88f8aa40b3c8dfd1fd9d84b407092f3); ?>
<?php endif; ?>

            <?php if(Route::has('password.request')): ?>
                <span>
                    <?php echo e(__("Vous avez oublié votre mot de passe ? ")); ?>


                    <a href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Réinitialisez-le ')); ?>

                    </a>
                </span>
            <?php endif; ?>
        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/auth/login.blade.php ENDPATH**/ ?>