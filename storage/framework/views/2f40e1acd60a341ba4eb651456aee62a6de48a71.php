<head>
    <style>
        .container-pop {
            margin: auto;
            margin-bottom: 60px;

            width: 90%;
        }

        .gallery-pop {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            /* Add gap between grid items */
        }

        .box-pop {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box-pop.one {
            position: relative;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            border-radius: 15px;
        }

        .box-pop.one img {
            width: 100%;
            height: auto;
            /* Adjust height for responsiveness */
            object-fit: cover;
            border-radius: 15px;
            transition: .3s;
        }

        .box-pop.one img:hover {
            transform: scale(1.1);
        }

        .box-pop.one .text {
            text-align: justify;
            padding: 10px;
            top: 20px;
            right: 20px;
            position: absolute;
        }

        .box-pop.one .text h5 {
            color: #373f50;
            font-size: 32px;
            font-weight: 700;
        }

        .box-pop.one .text p {
            color: #fc7096;
            font-weight: 700;
        }

        .box-pop.two {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .box-pop.two div {
            border-radius: 15px;
            width: 267px;
            height: auto;
            /* Set height to auto for dynamic content */
            margin-bottom: 5px;
            position: relative;
            text-align: center;
        }

        .box-pop.two img {
            width: 90%;
            padding: 15px 0px;
            margin: auto;
            cursor: pointer;
            border-radius: 15px;
            transition: 0.3s;
        }

        .box-pop.two img:hover {
            transform: scale(1.1);
        }

        .box-pop.two span {
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

        .text-info-pop {
            margin-top: 10px;
            text-align: center;
        }

        .text-info-pop h3 {
            color: #333;
            line-height: 25px;
            font-size: 13px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .text-info-pop h3:hover {
            color: #333;

        }

        .text-info-pop .price {
            color: #ff6f96;
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            display: block !important;
        }

        .text-info-pop p {
            font-weight: bold;
            font-size: 15px;
            color: #6a6a6a;
            transition: .3s;
            cursor: pointer;
        }

        .text-info-pop p:hover {
            color: #ff6f96;
        }

        .flex-pop {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 0px;
        }

        .box-pop.two div:last-child {
            background: transparent;
            overflow: hidden;
        }

        .new-p-pop {
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
            .box-pop.one {
                /*display:none;*/
            }

            .gallery-pop {
                display: flow;
            }
        }

        @media(max-width: 767px) {
            /*.container-pop {*/
            /*    margin-top: -488px;*/
            /*}*/

            .gallery-pop {
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

        .icon-overlay-pop {
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

        .box-pop.two:hover .icon-overlay-pop {
            right: 20px;
            /* Slide it into view */
        }

        .box-pop.two {
            position: relative;
            /* Parent needs relative positioning */
        }

        .icon-overlay-pop a {
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

        .icon-overlay-pop a:hover {
            background-color: #ff6f96;
            color: white;
        }

        .icon-overlay-pop .icon-heart {
            color: #fc7096;
        }

        .icon-overlay-pop .icon-eye {
            color: #333;
        }

        .icon-overlay-pop .icon-bag {
            color: #fc7096;
        }

        .icon-overlay-pop a i {
            font-size: 18px;
        }

        .title-pro {
            margin-top: 60px;
            text-align: end;
            margin-bottom: 36px;

            color: #fe628c;
            font-weight: bold;
            font-size: 34px;
        }

        @media(max-width: 767px) {

            .title-pro {
                text-align: center;
                font-size: 29px;

                margin-top: 130px;
            }
        }
    </style>
</head>

<!-- Start First Section -->
<section class="container-pop">
    <h2 class="title-pro"> المجموعة الأشهر </h2>

    <div class="gallery-pop">
        <div class="flex-pop">

<?php $__currentLoopData = $data['blogs'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box-pop two">
                <div class="image-contents" style="position: relative;">
                    <div class="category-thumb" style="position: relative; z-index: 2; background: #f5f5f5;">
                        <p class="new-p-pop">new</p>
                        <?php echo render_image_markup_by_attachment_id($item->image_id, 'lazyloads'); ?>


                        <!-- Start of icons overlay -->
                        <div class="icon-overlay-pop">
                            <a href="#" class="icon icon-heart">
                                <i class="las la-heart"></i>
                            </a>
                            <a href="<?php echo e(route('tenant.products.single-quick-view', $item->slug)); ?>"
                                class="icon icon-eye">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="icon icon-bag add-to-cart-btn"
                                data-product_id="<?php echo e($item->id); ?>">
                                <i class="las la-shopping-bag"></i>
                            </a>
                        </div>
                        <!-- End of icons overlay -->
                    </div>
                </div>
                <div class="text-info-pop">
                    <h3 class="title"><?php echo e($item->name); ?></h3>
                    <!-- Display price dynamically -->
                    <p class="price">
                        <?php echo e(amount_with_currency_symbol($item->sale_price)); ?>

                        <?php if($item->regular_price > $item->sale_price): ?>
                        <span class="old-price"><?php echo e(amount_with_currency_symbol($item->regular_price)); ?></span>
                        <?php endif; ?>
                    </p>
                    <p class="link-see-pop">
                    <div style="background: transparent !important" class="collection-flex-pop-icon">
                        <?php if($item->inventory_detail_count < 1): ?> <a href="javascript:void(0)"
                            class="shopping-icon cart-loading add-to-cart-btn" data-product_id="<?php echo e($item->id); ?>">
                            <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            <?php else: ?>
                            <a href="javascript:void(0)" style="color:#333 !important;"
                                class="shopping-icon cart-loading product-quick-view-ajax"
                                data-action-route="<?php echo e(route('tenant.products.single-quick-view', $item->slug)); ?>">
                                <i class="las la-shopping-bag"></i> أضف إلي السلة
                            </a>
                            <?php endif; ?>
                    </div>
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="box-pop one">
            <img src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-boy.jpg" alt="unknown image" />
            <div class="text">
                <h5>ملابس للأطفال</h5>
            </div>
        </div>
    </div>
</section>
<!-- End First Section -->
<!-- Blog area start -->
<section style="display: none;" class="blog-area padding-top-50 padding-bottom-100" data-padding-top="<?php echo e($data['padding_top']); ?>"
    data-padding-bottom="<?php echo e($data['padding_bottom']); ?>">
    <div class="container custom-container-one">
        <div class="section-title text-left">
            <h2 class="title"> <?php echo e($data['title'] ?? ''); ?> </h2>
            <div class="append-news"></div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mt-4">
                <div class="global-slick-init recent-slider nav-style-one slider-inner-margin"
                    data-appendArrows=".append-news" data-infinite="true" data-arrows="true" data-dots="false"
                    data-slidesToShow="3" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                    data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                    data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                    data-responsive='[{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 2}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 768, "settings": {"slidesToShow": 1}}]'
                    data-rtl="<?php echo e(get_user_lang_direction()); ?>">
                    <?php $__currentLoopData = $data['blogs'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slick-slider-item">
                        <div class="single-blog">
                            <div class="single-blog-thumb">
                                <a href="<?php echo e(route('tenant.frontend.blog.single',$item->slug)); ?>">
                                    <?php echo render_image_markup_by_attachment_id($item->image); ?>

                                </a>
                            </div>
                            <div class="single-blog-contents mt-3">
                                <h3 class="single-blog-contents-title fw-600">
                                    <a href="<?php echo e(route('tenant.frontend.blog.single',$item->slug)); ?>">
                                        <?php echo e(\App\Helpers\SanitizeInput::esc_html(Str::words($item->title, 10))); ?> </a>
                                </h3>
                                <p class="single-blog-contents-para mt-3">
                                    <?php echo e(\App\Helpers\SanitizeInput::esc_html(Str::words($item->blog_content, 18))); ?> </p>
                                <div class="btn-wrapper mt-4">
                                    <a href="<?php echo e(route('tenant.frontend.blog.single',$item->slug)); ?>"
                                        class="cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0"> <?php echo e($data['button_text'] ??
                                        ''); ?> </a>
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
<!-- Blog area end --><?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/tenant/bookpoint/blog/blog-one.blade.php ENDPATH**/ ?>