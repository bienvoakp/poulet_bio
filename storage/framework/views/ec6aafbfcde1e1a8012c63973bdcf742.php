<?php $__env->startSection('title'); ?>
    Détails de l'animal <q><?php echo e($animal->titre); ?></q>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
        <p class="lead">Toutes les informations sur <?php echo e($animal->titre); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('animaux.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('animaux.index')).'']); ?>
        <i class="bi bi-arrow-left"></i> Retour
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b)): ?>
<?php $attributes = $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b; ?>
<?php unset($__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b)): ?>
<?php $component = $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b; ?>
<?php unset($__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal02413db6c42629ca887d830d99dc9fbb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02413db6c42629ca887d830d99dc9fbb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.info-link','data' => ['href' => ''.e(route('animaux.niveau-maturite.create', ['animaux' => $animal->id])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.info-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('animaux.niveau-maturite.create', ['animaux' => $animal->id])).'']); ?>
        <i class="bi bi-plus-circle"></i> Niveau de maturité
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02413db6c42629ca887d830d99dc9fbb)): ?>
<?php $attributes = $__attributesOriginal02413db6c42629ca887d830d99dc9fbb; ?>
<?php unset($__attributesOriginal02413db6c42629ca887d830d99dc9fbb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02413db6c42629ca887d830d99dc9fbb)): ?>
<?php $component = $__componentOriginal02413db6c42629ca887d830d99dc9fbb; ?>
<?php unset($__componentOriginal02413db6c42629ca887d830d99dc9fbb); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Informations principales
                        </h5>
                    </div>

                    <div class="card-body">
                        <?php if($animal->image): ?>
                            <div class="text-center mb-4">
                                <img src="<?php echo e(asset('storage/' . $animal->image)); ?>"
                                     alt="<?php echo e($animal->titre); ?>"
                                     class="img-fluid rounded shadow"
                                     style="max-height: 300px;">
                            </div>
                        <?php endif; ?>

                        <dl class="row g-3">
                            <dt class="col-sm-4 text-muted">Titre :</dt>
                            <dd class="col-sm-8 fw-bold"><?php echo e($animal->titre); ?></dd>

                            <dt class="col-sm-4 text-muted">Race :</dt>
                            <dd class="col-sm-8"><?php echo e($animal->race->titre); ?></dd>

                            <dt class="col-sm-4 text-muted">Date de création :</dt>
                            <dd class="col-sm-8">
                                <?php echo e(\Carbon\Carbon::parse($animal->created_at)->locale('fr')->isoFormat('dddd D MMMM YYYY à H:mm')); ?>

                            </dd>

                            <?php if($animal->desc): ?>
                                <dt class="col-sm-4 text-muted">Description :</dt>
                                <dd class="col-sm-8"><?php echo e($animal->desc); ?></dd>
                            <?php endif; ?>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/animal/show.blade.php ENDPATH**/ ?>