<?php $__env->startSection('page-title'); ?>
 <?php echo e(__('User Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(__('User Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <div class="row g-4">
        <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">
                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-shopping-cart"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> <?php echo e($package_orders); ?> </h2>
                        <span class="order-para"><?php echo e(__('Total Orders')); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">
                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-money-bill"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> <?php echo e(amount_with_currency_symbol($order_purchase)); ?> </h2>
                        <span class="order-para"><?php echo e(__('Total Purchase')); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">
                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-undo-alt"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> <?php echo e($product_refunds); ?> </h2>
                        <span class="order-para"><?php echo e(__('Product Refunds')); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">
                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-tasks"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> <?php echo e($support_tickets); ?> </h2>
                        <span class="order-para"><?php echo e(__('Support Tickets')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/user-home.blade.php ENDPATH**/ ?>