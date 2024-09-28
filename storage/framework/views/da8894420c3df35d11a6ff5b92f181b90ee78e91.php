<head>
    <style>
        
    </style>
</head>
<header class="header-style-01">
    <div style="display:none;" class="searchbar-area">
        
        <!-- Menu area Starts -->
        <nav class="navbar navbar-area index-02 nav-two navbar-expand-lg navbar-border">
            
            <div class="container container-two nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <?php if(\App\Facades\GlobalLanguage::user_lang_dir() == 'rtl'): ?>
                            <a href="<?php echo e(url('/')); ?>" class="logo">
                                <?php echo render_image_markup_by_attachment_id(get_static_option('site_logo')); ?>

                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/')); ?>" class="logo">
                                <?php if(!empty(get_static_option('site_white_logo'))): ?>
                                    <?php echo render_image_markup_by_attachment_id(get_static_option('site_white_logo')); ?>

                                <?php else: ?>
                                    <h2 class="site-title"><?php echo e(filter_static_option_value('site_title', $global_static_field_data)); ?></h2>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#casual_main_menu" aria-expanded="false" aria-label="Toggle navigation">
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
                                            $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance("wishlist")->content();
                                            $subtotal = 0;
                                        ?>
                                        <a href="javascript:void(0)" class="icon"> <i class="lar la-heart"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="icon-notification"> <?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::instance("wishlist")->content()->count()); ?> </a>
                                        <div class="addto-cart-contents">
                                            <div class="single-addto-cart-wrappers">
                                                <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div class="single-addto-carts">
                                                        <div class="addto-cart-flex-contents">
                                                            <div class="addto-cart-thumb">
                                                                <?php echo render_image_markup_by_attachment_id($cart_item?->options?->image); ?>

                                                            </div>
                                                            <div class="addto-cart-img-contents">
                                                                <h6 class="addto-cart-title fs-18"> <?php echo e(Str::words($cart_item->name, 5)); ?> </h6>
                                                                <span class="name-subtitle d-block">
                                                                        <?php if($cart_item?->options?->color_name): ?>
                                                                        <?php echo e(__('Color:')); ?> <?php echo e($cart_item?->options?->color_name); ?> ,
                                                                    <?php endif; ?>

                                                                    <?php if($cart_item?->options?->size_name): ?>
                                                                        <?php echo e(__('Size:')); ?> <?php echo e($cart_item?->options?->size_name); ?>

                                                                    <?php endif; ?>

                                                                    <?php if($cart_item?->options?->attributes): ?>
                                                                        <br>
                                                                        <?php $__currentLoopData = $cart_item?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php echo e($key.':'); ?> <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </span>

                                                                <div class="price-updates margin-top-10">
                                                                    <span class="price-title fs-16 fw-500 color-heading"> <?php echo e(amount_with_currency_symbol(calculatePrice($cart_item->price, $cart_item->options))); ?> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="addto-cart-counts color-heading fw-500"> <?php echo e($cart_item->qty); ?> </span>
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
                                            $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance("default")->content();
                                            $subtotal = 0;
                                        ?>
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-shopping-cart"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="icon-notification"> <?php echo e(\Gloudemans\Shoppingcart\Facades\Cart::instance("default")->content()->count()); ?> </a>
                                        <div class="addto-cart-contents">
                                            <div class="single-addto-cart-wrappers">
                                                <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div class="single-addto-carts">
                                                        <div class="addto-cart-flex-contents">
                                                            <div class="addto-cart-thumb">
                                                                <?php echo render_image_markup_by_attachment_id($cart_item?->options?->image); ?>

                                                            </div>
                                                            <div class="addto-cart-img-contents">
                                                                <h6 class="addto-cart-title fs-18"> <?php echo e(Str::words($cart_item->name, 5)); ?> </h6>
                                                                <span class="name-subtitle d-block">
                                                                        <?php if($cart_item?->options?->color_name): ?>
                                                                        <?php echo e(__('Color:')); ?> <?php echo e($cart_item?->options?->color_name); ?> ,
                                                                    <?php endif; ?>

                                                                    <?php if($cart_item?->options?->size_name): ?>
                                                                        <?php echo e(__('Size:')); ?> <?php echo e($cart_item?->options?->size_name); ?>

                                                                    <?php endif; ?>

                                                                    <?php if($cart_item?->options?->attributes): ?>
                                                                        <br>
                                                                        <?php $__currentLoopData = $cart_item?->options?->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php echo e($key.':'); ?> <?php echo e($attribute); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </span>

                                                                <?php
                                                                    $subtotal += calculatePrice($cart_item->price * $cart_item->qty, $cart_item->options)
                                                                ?>

                                                                <div class="price-updates margin-top-10">
                                                                    <span class="price-title fs-16 fw-500 color-heading"> <?php echo e(amount_with_currency_symbol(calculatePrice($cart_item->price, $cart_item->options))); ?> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="addto-cart-counts color-heading fw-500"> <?php echo e($cart_item->qty); ?> </span>
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
                                                        class="fs-18 fw-500 color-light"> <?php echo e(amount_with_currency_symbol($subtotal)); ?> </span></div>
                                                <div class="btn-wrapper margin-top-20">
                                                    <a href="<?php echo e(route('tenant.shop.checkout')); ?>" class="cmn-btn btn-bg-1 radius-0 w-100">
                                                        <?php echo e(__('CheckOut')); ?> </a>
                                                </div>
                                                <div class="btn-wrapper margin-top-20">
                                                    <a href="<?php echo e(route('tenant.shop.cart')); ?>" class="cmn-btn btn-outline-one radius-0 w-100">
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
                    <input class="item-search" type="text" placeholder="<?php echo e(__('Search Here....')); ?>" id="search_form_input">
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
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/aromatic/headerNavbarArea/navbar.blade.php ENDPATH**/ ?>