<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                    <em class="icon ni ni-menu"></em>
                </a>
            </div>


            <!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">
                                        <?php if(Auth::user()->hasRole('Admin')): ?>
                                            Admin
                                        <?php elseif(Auth::user()->hasRole('Customer')): ?>
                                            Client
                                        <?php endif; ?>
                                    </div>
                                    <div class="user-name dropdown-indicator"><?php echo e(Auth::user()->name); ?></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <a href="#" class="rounded-circle">
                                            <?php if(Auth::check() && Auth::user()->image): ?>
                                                <img src="<?php echo e(asset('admin/assets/profile/' . Auth::user()->image)); ?>"
                                                    class="img-fluid"
                                                    style="width: 50px; height: 50px; object-fit: cover;"
                                                    alt="<?php echo e(Auth::user()->name); ?>" />
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('admin/assets/profile/logo.png')); ?>"
                                                    class="img-fluid"
                                                    style="width: 50px; height: 50px; object-fit: cover;"
                                                    alt="Default profile" />
                                            <?php endif; ?>

                                            
                                        </a>

                                        
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?php echo e(Auth::user()->name); ?></span>
                                        <span class="sub-text"><?php echo e(Auth::user()->email); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/user-profile-regular.html"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/user-profile-setting.html"><em
                                                class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
                                    <li><a href="html/user-profile-activity.html"><em
                                                class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                    </li>
                                    <li><a class="dark-switch" href="#"><em
                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>

                                        <form action="<?php echo e(route('logout')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-danger w-100" type="submit"><span> <em
                                                        class="icon ni ni-signout"></em>Sign
                                                    out</span></button>
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- .dropdown -->

                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div>
    <!-- .container-fliud -->
</div>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/_partials/header.blade.php ENDPATH**/ ?>