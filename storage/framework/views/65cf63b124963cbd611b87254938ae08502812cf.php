<?php $__env->startSection('title'); ?>
    <?php echo e(__('User Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('User Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/landlord/admin/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/tenant/frontend/user-dashboard/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/tenant/frontend/user-dashboard/css/custom-style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="body-overlay"></div>
    <div class="seller-profile-details-area padding-bottom-100 padding-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 margin-top-30">
                    <div class="seller-profile-dashboard">
                        <div class="dashboard-icon">
                            <div class="sidebar-icon">
                                <i class="las la-bars"></i>
                            </div>
                        </div>
                        <div class="dashboard-close">
                            <div class="close-bars"> <i class="las la-times"></i> </div>
                            <ul class="seller-dashboard-list">
                                <li class="list <?php if(request()->routeIs('tenant.user.home')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.home')); ?>"> <i class="las la-th"></i> <?php echo e(__('Dashboard')); ?> </a>
                                </li>

                                <li class="list <?php if(request()->routeIs('tenant.user.dashboard.package.order')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.dashboard.package.order')); ?>"> <i class="las la-tasks"></i> <?php echo e(__('Order List')); ?> </a>
                                </li>

                                <li class="list <?php if(request()->routeIs('tenant.user.dashboard.download.list')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.dashboard.download.list')); ?>"> <i class="las la-download"></i> <?php echo e(__('Downloads')); ?> </a>
                                </li>

                                <li class="list <?php if(request()->routeIs('tenant.user.dashboard.package.order.refund')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.dashboard.package.order.refund')); ?>"> <i class="las la-undo-alt"></i> <?php echo e(__('Refund Products')); ?> </a>
                                </li>

                                <li class="list <?php if(request()->routeIs('tenant.user.home.support.tickets') || request()->routeIs('tenant.frontend.support.ticket')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.home.support.tickets')); ?>"> <i class="las la-ticket-alt"></i> <?php echo e(__('Support Tickets')); ?> </a>
                                </li>
                                <li class="list <?php if(request()->routeIs('tenant.user.home.manage.account')): ?> active <?php endif; ?>">
                                    <a href="<?php echo e(route('tenant.user.home.manage.account')); ?>"> <i class="las la-user"></i> <?php echo e(__('Manage My Account')); ?> </a>
                                </li>
                                <li class="list <?php if(request()->routeIs('tenant.user.home.change.password')): ?> active <?php endif; ?> ">
                                    <a href="<?php echo e(route('tenant.user.home.change.password')); ?>"> <i class="las la-lock"></i> <?php echo e(__('Change Password')); ?> </a>
                                </li>

                                <li class="list">
                                    <a href="<?php echo e(route('tenant.user.logout')); ?>" ><i class="las la-sign-out-alt"></i><?php echo e(__('Logout')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 margin-top-30">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php echo $__env->yieldContent('section'); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $('.close-bars, .body-overlay').on('click', function() {
            $('.dashboard-close, .dashboard-close-main, .body-overlay').removeClass('active');
        });
        $('.sidebar-icon').on('click', function() {
            $('.dashboard-close, .dashboard-close-main, .body-overlay').addClass('active');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/user-master.blade.php ENDPATH**/ ?>