<?php $__currentLoopData = $cart_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-cart-row" data-product-id="<?php echo e($key); ?>" data-varinat-id="<?php echo e($data->variant_id); ?>">
        <td class="ff-jost" data-label="Product">
            <div class="product-name-table">
                <div class="thumbs bg-image radius-10"
                    <?php echo render_background_image_markup_by_attachment_id($data?->options?->image); ?>></div>
                <div class="carts-contents">
                    <?php
                        $slug = \Modules\Product\Entities\Product::select('id', 'slug')->find($data->id)?->slug;

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

                    <a href="<?php echo e(route('tenant.shop.product.details', $slug)); ?>" class="name-title"> <?php echo e($data->name); ?> </a>
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
        <td class="price-td" data-label="Price"> <?php echo e(amount_with_currency_symbol(calculatePrice($data->price, $data->options))); ?> </td>
        <td class="ff-jost" data-label="Quantity">
            <div class="product-quantity">
                                    <span class="substract">
                                        <i class="las la-minus"></i>
                                    </span>
                <input class="quantity-input" type="number" value="<?php echo e($data->qty); ?>">
                <span class="plus">
                                        <i class="las la-plus"></i>
                                    </span>
            </div>
        </td>
        <?php
            $subtotal = calculatePrice($data->price * $data->qty, $data->options);
        ?>
        <td class="price-td" data-label="Subtotal"> <?php echo e(amount_with_currency_symbol($subtotal)); ?> </td>
        <td class="ff-jost" data-label="Close" data-product_hash_id="<?php echo e($data->rowId); ?>">
            <div class="close-table-cart">
                <i class="las la-times"></i>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/cart/markup_for_controller/cart_products.blade.php ENDPATH**/ ?>