<?php $__env->startSection('title'); ?>
    <?php echo e(__('Refund List')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <style>
        .refund_conversation{
            border-radius: 0;
        }
        .refund_conversation:hover{
            background: var(--main-color-one);
            border-color: var(--main-color-one);
        }
        .refund_conversation i{
            font-size: 25px;
            vertical-align: bottom;
        }
    </style>

    <div class="parent">
        <dvi class="d-block text-end">
            <a class="btn btn-primary refund_conversation" href="<?php echo e(route('tenant.user.dashboard.refund.chat.list')); ?>">
                <i class="lar la-comment-alt"></i>
                <?php echo e(__('Refund Conversation')); ?>

            </a>
        </dvi>

        <div class="table-responsive mt-4">
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
                            <?php echo e(__('Product')); ?>

                        </th>

                        <th>
                            <?php echo e(__('Amount')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Status')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Action')); ?>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $refund_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="completed">
                            <td class="order-numb">
                                #<?php echo e($data->id ?? 0); ?>

                            </td>
                            <td class="date">
                                <?php echo e($data->created_at->format("d M, Y")); ?>

                            </td>
                            <td class="status">
                                <p>
                                    <span><?php echo e($data->product?->name); ?></span>
                                </p>
                            </td>

                            <?php
                                $user = Auth::guard('web')->user();
                                $order_product = \App\Models\OrderProducts::where(['order_id' => $data->order_id, 'product_id' => $data->product?->id])->first();
                            ?>
                            <td class="amount">
                                <?php echo e(amount_with_currency_symbol($order_product->price)); ?>

                            </td>
                            <td>
                                <?php echo e($data->status == 1 ? __('Refunded') : __('Not Refunded')); ?>

                            </td>
                            <td class="table-btn">
                                <div class="btn-wrapper">
                                    <a href="<?php echo e(route('tenant.user.dashboard.package.order', $data->order?->id)); ?>" class="btn-default rounded-btn"> <?php echo e(__('View details')); ?></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- Order history end-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/refund/refund-list.blade.php ENDPATH**/ ?>