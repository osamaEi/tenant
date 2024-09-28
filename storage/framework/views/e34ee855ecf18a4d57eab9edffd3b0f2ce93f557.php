<head>
    <style>
        .container-pop-third {
            margin: auto;
            margin-bottom: 60px;
            width: 90%;
        }

        .gallery-pop-third {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            /* Add gap between grid items */
        }

        .box-pop-third {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box-pop-third.one {
            position: relative;
            grid-row: 1;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            border-radius: 15px;
        }

        .box-pop-third.one img {
            width: 100%;
            height: auto;
            grid-row: 1 !important;
            object-fit: cover;
            border-radius: 15px;
            transition: .3s;
        }

        .box-pop-third.one img:hover {
            transform: scale(1.1);
        }

        .box-pop-third.one .text {
            text-align: justify;
            padding: 10px;
            top: 20px;
            right: 20px;
            position: absolute;
        }

        .box-pop-third.one .text h5 {
            color: #373f50;
            font-size: 32px;
            font-weight: 700;
        }

        .box-pop-third.one .text p {
            color: #fc7096;
            font-weight: 700;
        }

        .box-pop-third.two {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .box-pop-third.two div {
            border-radius: 15px;
            width: 267px;
            height: auto;
            /* Set height to auto for dynamic content */
            margin-bottom: 5px;
            position: relative;
            text-align: center;
        }

        .box-pop-third.two img {
            width: 90%;
            padding: 15px 0px;
            margin: auto;
            cursor: pointer;
            border-radius: 15px;
            transition: 0.3s;
        }

        .box-pop-third.two img:hover {
            transform: scale(1.1);
        }

        .box-pop-third.two span {
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            line-height: 32px;
            padding: 0 8px;
            border-radius: 20px;
            background-color: #FFC12B;
            display: inline-block;
            margin-bottom: 10px;
            position: absolute;
            top: 8px;
            left: 10px;
        }

        .text-info-pop-third {
            margin-top: 10px;
            text-align: center;
        }

        .text-info-pop-third h3 {
            color: #333;
            line-height: 25px;
            font-size: 13px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .text-info-pop-third h3:hover {
            color: #333;

        }

        .text-info-pop-third .price {
            color: #ff6f96;
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            display: block !important;
            margin-bottom: 8px !important;
        }

        .text-info-pop-third p {
            font-weight: bold;
            font-size: 15px;
            color: #6a6a6a;
            transition: .3s;
            cursor: pointer;
        }

        .text-info-pop-third p:hover {
            color: #ff6f96;
        }

        .flex-pop-third {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 16px;
        }

        .box-pop-third.two div:last-child {
            background: transparent;
            overflow: hidden;
        }

        .new-p-pop-third {
            display: none;
            color: white;
            background: #f2b30c;
            font-weight: 500;
            font-size: 19px;
            width: fit-content;
            position: relative;
            top: 10px;
            padding: 0 7px;
            right: 12px;
            border-radius: 7px;
        }

        .link-see-pop a {
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .link-see-pop a:hover {
            color: #ff6f96 !important;

        }

        @media(max-width: 1024px) {
            .box-pop-third.one {
                /*display:none;*/
            }

            .gallery-pop-third {
                display: flow;
            }
        }

        @media(max-width: 767px) {
            /*.container-pop-third {*/
            /*    margin-top: -488px;*/
            /*}*/

            .gallery-pop-third {
                flex-direction: column-reverse;
                display: flex;
            }
        }

        /* @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1305px !important;
            }
        } */

        .icon-overlay-pop-third {
            position: absolute !important;
            display: flex;
            flex-direction: column;
            gap: 10px;
            top: 50px;
            right: -100px;
            /* Start off-screen */
            transition: right 0.5s ease;
            width: 60px;
        }

        .box-pop-third.two:hover .icon-overlay-pop-third {
            right: 20px;
        }

        .box-pop-third.two {
            position: relative;
            /* Parent needs relative positioning */
        }

        .icon-overlay-pop-third a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            color: #fc7096;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .icon-overlay-pop-third a:hover {
            background-color: #ff6f96;
            color: white;
        }

        .icon-overlay-pop-third .icon-heart {
            color: #fc7096;
        }

        .icon-overlay-pop-third .icon-eye {
            color: #333;
        }

        .icon-overlay-pop-third .icon-bag {
            color: #fc7096;
        }

        .icon-overlay-pop-third a i {
            font-size: 18px;
        }

        .title-pro-third {
            margin-top: 60px;
            text-align: justify;
            margin-bottom: 36px;
            color: #fe628c;
            font-weight: bold;
            font-size: 34px;
        }

        @media(max-width: 767px) {

            .title-pro-third {
                text-align: center;
                font-size: 29px;

                margin-top: 130px;
            }
        }
        
        .collection-flex-pop-icon a {
    color: #ffffff !important;
    background: #f83a26 !important;
    font-weight: bold !important; 
    font-size: 16px !important;
    padding: 7px 13px !important;
    margin-top: 12px !important;
    border: 2px solid #f83a26;
    transition: 0.3s;
    
}

.collection-flex-pop-icon:hover a{
    color: #f83a26 !important;
    background: #ffffff !important;

}
    </style>
</head>

<!-- Start First Section -->
<section class="container-pop-third">
    <h2 class="title-pro-third"> متجر فلاش
    </h2>

    <div class="gallery-pop-third">
        <div class="flex-pop-third">

            <?php $__currentLoopData = $data['products'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box-pop-third two">
                <div class="image-contents-third" style="position: relative;">
                    <div class="category-thumb" style="position: relative; z-index: 2; background: #f5f5f5;">
                        <p class="new-p-pop-third">new</p>
                        <?php echo render_image_markup_by_attachment_id($product->image_id, 'lazyloads'); ?>


                        <!-- Start of icons overlay -->
                        <div class="icon-overlay-pop-third">
                            <a href="#" class="icon icon-heart">
                                <i class="las la-heart"></i>
                            </a>
                            <a href="<?php echo e(route('tenant.products.single-quick-view', $product->slug)); ?>"
                                class="icon icon-eye">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="icon icon-bag add-to-cart-btn"
                                data-product_id="<?php echo e($product->id); ?>">
                                <i class="las la-shopping-bag"></i>
                            </a>
                        </div>
                        <!-- End of icons overlay -->
                    </div>
                </div>
                <div class="text-info-pop-third">
                    <h3 class="title"><?php echo e($product->name); ?></h3>
                    <!-- Display price dynamically -->
                    <p class="price">
                        <?php echo e(amount_with_currency_symbol($product->sale_price)); ?>

                        <?php if($product->regular_price > $product->sale_price): ?>
                        <span class="old-price"><?php echo e(amount_with_currency_symbol($product->regular_price)); ?></span>
                        <?php endif; ?>
                    </p>
                    <p class="link-see-pop">
                    <div style="background: transparent !important" class="collection-flex-pop-icon">
                        <?php if($product->inventory_detail_count < 1): ?> <a href="javascript:void(0)"
                            class="shopping-icon cart-loading add-to-cart-btn" data-product_id="<?php echo e($product->id); ?>">
                            <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            <?php else: ?>
                            <a href="javascript:void(0)" style=""
                                class="shopping-icon cart-loading product-quick-view-ajax"
                                data-action-route="<?php echo e(route('tenant.products.single-quick-view', $product->slug)); ?>">
                                <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            <?php endif; ?>
                    </div>
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="box-pop-third one">
            <img src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-girl.jpg" alt="unknown image" />
            <div class="text">
                <h5>ملابس للفتيات</h5>
            </div>
        </div>
    </div>
</section>
<!-- End First Section -->

<!-- Flash Store area starts -->
<section style="display: none;" class="flash-store-area" data-padding-top="<?php echo e($data['padding_top']); ?>"
    data-padding-bottom="<?php echo e($data['padding_bottom']); ?>">
    <div class="container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left section-title-two">
                    <h2 class="title"> <?php echo e($data['title'] ?? ''); ?> </h2>

                    <?php if(!empty($data['see_all_url']) && !empty($data['see_all_text'])): ?>
                    <a href="<?php echo e($data['see_all_url']); ?>">
                        <span class="see-all fs-18"> <?php echo e($data['see_all_text']); ?> </span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row margin-top-10">
            <div class="col-lg-12 margin-top-30">
                <?php
                $phone_screen_products = get_static_option('phone_screen_products_card') ?? 1;
                ?>
                <div class="global-slick-init flash-slider nav-style-one dot-style-one slider-inner-margin"
                    data-infinite="true" data-arrows="true" data-swipeToSlide="true" data-autoplaySpeed="3000"
                    data-autoplay="true" data-swipeToslide="true" data-slidesToShow="4"
                    data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                    data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                    data-responsive='[{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"arrows": false,"dots": true,"slidesToShow": 3}},{"breakpoint": 768, "settings": { "arrows": false,"dots": true,"slidesToShow": <?php echo e($phone_screen_products); ?> } }]'
                    data-rtl="<?php echo e(get_user_lang_direction() == 1 ? 'true' : 'false'); ?>">
                    <?php $__currentLoopData = $data['products'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $sale_data = get_product_dynamic_price($product);
                    $regular_price = $sale_data['regular_price'];
                    $sale_price = $sale_data['sale_price'];
                    $discount = $sale_data['discount'];

                    $delay = '.1s';
                    $class = 'fadeInUp';

                    if ($loop->even)
                    {
                    $delay = '.2s';
                    $class = 'fadeInDown';
                    }
                    ?>

                    <div class="signle-collection bg-item-four radius-20 wow <?php echo e($class); ?>" data-wow-delay="<?php echo e($delay); ?>">
                        <div class="collction-thumb">
                            <a href="<?php echo e(to_product_details($product->slug)); ?>">
                                <?php echo render_image_markup_by_attachment_id($product->image_id, 'lazyloads'); ?>

                            </a>

                            <?php echo $__env->make(include_theme_path('shop.partials.product-options'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php if(!empty($discount)): ?>
                            <span class="sale bg-color-one sale-radius-1"> <?php echo e(__('Sale')); ?> </span>
                            <?php endif; ?>
                        </div>
                        <div class="collection-contents">
                            <h2 class="collection-title ff-jost">
                                <a href="<?php echo e(to_product_details($product->slug)); ?>"> <?php echo product_limited_text($product->name, 'title'); ?> </a>
                            </h2>
                            <div class="collection-flex">
                                <div class="price-update-through margin-top-15">
                                    <span class="fs-22 ff-roboto fw-500 flash-prices color-one">
                                        <?php echo e(amount_with_currency_symbol(calculatePrice($sale_price, $product))); ?> </span>
                                    <span class="fs-18 flash-old-prices">
                                        <?php echo e(amount_with_currency_symbol($regular_price)); ?> </span>
                                </div>
                                <div class="collection-flex-icon">
                                    <?php if($product->inventory_detail_count < 1): ?> <a href="javascript:void(0)"
                                        class="shopping-icon cart-loading add-to-cart-btn"
                                        data-product_id="<?php echo e($product->id); ?>">
                                        <i class="las la-shopping-bag"></i>
                                        </a>
                                        <?php else: ?>
                                        <a href="javascript:void(0)"
                                            class="shopping-icon cart-loading product-quick-view-ajax"
                                            data-action-route="<?php echo e(route('tenant.products.single-quick-view', $product->slug)); ?>">
                                            <i class="las la-shopping-bag"></i>
                                        </a>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Flash Store area end --><?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/tenant/casual/product/flash_store.blade.php ENDPATH**/ ?>