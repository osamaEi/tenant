<head>
    <style>
    .store-tabs li::after{
        display: none !important;
    }
    .store-tabs li:not(:last-child) {
    margin-bottom: 21px !important;
}
    .tabs.store-tabs.product-list li {
        width: 100%;
    text-align: right;
    padding-right: 8px;
    border-radius: 6px;
    }
    .tabs.store-tabs.product-list li:hover {
        background-color: #0d6efd;
        color: white;
    }
    .tabs.store-tabs.product-list {
        background: whitesmoke;
        border-radius: 11px;
        padding: 32px;
    }
    
    .bg-item-four {
        background: #f5f5f5;
    }

    .collection-title.ff-jost a{
        color: #000000 !important;
    }
    
    .signle-collection .collection-contents .collection-title {
        font-size: 23px;
        text-align: center;
    }
    
    .fs-22.ff-roboto.fw-500.flash-prices.color-one {
        color: #ff6f96 !important;
    }
    
    </style>
</head>

<!-- Store area Starts -->
<section style="display:none;" class="store-area" data-padding-top="<?php echo e($data['padding_top']); ?>" data-padding-bottom="<?php echo e($data['padding_bottom']); ?>">
    <div class="container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left section-title-two">
                    <h2 class="title"> <?php echo e($data['title']); ?> </h2>

                    <?php if(!empty($data['see_all_text']) && !empty($data['see_all_url'])): ?>
                        <span class="see-all fs-18"> <?php echo e($data['see_all_text']); ?> </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row margin-top-10">
            <div class="col-lg-3 margin-top-30">
                <div class="store-tab-area">
                    <ul class="tabs store-tabs product-list">
                        <?php
                            $all = !empty($data['categories']) ? $data['categories']->pluck('id')->toArray() : '';
                            $allIds = implode(',', $all);
                        ?>

                        <li class="list active"
                            data-limit="<?php echo e($data['product_limit']); ?>"
                            data-tab="all"
                            data-all-id="<?php echo e($allIds); ?>"
                            data-sort_by="<?php echo e($data['sort_by']); ?>"
                            data-sort_to="<?php echo e($data['sort_to']); ?>"
                            data-filter="*"><?php echo e(__('All')); ?></li>
                        <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list"
                                data-tab="<?php echo e($category->slug); ?>"
                                data-limit="<?php echo e($data['product_limit']); ?>"
                                data-sort_by="<?php echo e($data['sort_by']); ?>"
                                data-sort_to="<?php echo e($data['sort_to']); ?>"><?php echo e($category->name); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="tab-wrapper">
                    <div class="row markup_wrapper">
                        <?php $__currentLoopData = $data['products'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $data_info = get_product_dynamic_price($product);
                                $campaign_name = $data_info['campaign_name'];
                                $regular_price = $data_info['regular_price'];
                                $sale_price = $data_info['sale_price'];
                                $discount = $data_info['discount'];

                                $delay = '.1s';
                                $class = 'fadeInUp';

                                if ($loop->even)
                                {
                                    $delay = '.2s';
                                    $class = 'fadeInDown';
                                }
                            ?>

                            <div class="col-xl-4 col-md-6 col-sm-6 col-<?php echo e(productCards()); ?> margin-top-30">
                                <div class="signle-collection bg-item-four radius-20" style="background: #f5f5f5;">
                                    <div class="collction-thumb">
                                        <a href="<?php echo e(to_product_details($product->slug)); ?>">
                                            <?php echo render_image_markup_by_attachment_id($product->image_id, 'lazyloads'); ?>

                                        </a>

                                        <?php echo $__env->make(include_theme_path('shop.partials.product-options'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <?php if($discount): ?>
                                            <span class="sale bg-color-one sale-radius-1"> <?php echo e(__('Sale')); ?> </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="collection-contents">
                                        <h2 class="collection-title ff-jost">
                                            <a href="<?php echo e(to_product_details($product->slug)); ?>"> <?php echo product_limited_text($product->name, 'title'); ?> </a>
                                        </h2>
                                        <div class="collection-flex">
                                            <div class="price-update-through margin-top-15">
                                                <span class="fs-22 ff-roboto fw-500 flash-prices color-one"> <?php echo e(amount_with_currency_symbol(calculatePrice($sale_price, $product))); ?> </span>
                                                <span class="fs-18 flash-old-prices"> <?php echo e(amount_with_currency_symbol($regular_price)); ?> </span>
                                            </div>
                                            <div class="collection-flex-icon">
                                                <?php if($product->inventory_detail_count < 1): ?>

                                                <?php else: ?>
                                                    <a href="javascript:void(0)" class="shopping-icon cart-loading product-quick-view-ajax"
                                                       data-action-route="<?php echo e(route('tenant.products.single-quick-view', $product->slug)); ?>">
                                                        <i class="las la-shopping-bag"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Store area end -->
<?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/tenant/casual/product/product_type_list.blade.php ENDPATH**/ ?>