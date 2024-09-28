<?php
    $regular_price = $product->regular_price;
    $sale_price = $product->sale_price;

    if (!is_null($product->promotional_date) && !is_null($product->promotional_price))
    {
        $sale_price = $product->promotional_price;
    }

    $image = get_attachment_image_by_id($product->image_id);
    $image_url = !empty($image) ? $image['img_url'] : '';
?>

<div class="book-details-product bg-white details-product-padding">
    <div class="book-details-product-flex">
        <div
            class="book-details-product-content-thumb book-details-product-thumb-border book-details-product-thumb-padding">
            <div class="book-details-product-thumb bg-image" style="background-image: url(<?php echo e($image_url); ?>);">
            </div>
        </div>
        <div class="book-details-product-contents">
            <?php echo render_product_star_rating_markup_with_count($product); ?>

            <h2 class="book-details-product-contents-title mt-2"> <?php echo e($product->name); ?> </h2>
            <span
                class="book-details-product-contents-subtitle mt-1"> <?php echo e($product->additionalFields?->author?->name); ?> </span>
            <div class="price-update-through mt-3">
                <?php if($product->accessibility != 'free'): ?>
                    <?php if(!empty($sale_price) && $sale_price > 0): ?>
                        <span
                            class="fs-24 fw-500 flash-prices color-one"> <?php echo e(float_amount_with_currency_symbol($sale_price)); ?> </span>
                        <span
                            class="fs-16 flash-old-prices"> <?php echo e(float_amount_with_currency_symbol($regular_price)); ?> </span>
                    <?php else: ?>
                        <span
                            class="fs-24 fw-500 flash-prices color-one"> <?php echo e(float_amount_with_currency_symbol($regular_price)); ?> </span>
                    <?php endif; ?>
                <?php else: ?>
                    <span class="fs-24 fw-500 flash-prices color-one"> <?php echo e(__('Free')); ?> </span>
                <?php endif; ?>

            </div>

            <?php if($product->downloads_count > 0): ?>
                <div class="book-details-product-contents-flex mt-4">
                    <div class="available-stock">
                        <?php echo e(__('Downloads')); ?> <span
                            class="available color-heading"> (<?php echo e($product->downloads_count); ?> <?php echo e(__('Copies')); ?>) </span>
                    </div>
                </div>
            <?php endif; ?>

            <div class="btn-wrapper mt-4">
                <?php if(!empty($product->preview_link)): ?>
                    <a href="<?php echo e($product->preview_link); ?>"
                       class="cmn-btn cmn-btn-outline-one cmn-btn-small color-one radius-0 mt-2 pdf_preview"> <?php echo e(__('Preview')); ?> </a>
                <?php endif; ?>

                <?php if(auth()->guard('web')->check()): ?>
                    <?php
                        $user = auth('web')->user();
                        $downloaded = \Modules\DigitalProduct\Entities\DigitalProductDownload::where(['user_id' => $user->id, 'product_id' => $product->id])->exists();
                    ?>
                <?php endif; ?>

                <?php if(isset($downloaded) && $downloaded): ?>
                    <a href="<?php echo e(route('tenant.user.dashboard.download.file', $product->slug)); ?>"
                       class="cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0 mt-2"> <?php echo e(__('Download')); ?> </a>
                <?php else: ?>
                    <a href="javascript:void(0)"
                       class="cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0 mt-2 add_to_cart_single_page"> <?php echo e(__('Add to Cart')); ?> </a>
                <?php endif; ?>
            </div>
            <div class="book-details-product-contents-category mt-4 mt-xxl-5">
                <ul class="book-details-product-contents-category-list">
                    <li class="book-details-product-contents-category-list-item">
                        <span class="category-para"> <?php echo e(__('Category:')); ?> </span>
                        <a class="fw-600 color-heading" href="javascript:void(0)"> <?php echo e($product?->category?->name); ?> </a>
                    </li>

                    <?php if(!empty($product->subCategory)): ?>
                        <li class="book-details-product-contents-category-list-item">
                            <span class="category-para"> <?php echo e(__('Subcategory:')); ?> </span>
                            <a class="fw-600 color-heading"
                               href="javascript:void(0)"> <?php echo e($product?->subCategory?->name); ?> </a>
                        </li>
                    <?php endif; ?>

                    <?php if(count($product->childCategory) > 0): ?>
                        <li class="book-details-product-contents-category-list-item">
                            <span class="category-para"> <?php echo e(__('Child category:')); ?> </span>

                            <?php $__currentLoopData = $product?->childCategory ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="fw-600 color-heading"
                                   href="javascript:void(0)"> <?php echo e($child_category->name); ?> </a><?php echo e(!$loop->last ? ',' : ''); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    <?php endif; ?>

                    <?php if(!empty($product->tag)): ?>
                        <li class="book-details-product-contents-category-list-item">
                            <span class="category-para"> <?php echo e(__('Tags:')); ?> </span>

                            <?php $__currentLoopData = $product->tag ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="fw-600 color-heading"
                                   href="javascript:void(0)"> <?php echo e($tag->tag_name); ?> </a><?php echo e(!$loop->last ? ',' : ''); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="book-details-product-contents-category-list">
                    <li class="book-details-product-contents-category-list-item">
                        <?php echo e($product->summary); ?>

                    </li>
                </ul>
            </div>
            <div class="single-blog-details-socials mt-4">
                <span class="single-blog-details-socials-title"> <?php echo e(__('Share to:')); ?> </span>
                <div class="single-blog-details-socials-icon">
                    <ul class="single-blog-details-socials-list">
                        <?php echo single_post_share_bookpoint($product->slug, $product->name, $image_url); ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/digital-shop/product_details/partials/details.blade.php ENDPATH**/ ?>