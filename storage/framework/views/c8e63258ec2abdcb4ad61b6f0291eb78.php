<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Bienvenu Akpo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Une application pour formuler et estimer la ration alimentaire">
    <title>
        Poultry - <?php echo $__env->yieldContent('title'); ?>
    </title>
    <?php echo $__env->make('admin._partials.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('link'); ?>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main">
            <?php echo $__env->make('admin._partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="nk-wrap ">
                <?php echo $__env->make('admin._partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <?php if (empty(trim($__env->yieldContent('navigation')))): ?>
                                    <?php echo $__env->make('admin._partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php else: ?>
                                    <?php echo $__env->yieldContent('navigation'); ?>
                                <?php endif; ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('admin._partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('modal'); ?>
    
    <?php echo $__env->make('admin._partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/layouts/admin.blade.php ENDPATH**/ ?>