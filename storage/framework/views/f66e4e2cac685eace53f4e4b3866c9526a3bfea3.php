<div class="col-xl-<?php echo e($wishlist ? "10 mx-auto" : "8"); ?> mt-4">
    <div class="table-list-content table-cart-clear">
        <div class="table-responsive table-responsive--md">
            <table class="custom--table table-border radius-10">
                <thead class="head-bg">
                <tr>
                    <th> <?php echo e(__('Product')); ?> </th>
                    <th> <?php echo e(__('Price')); ?> </th>
                    <th> <?php echo e(__('Quantity')); ?> </th>
                    <th> <?php echo e(__('Subtotal')); ?> </th>
                    <th> <?php echo e(__('Action')); ?> </th>
                </tr>
                </thead>
                <tbody id="cart_tbody">
                <?php $__currentLoopData = $cart_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        if ($data->options->type == \App\Enums\ProductTypeEnum::DIGITAL)
                            {
                                $slug = \Modules\DigitalProduct\Entities\DigitalProduct::select('id', 'slug')->find($data->id)?->slug;
                            } else {
                                $slug = \Modules\Product\Entities\Product::select('id', 'slug')->find($data->id)?->slug;
                            }
                    ?>
                    <tr class="table-cart-row" data-product-id="<?php echo e($key); ?>" data-varinat-id="<?php echo e($data->variant_id); ?>">
                        <td class="ff-jost" data-label="Product">
                            <div class="product-name-table">
                                <div class="thumbs bg-image radius-10"
                                    <?php echo render_background_image_markup_by_attachment_id($data?->options?->image); ?>></div>
                                <div class="carts-contents">
                                    <?php
                                        if ($data->options->type == \App\Enums\ProductTypeEnum::DIGITAL)
                                        {
                                            $product = \Modules\DigitalProduct\Entities\DigitalProduct::find($data->id)->select('id', 'slug')->first();
                                            $product_details_route = route('tenant.digital.shop.product.details', $slug);
                                            $product_type = 'Digital';
                                        } else {
                                            $product = \Modules\Product\Entities\Product::find($data->id)->select('id', 'slug')->first();
                                            $product_details_route = route('tenant.shop.product.details', $slug);
                                            $product_type = 'Normal';
                                        }
                                    ?>
                                    <a href="<?php echo e($product_details_route); ?>"
                                       class="name-title"> <?php echo e($data->name); ?> </a>
                                    <p class="badge bg-primary text-white text-small" style="vertical-align: text-top"><?php echo e($product_type); ?></p>

                                    <span class="name-subtitle d-block mt-2">
                                        <?php if($data?->options?->color_name): ?>
                                            <?php echo e(__('Color:')); ?> <?php echo e($data?->options?->color_name); ?> ,
                                        <?php endif; ?>

                                        <?php if($data?->options?->size_name): ?>
                                            <?php echo e(__('Size:')); ?> <?php echo e($data?->options?->size_name); ?>

                                        <?php endif; ?>

                                        <?php if($data?->options?->attributes): ?>
                                            <br>
                                            <?php $__currentLoopData = $data?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($key.':'); ?> <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="price-td"
                            data-label="Price"> <?php echo e(amount_with_currency_symbol(calculatePrice($data->price, $data->options))); ?> </td>
                        <td class="ff-jost" data-label="Quantity">
                            <?php if($data->options->type == \App\Enums\ProductTypeEnum::PHYSICAL): ?>
                                <div class="product-quantity">
                                    <?php if(!$wishlist): ?>
                                        <span class="substract">
                                            <i class="las la-minus"></i>
                                        </span>
                                    <?php endif; ?>
                                    <input class="quantity-input"
                                           <?php echo e($wishlist ? "disabled='true' readonly='true'" : ""); ?> type="number"
                                           value="<?php echo e($data->qty); ?>">
                                    <?php if(!$wishlist): ?>
                                        <span class="plus">
                                            <i class="las la-plus"></i>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <div class="product-quantity">
                                    <input class="quantity-input" type="hidden" value="1">
                                </div>
                            <?php endif; ?>
                        </td>
                        <?php
                            $subtotal = calculatePrice($data->price, $data->options) * $data->qty;
                        ?>
                        <td class="price-td"
                            data-label="Subtotal"> <?php echo e(float_amount_with_currency_symbol($subtotal)); ?> </td>
                        <td class="ff-jost <?php echo e($wishlist ? "d-flex justify-content-around align-items-center" : ""); ?>"
                            data-label="Close" data-product_hash_id="<?php echo e($data->rowId); ?>">
                            <?php if($wishlist): ?>
                                <div class="move-to-wishlist">
                                    <i class="las la-cart-arrow-down align-items-center"></i>
                                </div>
                            <?php endif; ?>

                            <div class="close-table-<?php echo e($wishlist ? "wishlist" : "cart"); ?>">
                                <i class="las la-times"></i>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="table-update-btn margin-top-40">
            <a href="<?php echo e(url('shop')); ?>" class="btn-update btn-table btn-border-1"> <?php echo e(__('Continue Shopping')); ?> </a>

            <?php if(!$wishlist): ?>
                <a href="javascript:void(0)" class="btn-clear btn-table clear-cart-btn"> <?php echo e(__('Clear Cart')); ?> </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/cart/partials/cart_left_contents.blade.php ENDPATH**/ ?>