<div class="col-xxl-4 col-lg-5">
    <div class="related-books-wrapper">
        <h3 class="related-books-title"> <?php echo e(__('Related Books')); ?> </h3>
        <div class="single-related-books-inner mt-5">
            <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $dynamic_discount = get_digital_product_dynamic_price($product);

                    $regular_price = $product->regular_price;
                    $sale_price = $product->sale_price;

                    if (!is_null($product->promotional_date) && !is_null($product->promotional_price))
                    {
                        $sale_price = $product->promotional_price;
                    }
                ?>

                <div class="single-related-books mt-4">
                    <div class="single-upcoming upcoming-padding-top">
                        <div class="single-upcoming-wrapper bg-white">
                            <div class="single-upcoming-contents">

                                <?php if($dynamic_discount['discount'] > 0): ?>
                                    <div class="global-badge">
                                        <span class="global-badge-box"> <?php echo e($dynamic_discount['discount']); ?>% <?php echo e(__('off')); ?> </span>
                                    </div>
                                <?php endif; ?>

                                <?php if(!empty($product->additionalFields?->badge_id)): ?>
                                    <div class="global-badge">
                                        <span class="global-badge-box bg-new"> <?php echo e($product->additionalFields?->badge?->name); ?> </span>
                                    </div>
                                <?php endif; ?>

                                <div class="single-upcoming-thumb">
                                    <a href="<?php echo e(route('tenant.digital.shop.product.details', $product->slug)); ?>">
                                        <?php echo render_image_markup_by_attachment_id($product->image_id, 'product-image'); ?>

                                    </a>
                                </div>
                                <h3 class="single-upcoming-contents-title">
                                    <a href="javascript:void(0)"> <?php echo e(Str::words($product->name, 4)); ?> </a>
                                </h3>

                                    <?php if(!empty($product->additionalFields?->author)): ?>
                                        <span class="single-upcoming-contents-subtitle mt-2"> <?php echo e(__('by')); ?> <span class="fw-500 color-light"><?php echo e($product->additionalFields?->author?->name); ?></span></span>
                                    <?php endif; ?>

                                <div class="rating-wrap mt-2">
                                    <?php echo render_product_star_rating_markup_with_count($product); ?>

                                </div>
                            </div>
                            <div class="single-upcoming-bottom bottom-border-top">
                                <div class="single-upcoming-bottom-flex d-flex align-items-center">
                                    <div class="price-update-through">
                                        <?php if($product->accessibility != 'free'): ?>
                                            <?php if(!empty($sale_price) && $sale_price > 0): ?>
                                                <span class="flash-prices color-one"> <?php echo e(float_amount_with_currency_symbol($sale_price)); ?> </span>
                                                <span class="flash-old-prices"> <?php echo e(float_amount_with_currency_symbol($regular_price)); ?> </span>
                                            <?php else: ?>
                                                <span class="flash-prices color-one"> <?php echo e(float_amount_with_currency_symbol($regular_price)); ?> </span
                                           <?php endif; ?>
                                        <?php else: ?>
                                            <span class="flash-prices color-one"> <?php echo e(__('Free')); ?> </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/electro/frontend/digital-shop/product_details/partials/related-products.blade.php ENDPATH**/ ?>