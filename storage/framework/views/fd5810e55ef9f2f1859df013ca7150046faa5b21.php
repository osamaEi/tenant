<?php if(isset($payment_details)): ?>
    <?php if(empty($payment_details)): ?>
        <?php
            header("Location: " . url('/'), true, 302);
            exit();
        ?>
    <?php endif; ?>
<?php endif; ?>


<?php $__env->startSection('title'); ?>
    <?php echo e(__('Payment Success From:')); ?> <?php echo e($payment_details->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Payment Success For:')); ?> <?php echo e($payment_details->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .billing-details li{
            text-transform: capitalize;
        }
        .vat-tax{
            font-size: 10px;
        }
        .download-invoice{
            display: flex;
            justify-content: space-between;
        }
        .download-invoice a{
            font-size: 20px;
            padding: 3px;
        }
        .download-invoice a:hover{
            background: #0d6efd;
            color: #ffffff;
        }
    </style>

    <div class="error-page-content" data-padding-bottom="100" data-padding-top="100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-success-area section-title margin-bottom-50 text-center">
                        <h1 class="title"><?php echo e(get_static_option('site_order_success_page_title')); ?></h1>
                        <p class="order-page-description section-para"><?php echo e(get_static_option('site_order_success_page_description')); ?></p>
                    </div>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="billing-wrappers">
                            <div class="billing-items">
                                <h2 class="billing-title"><?php echo e(__('Order Details')); ?></h2>
                                <ul class="billing-details">
                                    <li><strong><?php echo e(__('Order ID:')); ?></strong> #<?php echo e($payment_details->id); ?></li>
                                    <li><strong><?php echo e(__('Payment Type:')); ?></strong> <?php echo e($payment_details->checkout_type == 'cod' ? __('Cash On Delivery') : __('Digital Payment')); ?> </li>

                                    <?php if($payment_details->payment_gateway): ?>
                                        <li><strong><?php echo e(__('Payment Gateway:')); ?></strong> <?php echo e($payment_details->payment_gateway); ?></li>
                                    <?php endif; ?>

                                    <?php if(!empty($payment_details->coupon)): ?>
                                        <li><strong><?php echo e(__('Payable After Discount :')); ?></strong> <?php echo e(amount_with_currency_symbol($payment_details->total_amount)); ?></li>
                                    <?php endif; ?>

                                    <li><strong><?php echo e(__('Payment Status:')); ?></strong> <?php echo e($payment_details->payment_status); ?></li>

                                    <?php if($payment_details->transaction_id): ?>
                                        <li><strong><?php echo e(__('Transaction ID:')); ?></strong> <?php echo e($payment_details->transaction_id); ?></li>
                                    <?php endif; ?>

                                    <li><strong><?php echo e(__('Order Status:')); ?></strong> <?php echo e($payment_details->status); ?></li>







                                </ul>
                            </div>
                            <div class="billing-items">
                                <h2 class="billing-title"><?php echo e(__('Billing Details')); ?></h2>
                                <ul class="billing-details">
                                    <li><strong><?php echo e(__('Name:')); ?></strong> <?php echo e($payment_details->name); ?></li>
                                    <li><strong><?php echo e(__('Email:')); ?></strong> <span class="text-lowercase"><?php echo e($payment_details->email); ?></span></li>
                                </ul>
                                <div class="btn-wrapper margin-top-40">
                                    <?php if(auth()->guard('web')->check()): ?>
                                        <a href="<?php echo e(route('tenant.user.home')); ?>" class="boxed-btn rounded-0 btn btn-primary"><?php echo e(__('Go To Dashboard')); ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('tenant.frontend.homepage')); ?>" class="boxed-btn rounded-0 btn btn-primary"><?php echo e(__('Back To Home')); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content-area">
                            <div class="single-price-plan-01">
                                <div class="right-content-area">
                                    <div class="price-header">
                                        <h4 class="billing-title"><?php echo e(__('Order Details')); ?></h4>
                                    </div>
                                    <div class="price-body price-table">
                                        <table class="table">
                                            <thead>
                                                <th><?php echo e(__('Item')); ?></th>
                                                <th><?php echo e(__('Quantity')); ?></th>
                                                <th><?php echo e(__('Price')); ?></th>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = json_decode($payment_details->order_details); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="text-capitalize">
                                                            <?php echo e($item->name); ?>

                                                            <span class="name-subtitle d-block mt-2">
                                                                <?php if(!empty($item?->options?->color_name)): ?>
                                                                    <?php echo e(__('Color:')); ?> <?php echo e($item?->options?->color_name); ?> ,
                                                                <?php endif; ?>

                                                                <?php if(!empty($item?->options?->size_name)): ?>
                                                                    <?php echo e(__('Size:')); ?> <?php echo e($item?->options?->size_name); ?>

                                                                <?php endif; ?>

                                                                <?php if(!empty($item?->options?->attributes)): ?>
                                                                    <br>
                                                                    <?php $__currentLoopData = $item?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php echo e($key.':'); ?> <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </span>
                                                        </td>
                                                        <td>x<?php echo e($item->qty); ?></td>
                                                        <td><?php echo e(amount_with_currency_symbol($item->price)); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td class="font-weight-bold"><?php echo e(__('Tax:')); ?></td>
                                                    <td><?php echo e(amount_with_currency_symbol(json_decode($payment_details->payment_meta)?->product_tax)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="font-weight-bold"><?php echo e(__('Shipping:')); ?></td>
                                                    <td><?php echo e(amount_with_currency_symbol(json_decode($payment_details->payment_meta)?->shipping_cost)); ?></td>
                                                </tr>
                                                <?php if($payment_details->coupon): ?>
                                                    <tr>
                                                        <td></td>
                                                        <td class="font-weight-bold"><?php echo e(__('Discount:')); ?></td>
                                                        <td><?php echo e($payment_details->coupon_discounted.'%'); ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <td></td>
                                                    <td class="font-weight-bold"><?php echo e(__('Subtotal:')); ?></td>
                                                    <td><?php echo e(amount_with_currency_symbol(json_decode($payment_details->payment_meta)?->subtotal)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="font-weight-bold"><?php echo e(__('Total:')); ?></td>
                                                    <td><?php echo e(amount_with_currency_symbol($payment_details->total_amount)); ?> <small class="vat-tax"><?php echo e(__('(Incl TAX & Shipping)')); ?></small></td>
                                                </tr>
                                            </tbody>
                                        </table>
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

<?php echo $__env->make('tenant.frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/electro/frontend/payment/payment-success.blade.php ENDPATH**/ ?>