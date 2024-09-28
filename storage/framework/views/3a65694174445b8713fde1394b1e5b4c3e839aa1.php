<?php $__env->startSection('title'); ?>
    <?php echo e(__('Order Details')); ?>

<?php $__env->stopSection(); ?>

<?php
    $order_meta = json_decode($order->payment_meta);
?>


<?php $__env->startSection('section'); ?>
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/common/css/select2.min.css')); ?>">
    <style>
        .order-wrapper {
            padding: 30px;
        }
        .order-wrapper-flex {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        .order-status-wrap .order-wrapper .btn-wrapper .order-btn-custom {
            display: inline-block;
            font-weight: 600;
            background-color: var(--form-bg-color);
            color: #999999;
            padding: 7px 26px 9px;
            border-radius: 30px;
            text-transform: capitalize;
        }
        .order-status-wrap .order-wrapper .btn-wrapper .order-btn-custom.status {
            background-color: #00B106;
            color: #fff;
        }

        .order-status-wrap .order-status-inner .order-number {
            font-family: var(--heading-color);
            font-size: 20px;
            font-weight: 700;
            color: var(--heading-color);
            display: block;
            text-transform: capitalize;
        }
        .order-status-wrap .order-status-inner .price {
            font-family: var(--heading-color);
            font-size: 30px;
            font-weight: 500;
            color: var(--main-color-one);
            display: block;
            line-height: 44px;
            margin-top: 10px;
        }
        .order-status-wrap .order-status-inner .date,
        .order-status-wrap .order-status-inner .time {
            display: block;
            color: #999999;
        }
    </style>

        <!-- Order status start-->
        <div class="order-status-wrap order-details-page">
            <div class="complete order-wrapper">
                <div class="order-wrapper-flex">
                    <div class="order-wrap-single">
                        <div class="order-status-inner">
                            <span class="order-number"> <?php echo e(__("order")); ?> #<?php echo e($order->id); ?></span>
                            <span class="price"><?php echo e(amount_with_currency_symbol($order->total_amount)); ?></span>
                        </div>
                    </div>
                    <div class="order-wrap-single">
                        <div class="order-status-inner">
                            <span class="date"><?php echo e($order->created_at?->format("M d, Y")); ?></span>
                            <span class="time"><?php echo e($order->created_at?->format("h:i A")); ?></span>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapper d-flex flex-wrap justify-content-end gap-2 mt-3">
                    <?php
                        $status_color = $order->status == 'pending' ? 'bg-warning' : 'bg-success';
                        $payment_status_color = $order->payment_status == 'pending' ? 'bg-warning' : 'bg-success';
                    ?>
                    <span class="order-btn-custom status <?php echo e($status_color); ?>"><?php echo e(__('Status:')); ?> <?php echo e(__($order->status)); ?></span>
                    <span class="order-btn-custom status <?php echo e($payment_status_color); ?>"><?php echo e(__('Payment:')); ?> <?php echo e(__($order->payment_status)); ?></span>
                    <?php if($order->transaction_id): ?>
                        <span class="order-btn-custom status"><?php echo e(__('Transaction ID').': '.$order->transaction_id); ?></span>
                    <?php endif; ?>
                </div>
            </div>




























        </div>
        <!-- Order status end-->

        <!-- Order summery start -->
        <div class="order-inner-content-wrap">
            <h4 class="title"><?php echo e(__("order details")); ?></h4>
            <div class="billing-info">
                <div class="date-time">
                    <span class="date"><?php echo e($order->created_at?->format("M d, Y")); ?></span>
                    <span class="time"><?php echo e($order->created_at?->format("h:i A")); ?></span>
                </div>

                <div class="address">
                    <?php
                        $refund = \Modules\RefundModule\Entities\RefundProduct::where(['user_id' => Auth::guard('web')->user()->id, 'order_id' => $order->id])->first();
                    ?>

                    <?php if(isset($refund) && !empty($refund)): ?>
                        <p><?php echo e(__('Refund Request is Already Sent')); ?></p>
                    <?php endif; ?>

                    <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#refundModal"><?php echo e(__('Request Refund')); ?></a>
                    <h5 class="topic-title"><?php echo e(__("billing information")); ?></h5>
                    <p class="address"><?php echo e($order->address); ?></p>
                </div>
            </div>

            <ul class="order-summery-list">
                <li class="single-order-summery border-bottom">
                    <div class="content border-bottom ex">
                                    <span class="subject text-deep">
                                        <?php echo e(__("product")); ?>

                                    </span>
                        <span class="object text-deep">
                                        <?php echo e(__("subtotal")); ?>

                                    </span>
                    </div>

                    <ul class="internal-order-summery-list">
                        <?php $__currentLoopData = json_decode($order->order_details) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="internal-single-order-summery">
                                            <span class="internal-subject"><?php echo render_image_markup_by_attachment_id($product->options?->image); ?> <?php echo e($product?->name); ?>

                                                <?php if(!empty($product->options?->color_name)): ?>
                                                    : <?php echo e(__("Size")); ?> : <?php echo e($product->options?->color_name); ?> ,
                                                <?php endif; ?>

                                                <?php if(!empty($product->options?->size_name)): ?>
                                                    <?php echo e(__("Color")); ?> : <?php echo e($product->options?->size_name); ?>

                                                <?php endif; ?>

                                                <?php if(!empty($product->options?->attributes)): ?>
                                                    ,
                                                    <?php $__currentLoopData = $product->options?->attributes ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($key); ?> : <?php echo e($value); ?> <?php if($loop->last): ?> , <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <i class="las la-times icon"></i>
                                                <span class="times text-deep"><?php echo e($product->qty); ?></span>
                                            </span>
                                <span class="internal-object">
                                                <?php echo e(amount_with_currency_symbol(($product->price * $product->qty) ?? 0)); ?>

                                            </span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li class="single-order-summery border-bottom">
                    <div class="content">
                                    <span class="subject text-deep">
                                        <?php echo e(__("subtotal")); ?>

                                    </span>
                        <span class="object text-deep">
                                        <?php echo e(amount_with_currency_symbol($order_meta->subtotal ?? 0)); ?>

                                    </span>
                    </div>
                </li>
                <li class="single-order-summery">
                    <?php
                        $coupon = [];
                        $coupon_amount = '';
                        if ($order->coupon)
                        {
                            $coupon = \Modules\CouponManage\Entities\ProductCoupon::where('code', $order->coupon)->first();
                            $coupon_amount = $coupon->discount_type == 'percentage' ? $coupon->discount.'%' : amount_with_currency_symbol($coupon->discount);
                        }
                    ?>
                    <div class="content">
                                    <span class="subject text-deep">
                                        <?php echo e(__("coupon discount")); ?>

                                    </span>
                        <span class="object">
                                        <?php echo e($coupon ? '-'.$coupon_amount : 0); ?>

                                    </span>
                    </div>
                </li>
                <li class="single-order-summery">
                    <div class="content">
                                    <span class="subject text-deep">
                                        <?php echo e(__("tax")); ?>

                                    </span>
                        <span class="object">
                                        <?php echo e($order_meta->product_tax); ?>%
                                    </span>
                    </div>
                </li>
                <li class="single-order-summery border-bottom">
                    <div class="content">
                                    <span class="subject text-deep">
                                        <?php echo e(__("shipping cost")); ?>

                                    </span>
                        <span class="object">
                                        +<?php echo e(amount_with_currency_symbol($order_meta->shipping_cost)); ?>

                                    </span>
                    </div>
                </li>
                <li class="single-order-summery border-bottom">
                    <div class="content total">
                                    <span class="subject text-deep color-main">
                                        <?php echo e(__("total")); ?>

                                    </span>
                        <span class="object text-deep color-main">
                                        <?php echo e(amount_with_currency_symbol($order_meta->total)); ?>

                                    </span>
                    </div>
                </li>
                <li class="single-order-summery">
                    <div class="content total">
                                    <span class="subject text-deep">
                                        <?php echo e(__("payment method")); ?>

                                    </span>
                        <span class="object">
                                        <?php echo e(__(str_replace('_',' ',$order->payment_gateway)) ?? __("cash on delivery")); ?>

                                    </span>
                    </div>
                </li>
            </ul>
            <!-- Order summery end     -->
        </div>
        <!-- Order summery end -->


        <!-- Modal -->
        <div class="modal fade" id="refundModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Refund Request')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo e(route('tenant.user.dashboard.package.order.refund')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                            <div>
                                <h5 class="order-number"> <?php echo e(__("Order")); ?> #<?php echo e($order->id); ?></h5>

                                <div class="d-flex gap-2">
                                    <h5 class="price"><?php echo e(amount_with_currency_symbol($order->total_amount)); ?></h5>
                                    <div class="btn-wrapper">
                                        <?php
                                            $status_color = $order->status == 'pending' ? 'bg-warning' : 'bg-success';
                                            $payment_status_color = $order->payment_status == 'pending' ? 'bg-warning' : 'bg-success';;
                                        ?>
                                        <span class="p-1 text-dark <?php echo e($status_color); ?>"><?php echo e(__('Status:')); ?> <?php echo e(__($order->status)); ?></span>
                                        <span class="p-1 text-dark <?php echo e($payment_status_color); ?>"><?php echo e(__('Payment:')); ?> <?php echo e(__($order->payment_status)); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <span class="date"><?php echo e($order->created_at?->format("M d, Y")); ?></span>
                                <span class="time"><?php echo e($order->created_at?->format("h:i A")); ?></span>
                            </div>

                            <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                            <?php if(count(json_decode($order->order_details, true)) > 1): ?>
                                <div>
                                    <label for="refund_select"><?php echo e(__('Please select ordered products')); ?></label>
                                    <select class="form--control select2" name="refund_products[]" id="refund_select" multiple="multiple">
                                        <?php $__currentLoopData = json_decode($order->order_details); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?> x <?php echo e($product->qty); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            <?php else: ?>
                                <input type="hidden" name="refund_products[]" value="<?php echo e(current(json_decode($order->order_details))->id); ?>">
                            <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?php echo e(__('Discard')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit Request')); ?></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(global_asset('assets/common/js/select2.min.js')); ?>"></script>
    <script>
        $(function (){
            $(document).ready(function() {
                $('.select2').select2();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/order-details.blade.php ENDPATH**/ ?>