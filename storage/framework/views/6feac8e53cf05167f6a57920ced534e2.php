<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x"
                    alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Tableau de bord','icon' => 'fas fa-chart-line','href' => '/bord']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tableau de bord','icon' => 'fas fa-chart-line','href' => '/bord']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal79b765c5b648c805b061c8b2a221000e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79b765c5b648c805b061c8b2a221000e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-title','data' => ['title' => 'Gestion des bêtes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Gestion des bêtes']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $attributes = $__attributesOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__attributesOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $component = $__componentOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__componentOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Animal','href' => ''.e(route('animaux.index')).'','icon' => 'fas fa-crow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Animal','href' => ''.e(route('animaux.index')).'','icon' => 'fas fa-crow']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Race','href' => ' '.e(route('races.index')).' ','icon' => 'fas fa-dna']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Race','href' => ' '.e(route('races.index')).' ','icon' => 'fas fa-dna']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal79b765c5b648c805b061c8b2a221000e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79b765c5b648c805b061c8b2a221000e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-title','data' => ['title' => 'Alimentation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Alimentation']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $attributes = $__attributesOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__attributesOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $component = $__componentOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__componentOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Aliments','href' => ''.e(route('aliments.index')).'','icon' => 'fab fa-nutritionix']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Aliments','href' => ''.e(route('aliments.index')).'','icon' => 'fab fa-nutritionix']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Nutriments','href' => ''.e(route('nutriments.index')).'','icon' => 'fas fa-seedling']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nutriments','href' => ''.e(route('nutriments.index')).'','icon' => 'fas fa-seedling']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal79b765c5b648c805b061c8b2a221000e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79b765c5b648c805b061c8b2a221000e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-title','data' => ['title' => 'Administration']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Administration']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $attributes = $__attributesOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__attributesOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79b765c5b648c805b061c8b2a221000e)): ?>
<?php $component = $__componentOriginal79b765c5b648c805b061c8b2a221000e; ?>
<?php unset($__componentOriginal79b765c5b648c805b061c8b2a221000e); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal53a75cf76934e0059aa69f821f845af4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a75cf76934e0059aa69f821f845af4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-menu-link','data' => ['label' => 'Gestion des utilisateurs','href' => '/demoa','icon' => 'ni ni-shield-check-fill']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.sidebar-menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Gestion des utilisateurs','href' => '/demoa','icon' => 'ni ni-shield-check-fill']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $attributes = $__attributesOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__attributesOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a75cf76934e0059aa69f821f845af4)): ?>
<?php $component = $__componentOriginal53a75cf76934e0059aa69f821f845af4; ?>
<?php unset($__componentOriginal53a75cf76934e0059aa69f821f845af4); ?>
<?php endif; ?>

                </ul>


            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/_partials/sidebar.blade.php ENDPATH**/ ?>