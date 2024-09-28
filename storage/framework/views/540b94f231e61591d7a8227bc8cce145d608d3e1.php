<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .modal-content {
            touch-action: auto !important;

    }
    .searchbar-area {
        z-index: 9 !important;
    }
        .second-div {
            position: relative;
            overflow: hidden;
            height: 50px; /* تأكد من أن هذا الارتفاع يناسب حجم النص */
            }
            
            .message {
            position: absolute;
            white-space: nowrap;
            transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
            }
            
            .message.exit {
            transform: translateX(100%);
            opacity: 0;
            }
            
            .message.enter {
            transform: translateX(0);
            opacity: 1;
            }
        .whatsapp-integration-wrap a {
            right: 65px !important;
            bottom: 65px !important;
        }

        .lazyloads {
            max-width: unset !important;
        }

        @media(max-width: 778px) {

            .second-div,
            .user-div {
                display: none;
            }

        }

        @media(max-width: 435px) {

            .container-header {
                flex-direction: column;
                padding: 25px 50px;
                gap: 16px;
            }

            .input-group.rounded {
                width: 100% !important;
            }

            .logo-wrapper {
                margin-right: unset;
            }

            .navbar-area .nav-container .responsive-mobile-menu .navbar-toggler {
                transform: translateY(-359%) !important;
            }

            .navbar-area .nav-container .navbar-collapse {
                top: -118% !important;
            }

            .banner-area.banner-two.position-relative {
                margin-top: -100px !important;

            }
        }

        @media only screen and (max-width: 991px) {
            .navbar-area .nav-container .responsive-mobile-menu .navbar-toggler {
                position: absolute;
                right: 46px !important;
                top: 37% !important;
                -webkit-transform: translateY(-50%);
                transform: translateY(-156%);
                border: 1px solid rgba(0, 0, 0, 0.5);
                outline: none;
                box-shadow: none;
            }

            .navbar-area .nav-container .navbar-collapse {
                max-width: 100%;
                position: absolute !important;
                top: 8%;
                width: 100% !important;

            }
        }

        @media (max-width: 903px) {
            .banner-two .banner-contents {

                margin-top: 129px !important;
                margin-right: 164px !important;
            }
        }

        @media (max-width: 567px) {
            .banner-two .banner-contents {
                text-align: center;
                margin-right: unset !important;
            }
        }
    </style>

</head>


