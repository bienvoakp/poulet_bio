

<?php $__env->startSection('title', "Tableau de bord"); ?>
<?php $__env->startSection('description', "Synthèse de toutes vos enregistrements"); ?>

<?php $__env->startSection('actions'); ?>
    <a class="btn btn-primary" href="/">Imprimer</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    Tableau de bord
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/index.blade.php ENDPATH**/ ?>