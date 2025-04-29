<?php $__env->startSection('title'); ?>
    Détails du nutriment <q><?php echo e($nutriment->titre); ?></q>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
        <p class="lead">Toutes les informations sur <?php echo e($nutriment->titre); ?></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <?php if (isset($component)) { $__componentOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e0bc8188a7ac6ee79fdf96936c3949b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.primary-link','data' => ['href' => ''.e(route('nutriments.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.primary-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('nutriments.index')).'']); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Informations principales
                        </h5>
                    </div>

                    <div class="card-body">


                        <dl class="row g-3">
                            <dt class="col-sm-4 text-muted">Nom :</dt>
                            <dd class="col-sm-8 fw-bold"><?php echo e($nutriment->titre); ?></dd>

                           

                            <?php if($nutriment->desc): ?>
                                <dt class="col-sm-4 text-muted">Description :</dt>
                                <dd class="col-sm-8"><?php echo e($nutriment->desc); ?></dd>
                            <?php endif; ?>

                            <dt class="col-sm-4 text-muted">Disponible ? :</dt>
                            <dd class="col-sm-8 fw-bold"><?php echo e($nutriment->disponible ? 'Oui' : 'Non'); ?></dd>

                            <dt class="col-sm-4 text-muted">Date de création :</dt>
                            <dd class="col-sm-8">
                                <?php echo e(\Carbon\Carbon::parse($nutriment->created_at)->locale('fr')->isoFormat('dddd D MMMM YYYY à H:mm')); ?>

                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/nutriment/show.blade.php ENDPATH**/ ?>