<header class="header-style-01">

    <div style="width: 100%; display: flex; align-items: center;
                justify-content: space-between; background: #373f50; color: white; padding: 25px 50px;"
        class="container-header">

        <div>
            <i class="las la-phone"></i> الخط الساخن +310-00-203-212
        </div>

        <div style="text-align: center; font-size: 15px; font-weight: bold;" class="second-div">
            نقوم بإرجاع الأموال خلال 7 أيام
        </div>

        <div>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EGP
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class="las la-pound-sign"></i> EGP</a>
                <a class="dropdown-item" href="#"><i class="las la-dollar-sign"></i> USD</a>
            </div>
        </div>

    </div>

    <div style="flex-direction: row-reverse;  width: 100%; display: flex; align-items: center;
                justify-content: space-between; padding: 25px 50px;" class="container-header">
        <div class="user-div" style="font-size: 18px;
    font-weight: 400;">Hello User <i style="    font-size: 24px;" class="las la-user-plus"></i></div>
        <div style="width: 50%;" class="input-group rounded">
            <input style="    border-left: none;
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;" type="search" class="form-control rounded" placeholder="Search"
                aria-label="Search" aria-describedby="search-addon" />
            <span style=" padding: 6px;   margin-left: 8px;
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border: 1px solid #ced4da !important;
    border-right: none !important;" sclass="input-group-text border-0" id="search-addon">
                <i style="font-size: 19px;" class="las la-search"></i>
            </span>
        </div>
        <div class="logo-wrapper" style="margin-right: 33px;">
            <?php if(\App\Facades\GlobalLanguage::user_lang_dir() == 'rtl'): ?>
                <a href="<?php echo e(url('/')); ?>" class="logo">
            <img alt="unkown" src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-logo.png" />
            </a>
            <?php endif; ?>
        </div>

    </div>
    </div>


    <div class="searchbar-area">

        <!-- Menu area Starts -->
        <nav class="navbar navbar-area index-02 nav-two navbar-expand-lg navbar-border">

            <div class="container container-two nav-container">
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#casual_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="casual_main_menu">
                    <ul class="navbar-nav rounded">
                        <?php echo render_frontend_menu($primary_menu); ?>

                    </ul>
                </div>
                <div class="nav-right-content">
                    <ul>
                        <li>
                            <div class="info-bar-item">
                                <div class="track-icon-list style-02">
                                    <a href="javascript:void(0)" class="single-icon search-open">
                                        <span class="icon"> <i class="las la-search"></i> </span>
                                    </a>
                                    <div class="single-icon cart-shopping">
                                        <a class="icon" href="<?php echo e(route('tenant.shop.compare.product.page')); ?>"> <i
                                                class="las la-sync"></i> </a>
                                    </div>
                                    <div class="single-icon cart-shopping">
                                        <?php
                                        $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance(
                                        'wishlist',
                                        )->content();
                                        $subtotal = 0;
                                        ?>
                                        <a href="javascript:void(0)" class="icon"> <i class="lar la-heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="icon-notification">
                                            <?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->count()); ?>

                                        </a>
                                        <div class="addto-cart-contents">
                                            <div class="single-addto-cart-wrappers">
                                                <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="single-addto-carts">
                                                    <div class="addto-cart-flex-contents">
                                                        <div class="addto-cart-thumb">
                                                            <?php echo render_image_markup_by_attachment_id($cart_item?->options?->image); ?>

                                                        </div>
                                                        <div class="addto-cart-img-contents">
                                                            <h6 class="addto-cart-title fs-18">
                                                                <?php echo e(Str::words($cart_item->name, 5)); ?> </h6>
                                                            <span class="name-subtitle d-block">
                                                                <?php if($cart_item?->options?->color_name): ?>
                                                                <?php echo e(__('Color:')); ?>

                                                                <?php echo e($cart_item?->options?->color_name); ?> ,
                                                                <?php endif; ?>

                                                                <?php if($cart_item?->options?->size_name): ?>
                                                                <?php echo e(__('Size:')); ?>

                                                                <?php echo e($cart_item?->options?->size_name); ?>

                                                                <?php endif; ?>

                                                                <?php if($cart_item?->options?->attributes): ?>
                                                                <br>
                                                                <?php $__currentLoopData = $cart_item?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>
                                                                $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($key . ':'); ?>

                                                                <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </span>

                                                            <div class="price-updates margin-top-10">
                                                                <span class="price-title fs-16 fw-500 color-heading">
                                                                    <?php echo e(amount_with_currency_symbol(calculatePrice($cart_item->price,
                                                                    $cart_item->options))); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="addto-cart-counts color-heading fw-500">
                                                        <?php echo e($cart_item->qty); ?> </span>
                                                    <a href="javascript:void(0)" class="close-cart">
                                                        <span class="icon-close color-heading"> <i
                                                                class="las la-times"></i> </span>
                                                    </a>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <div class="single-addto-carts">
                                                    <p class="text-center"><?php echo e(__('No Item in Wishlist')); ?></p>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-icon cart-shopping">
                                        <?php
                                        $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance(
                                        'default',
                                        )->content();
                                        $subtotal = 0;
                                        ?>
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-shopping-cart"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="icon-notification">
                                            <?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::instance('default')->content()->count()); ?>

                                        </a>
                                        <div class="addto-cart-contents">
                                            <div class="single-addto-cart-wrappers">
                                                <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="single-addto-carts">
                                                    <div class="addto-cart-flex-contents">
                                                        <div class="addto-cart-thumb">
                                                            <?php echo render_image_markup_by_attachment_id($cart_item?->options?->image); ?>

                                                        </div>
                                                        <div class="addto-cart-img-contents">
                                                            <h6 class="addto-cart-title fs-18">
                                                                <?php echo e(Str::words($cart_item->name, 5)); ?> </h6>
                                                            <span class="name-subtitle d-block">
                                                                <?php if($cart_item?->options?->color_name): ?>
                                                                <?php echo e(__('Color:')); ?>

                                                                <?php echo e($cart_item?->options?->color_name); ?> ,
                                                                <?php endif; ?>

                                                                <?php if($cart_item?->options?->size_name): ?>
                                                                <?php echo e(__('Size:')); ?>

                                                                <?php echo e($cart_item?->options?->size_name); ?>

                                                                <?php endif; ?>

                                                                <?php if($cart_item?->options?->attributes): ?>
                                                                <br>
                                                                <?php $__currentLoopData = $cart_item?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>
                                                                $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($key . ':'); ?>

                                                                <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </span>

                                                            <?php
                                                            $subtotal += calculatePrice(
                                                            $cart_item->price * $cart_item->qty,
                                                            $cart_item->options,
                                                            );
                                                            ?>

                                                            <div class="price-updates margin-top-10">
                                                                <span class="price-title fs-16 fw-500 color-heading">
                                                                    <?php echo e(amount_with_currency_symbol(calculatePrice($cart_item->price,
                                                                    $cart_item->options))); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="addto-cart-counts color-heading fw-500">
                                                        <?php echo e($cart_item->qty); ?> </span>
                                                    <a href="javascript:void(0)" class="close-cart">
                                                        <span class="icon-close color-heading"> <i
                                                                class="las la-times"></i> </span>
                                                    </a>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <div class="single-addto-carts">
                                                    <p class="text-center"><?php echo e(__('No Item in Wishlist')); ?></p>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <?php if($cart->count() != 0): ?>
                                            <div class="cart-total-amount">
                                                <h6 class="amount-title"> <?php echo e(__('Total Amount:')); ?> </h6> <span
                                                    class="fs-18 fw-500 color-light">
                                                    <?php echo e(amount_with_currency_symbol($subtotal)); ?> </span>
                                            </div>
                                            <div class="btn-wrapper margin-top-20">
                                                <a href="<?php echo e(route('tenant.shop.checkout')); ?>"
                                                    class="cmn-btn btn-bg-1 radius-0 w-100">
                                                    <?php echo e(__('CheckOut')); ?> </a>
                                            </div>
                                            <div class="btn-wrapper margin-top-20">
                                                <a href="<?php echo e(route('tenant.shop.cart')); ?>"
                                                    class="cmn-btn btn-outline-one radius-0 w-100">
                                                    <?php echo e(__('View Cart')); ?> </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-account">
                                    <a href="javascript:void(0)" class="accounts">
                                        <i class="las la-user"></i>
                                    </a>
                                    <ul class="account-list-item">
                                        <?php if(auth()->guard('web')->check()): ?>
                                        <li class="list">
                                            <a href="<?php echo e(route('tenant.user.home')); ?>"> <?php echo e(__('Dashboard')); ?> </a>
                                        </li>
                                        <li class="list">
                                            <a href="<?php echo e(route('tenant.user.logout')); ?>"> <?php echo e(__('Log Out')); ?> </a>
                                        </li>
                                        <?php else: ?>
                                        <li class="list">
                                            <a href="<?php echo e(route('tenant.user.login')); ?>"> <?php echo e(__('Sign In')); ?> </a>
                                        </li>
                                        <li class="list">
                                            <a href="<?php echo e(route('tenant.user.register')); ?>"> <?php echo e(__('Sign Up')); ?> </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Menu area end -->

        <!-- SearcBar -->
        <div class="search-bar">
            <form class="menu-search-form" action="#">
                <div class="search-open-form">
                    <div class="search-close"><i class="las la-times"></i></div>
                    <input class="item-search" type="text" placeholder="<?php echo e(__('Search Here....')); ?>"
                        id="search_form_input">
                    <button type="submit"><?php echo e(__('Search Now')); ?></button>
                </div>
                <div class="search-suggestions" id="search_suggestions_wrap">
                    <div class="search-suggestions-inner">
                        <h6 class="search-suggestions-title"><?php echo e(__('Product Suggestions')); ?></h6>
                        <ul class="product-suggestion-list mt-4">

                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

<script>
$('.close-cart').on('click', function() {
    var product_id = $(this).data('product-id'); // assuming the product ID is attached
    $.ajax({
        url: '/cart/delete',  // your delete route
        method: 'POST',
        data: {
            _token: '<?php echo e(csrf_token()); ?>',
            id: product_id
        },
        success: function(response) {
            if (response.success) {
                // Update the cart view, remove the product from the DOM
                $(this).closest('.single-addto-carts').remove();
            }
        }
    });
});

    const changeContentDiv = document.querySelector('.second-div');
    const messages = ["نقوم بإرجاع الأموال خلال 7 أيام", 
    "دعم عملاء ودود على مدار 24 ساعة طوال أيام الأسبوع", 
    "شحن مجاني للطلبات التي تزيد عن 200 دولار"];
    let currentIndex = 0;
    function changeContent() {
        changeContentDiv.textContent = messages[currentIndex];
        currentIndex = (currentIndex + 1) % messages.length;
}

setInterval(changeContent, 3000);
</script><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/headerNavbarArea/navbar.blade.php ENDPATH**/ ?>