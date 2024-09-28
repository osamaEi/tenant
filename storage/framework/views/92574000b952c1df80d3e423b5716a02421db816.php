<?php $__env->startSection('title'); ?>
    <?php echo e(__('Payment Logs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <?php if(count($order_list) > 0): ?>
        <div class="table-responsive">
            <!-- Order history start-->
            <div class="order-history-inner">
                <table>
                    <thead>
                    <tr>
                        <th>
                            <?php echo e(__('Order ID')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Date')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Status')); ?>

                        </th>

                        <th>
                            <?php echo e(__('Amount')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Action')); ?>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $order_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="completed">
                            <td class="order-numb">
                                #<?php echo e($data->id ?? 0); ?>

                            </td>
                            <td class="date">
                                <?php echo e($data->created_at->format("d M, Y")); ?>

                            </td>
                            <td class="status">
                                <p>
                                    <span><?php echo e(__('Order Status')); ?></span>
                                    <span><?php echo e(__($data->status) ?? ""); ?></span>
                                </p>
                                <p>
                                    <span><?php echo e(__('Payment Status')); ?></span>
                                    <span><?php echo e(__($data->payment_status) ?? ""); ?></span>
                                </p>
                            </td>

                            <td class="amount">
                                <?php echo e(amount_with_currency_symbol($data->total_amount)); ?>

                            </td>
                            <td class="table-btn">
                                <div class="btn-wrapper">
                                    <a href="<?php echo e(route('tenant.user.dashboard.package.order', $data->id)); ?>" class="btn-default rounded-btn"> view details</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- Order history end-->
        </div>
        <div class="blog-pagination">
            <?php echo e($order_list->links()); ?>

        </div>
    <?php else: ?>
        <div class="alert alert-warning"><?php echo e(__('No Order Found')); ?></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/order-list.blade.php ENDPATH**/ ?>