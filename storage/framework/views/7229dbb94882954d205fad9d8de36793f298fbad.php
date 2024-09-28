<?php $__env->startSection('title'); ?>
    <?php echo e(__('Order Details')); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Order Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4"><?php echo e(__('Order Details')); ?></h4>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-with-popover','data' => ['url' => ''.e(route(route_prefix().'admin.product.order.manage.all')).'','class' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-with-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route(route_prefix().'admin.product.order.manage.all')).'','class' => 'info']); ?><?php echo e(__('All Orders')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php
                            $order_meta = json_decode($order->payment_meta);
                        ?>

                        <!-- Order status start-->
                        <div class="order-status-wrap order-details-page">
                            <table class="order-status-inner">
                                <tbody>
                                <tr class="complete">
                                    <td>
                                        <span class="order-number"> <?php echo e(__("Order")); ?> #<?php echo e($order->id); ?></span>
                                        <span class="price"><?php echo e(amount_with_currency_symbol($order->total_amount)); ?></span>
                                    </td>
                                    <td>
                                        <span class=""><?php echo e($order->created_at?->format("M d, Y")); ?></span>
                                        <span class=""><?php echo e($order->created_at?->format("H:ia")); ?></span>
                                    </td>
                                    <td>
                                        <div class="btn-wrapper">
                                            <?php
                                                $refund_status = \Modules\RefundModule\Entities\RefundProduct::where(['status' => 1, 'order_id' => $order->id, 'user_id' => $order->user_id])->exists();
                                            ?>
                                            <span class="order-btn-custom status"><?php echo e(__('Order Status').': '.__($order->status)); ?></span>
                                            <span class="order-btn-custom status"><?php echo e(__('Payment Status').': '.($refund_status ? __('Refunded') : __($order->payment_status))); ?></span>

                                            <?php if($order->transaction_id): ?>
                                                <span class="order-btn-custom status"><?php echo e(__('Transaction ID').': '.$order->transaction_id); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Order status end-->

                        <!-- Order summery start -->
                        <div class="order-inner-content-wrap">
                            <div class="billing-info">
                                <div class="address">
                                    <h5 class="topic-title"><?php echo e(__("billing information")); ?></h5>
                                    <div class="d-flex gap-4">
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('Name:')); ?></span>
                                            <span><?php echo e($order->name); ?></span>
                                        </p>
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('Email:')); ?></span>
                                            <span><?php echo e($order->email); ?></span>
                                        </p>
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('Phone:')); ?></span>
                                            <span><?php echo e($order->phone); ?></span>
                                        </p>
                                    </div>
                                    <div class="d-flex gap-4">
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('Country:')); ?></span>
                                            <span><?php echo e($order->getCountry?->name); ?></span>
                                        </p>
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('State:')); ?></span>
                                            <span><?php echo e($order->getState?->name); ?></span>
                                        </p>
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('City:')); ?></span>
                                            <span><?php echo e($order->getCity?->name ?? ''); ?></span>
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <p>
                                            <span class="font-weight-bold"><?php echo e(__('Address:')); ?></span>
                                            <span><?php echo e($order->address); ?></span>
                                        </p>
                                    </div>
                                </div>

                                <?php if($order->message): ?>
                                    <div class="other_note">
                                        <div class="d-flex gap-4">
                                            <p>
                                                <span class="font-weight-bold"><?php echo e(__('Other Note:')); ?></span>
                                                <span><?php echo e($order->message); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
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

                                                <?php if(!empty($product->options->attributes)): ?>
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
                                        <?php echo e($coupon ? '-'.$coupon_amount : ''); ?>

                                    </span>
                                    </div>
                                </li>
                                <li class="single-order-summery">
                                    <div class="content">
                                    <span class="subject text-deep">
                                        <?php echo e(__("tax")); ?>

                                    </span>
                                        <span class="object">
                                        +<?php echo e(amount_with_currency_symbol($order_meta->product_tax)); ?>

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
                                        <?php echo e(__($order->payment_gateway) ?? __("Cash on delivery")); ?>

                                    </span>
                                    </div>
                                </li>
                            </ul>
                            <!-- Order summery end     -->
                        </div>
                        <!-- Order summery end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.markup'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make(route_prefix().'admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/admin/product-order-manage/order-view.blade.php ENDPATH**/ ?>