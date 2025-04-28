<?php
    $nom = !empty($user) ? $user->name : null;
    $email = !empty($user) ? $user->email : null;
    $password = !empty($user) ? $user->password : null;
    $image = !empty($user) ? $user->image : null;
?>

<div class="row">
    <?php if (isset($component)) { $__componentOriginal2fc4ee10de36c616941cdd84c8511d79 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-select-row','data' => ['label' => 'Statut','class' => 'col-lg-6','placeholder' => 'Selectionner le statut de l\'utilisateur','required' => true,'inputName' => 'statut','options' => ['admin' => 'Admin', 'user' => 'User'],'defaultValue' => $user->statut ?? 'user']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-select-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Statut','class' => 'col-lg-6','placeholder' => 'Selectionner le statut de l\'utilisateur','required' => true,'inputName' => 'statut','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['admin' => 'Admin', 'user' => 'User']),'defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user->statut ?? 'user')]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Nom','class' => 'col-lg-6','required' => true,'placeholder' => 'Le nom de l\'utilisateur','inputName' => 'name','defaultValue' => $nom]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nom','class' => 'col-lg-6','required' => true,'placeholder' => 'Le nom de l\'utilisateur','inputName' => 'name','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nom)]); ?>
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
</div>

<div class="row">
    <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Email','type' => 'email','class' => 'col-lg-6','required' => true,'placeholder' => 'Entrez l\'email de l\'utilisateur','inputName' => 'email','defaultValue' => $email]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email','type' => 'email','class' => 'col-lg-6','required' => true,'placeholder' => 'Entrez l\'email de l\'utilisateur','inputName' => 'email','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($email)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['label' => 'Mot de Passe','class' => 'col-lg-6','type' => 'passeword','required' => true,'placeholder' => 'Entrez le mot de passe de l\'utilisateur','inputName' => 'password','defaultValue' => $password]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Mot de Passe','class' => 'col-lg-6','type' => 'passeword','required' => true,'placeholder' => 'Entrez le mot de passe de l\'utilisateur','inputName' => 'password','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($password)]); ?>
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
</div>

<div class="row">
    <?php if (isset($component)) { $__componentOriginal854250c3187cf87164a0e8f08fbbcb87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal854250c3187cf87164a0e8f08fbbcb87 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-file','data' => ['label' => 'Choisir une image de profil (optionnel)','inputName' => 'image','defaultValue' => $image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Choisir une image de profil (optionnel)','inputName' => 'image','defaultValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($image)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal854250c3187cf87164a0e8f08fbbcb87)): ?>
<?php $attributes = $__attributesOriginal854250c3187cf87164a0e8f08fbbcb87; ?>
<?php unset($__attributesOriginal854250c3187cf87164a0e8f08fbbcb87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal854250c3187cf87164a0e8f08fbbcb87)): ?>
<?php $component = $__componentOriginal854250c3187cf87164a0e8f08fbbcb87; ?>
<?php unset($__componentOriginal854250c3187cf87164a0e8f08fbbcb87); ?>
<?php endif; ?>
</div>

<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/user/_partials/form.blade.php ENDPATH**/ ?>