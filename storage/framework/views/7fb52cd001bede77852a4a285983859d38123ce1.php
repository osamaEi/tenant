<?php $__env->startSection('title'); ?>
    <?php echo e(__('Payment Logs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <style>
        .product-img{
            max-width: 80px;
        }
    </style>
    <?php if(count($download_list) > 0): ?>
        <div class="table-responsive">
            <!-- Order history start-->
            <div class="order-history-inner">
                <table>
                    <thead>
                    <tr>
                        <th>
                            <?php echo e(__('ID')); ?>

                        </th>
                        <th>
                            <?php echo e(__('Product')); ?>

                        </th>
                        <th>
                            <?php echo e(__('File')); ?>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $download_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $product = \Modules\DigitalProduct\Entities\DigitalProduct::find($data->product_id);
                        ?>

                        <tr class="completed">
                            <td class="order-numb">
                                #<?php echo e($data->id ?? 0); ?>

                            </td>
                            <td class="d-flex gap-2">
                                <?php echo render_image_markup_by_attachment_id($product->image_id, 'product-img'); ?>

                                <p><?php echo e($product->name); ?></p>
                            </td>

                            <td class="table-btn">
                                <div class="btn-wrapper">
                                    <a href="<?php echo e(route('tenant.user.dashboard.download.file', $product->slug)); ?>" class="btn-default rounded-btn"><?php echo e(__('Download')); ?></a>
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
            <?php echo e($download_list->links()); ?>

        </div>
    <?php else: ?>
        <div class="alert alert-warning"><?php echo e(__('No Order Found')); ?></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/download-list.blade.php ENDPATH**/ ?>