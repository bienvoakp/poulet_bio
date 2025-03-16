<?php $__env->startSection('body-class', 'nk-body bg-white npc-general pg-auth'); ?>

<?php $__env->startSection('body'); ?>
    <div class="nk-app-root">

        <div class="nk-main ">

            <div class="nk-wrap nk-wrap-nosidebar">

                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"
                                    srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                                    srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered shadow">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">
                                            <?php echo $__env->yieldContent('title'); ?>
                                        </h4>
                                        <div class="nk-block-des">
                                            <p>
                                                <?php echo $__env->yieldContent('description'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="nk-block-content text-center text-lg-start">
                                        <p class="text-soft">&copy; 2022 Poultry. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/layouts/auth.blade.php ENDPATH**/ ?>