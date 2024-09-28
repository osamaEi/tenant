<head>
    <style>
    .color-one {
    color: rgb(0 0 0) !important;
}
    .color-one:hover {
    color: rgb(80 80 80) !important;
}
    .single-category .category-contents .titles {
    font-size: 24px !important;
}
    .highlighted-category {
    min-height: 352px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
}

.category-area .single-category {
    background-color: #f5f5f5 !important;
    padding: 20px !important;
    border-radius: 10px !important;
    transition: all 0.3s ease-in-out !important;
    position: relative !important;
}

.category-area .single-category:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1) !important;
}

.category-area .shape-circle {
    width: 100% !important;
    height: 100% !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    z-index: 1 !important;
    opacity: 0.2 !important;
}

.category-area .category-thumb img {
    z-index: 2 !important;
    position: relative !important;
}

.category-area .category-contents {
    z-index: 2 !important;
    position: relative !important;
    background: rgba(255, 255, 255, 0.8) !important;
    padding: 10px !important;
    border-radius: 5px !important;
}

.row.margin-top-10 {
        width: 90% !important;
    margin: auto !important;
}

.container {
    width: 100% !important;
}

.gallery {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    margin-top: 40px !important;
    gap: 20px !important; /* Add gap between grid items */
}

.box {
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
}

.box.one {
    position: relative !important;
    grid-row: 1 !important;
    display: flex !important;
    overflow: hidden !important;
    flex-direction: column !important;
    border-radius: 15px !important;
}

.box.one img {
    width: 100% !important;
    height: auto !important; /* Adjust height for responsiveness */
    object-fit: cover !important;
    border-radius: 15px !important;
    transition: .3s !important;
}

.box.one img:hover {
    transform: scale(1.1) !important;
}

.box.one .text {
    text-align: justify !important;
    padding: 10px !important;
    top: 20px !important;
    right: 20px !important;
    position: absolute !important;
}

.box.one .text h5 {
    color: #373f50 !important;
    font-size: 32px !important;
    font-weight: 700 !important;
}

.box.one .text p {
    color: #fc7096 !important;
    font-weight: 700 !important;
}

.box.two {
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    align-items: center !important;
}

.box.two div {
    border-radius: 15px !important;
    background: #f5f5f5 !important;
    width: 267px !important;
    height: auto !important; /* Set height to auto for dynamic content */
    margin-bottom: 20px !important;
    position: relative !important;
    text-align: center !important;
}

.box.two img {
    width: 100% !important;
    cursor: pointer !important;
    border-radius: 15px !important;
    transition: 0.3s !important;
}

.box.two img:hover {
    transform: scale(1.1) rotate(3deg) !important;
}

.box.two span {
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #fff !important;
    text-transform: uppercase !important;
    line-height: 32px !important;
    padding: 0 8px !important;
    border-radius: 20px !important;
    background-color: #FFC12B !important;
    display: inline-block !important;
    margin-bottom: 10px !important;
    position: absolute !important;
    top: 8px !important;
    left: 10px !important;
}

.text-info {
    margin-top: 10px !important;
    text-align: center !important;
}

.text-info h3 {
    color: #fc7096 !important;
    line-height: 25px !important;
    font-size: 20px !important;
    margin-bottom: 10px !important;
    cursor: pointer !important;
}

.text-info h3:hover {
    color: #333 !important;
}

.text-info .price {
    color: #ff6f96 !important;
    font-size: 20px !important;
    font-weight: bold !important;
    margin: 0 !important;
    display: none !important;
}

.text-info p {
    font-weight: bold !important;
    font-size: 15px !important;
    color: #6a6a6a !important;
    transition: .3s !important;
    cursor: pointer !important;
}

.text-info p:hover {
    color: #ff6f96 !important;
}

.flex {
    display: grid !important;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
    gap: 30px !important;
}

.box.two div:last-child {
    background: transparent !important;
}

.new-p {
    color: white !important;
    background: #f2b30c !important;
    font-weight: 500 !important;
    font-size: 19px !important;
    width: fit-content !important;
    position: relative !important;
    top: 10px !important;
    padding: 0 7px !important;
    right: 12px !important;
    border-radius: 7px !important;
}

.link-see a {
    text-decoration: none !important;
    font-size: 16px !important;
    transition: 0.3s !important;
}

.link-see a:hover {
    color: #ff6f96 !important !important;
}

@media(max-width: 1024px) {
    .box.one {
        /*display:none !important;*/
    }
    
    .gallery {
        display: flow !important;
    }
}
.title-cat {
        margin-top: 60px;
    text-align: justify;
    color: #fe628c;
    font-weight: bold;
    font-size: 34px;
}
@media(max-width: 767px) {
    .container {
        margin-top: -488px !important;
    }

    .gallery {
        flex-direction: column-reverse !important;
        display: flex !important;
    }
    .title-cat {
    text-align: center;
    margin-top: 130px;
}
}


    </style>
</head>


<?php
    $product_bg_image = get_attachment_image_by_id($data['product_background_image']);
    $product_bg_image = !empty($product_bg_image) ? $product_bg_image['img_url'] : theme_assets('img/cate-shapes.png');
?>


<!-- Start First Section -->
<section class="container">
                        <h2 class="title-cat"> الفئات </h2>

    <div class="gallery">
        <div class="flex">
            
        <?php $__currentLoopData = $data['categories_info'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box two">
                <div class="image-contents" style="position: relative;">
                    <div class="category-thumb" style="position: relative; z-index: 2;">
                        <p class="new-p">new</p>
                        <?php echo render_image_markup_by_attachment_id($category->image_id, 'lazyloads'); ?>

                    </div>
                </div>
                <div class="text-info">
                    <h3 class="title"><?php echo e($category->name); ?></h3>
                    <p style="width: 100%; text-align: center;"  class="link-see">                                
                   <a href="<?php echo e(route('tenant.shop.category.products', [$category->slug, 'category'])); ?>" class="collection-btn color-one"> مشاهدة المجموعة </a>
</p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="box one">
            <img src="https://ww.baby-yummy.com/wp-content/uploads/2023/11/h10-bn1.jpg" alt="unknown image" />
            <div class="text">
                <h5>ملابس للأطفال</h5>
                <p><a style="    text-decoration: none;
    color: #fc7096 !important;" href="<?php echo e(route('tenant.shop.category.products', [$category->slug, 'category'])); ?>" class="collection-btn color-one"> تسويق منتجات أطفال    </a><i class="las la-angle-double-left"></i></p>
            </div>
        </div>
    </div>
</section>
<!-- End First Section -->

<!-- End First Section -->

<!-- Start Second Section -->

    <section style="display: none;" class="category-area" data-padding-top="<?php echo e($data['padding_top']); ?>" data-padding-bottom="<?php echo e($data['padding_bottom']); ?>">
    <div class="container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-left section-title-two">
                    <h2 class="title"> <?php echo e($data['title'] ?? ''); ?> </h2>

                    <?php if(!empty($data['button_url']) && !empty($data['button_text'])): ?>
                        <a href="<?php echo e($data['button_url']); ?>">
                            <span class="see-all fs-18"> <?php echo e($data['button_text'] ?? ''); ?> </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row margin-top-10">
            <?php $__currentLoopData = $data['categories_info'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $is_highlighted = ($index === 0); // لجعل العنصر الأول أكبر حجمًا
                ?>

                <?php if($is_highlighted): ?>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6 margin-top-30 wow fadeInUp" data-wow-delay=".1s">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-category highlighted-category radius-20 bg-item-four text-center" style="position: relative; overflow: hidden; height: 100%;">
                                    <div class="image-contents" style="position: relative;">
                                        <div class="category-thumb" style="position: relative; z-index: 2;">
                                            <?php echo render_image_markup_by_attachment_id($category->image_id, 'lazyloads'); ?>

                                        </div>
                                        <div class="shape-circle" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo e($product_bg_image); ?>'); background-size: cover; z-index: 1;">
                                        </div>
                                    </div>
                                    <div class="category-contents" style="z-index: 2; position: relative;">
                                        <div class="notification-title">
                                            <h2 class="titles ff-jost">
                                                <a href="javascript:void(0)"> <?php echo e($category->name); ?> </a>
                                            </h2>
                                        </div>
                                        <a href="<?php echo e(route('tenant.shop.category.products', [$category->slug, 'category'])); ?>" class="collection-btn color-one"> <?php echo e($data['read_more_button_text'] ?? __('See Collection')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-6 margin-top-30 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-category radius-20 bg-item-four text-center" style="position: relative; overflow: hidden;">
                            <div class="image-contents" style="position: relative;">
                                <div class="category-thumb" style="position: relative; z-index: 2;">
                                    <?php echo render_image_markup_by_attachment_id($category->image_id, 'lazyloads'); ?>

                                </div>
                                <div class="shape-circle" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo e($product_bg_image); ?>'); background-size: cover; z-index: 1;">
                                </div>
                            </div>
                            <div class="category-contents" style="z-index: 2; position: relative;">
                                <div class="notification-title">
                                    <h2 class="titles ff-jost">
                                        <a href="javascript:void(0)"> <?php echo e($category->name); ?> </a>
                                    </h2>
                                </div>
                                <a href="<?php echo e(route('tenant.shop.category.products', [$category->slug, 'category'])); ?>" class="collection-btn color-one"> <?php echo e($data['read_more_button_text'] ?? __('See Collection')); ?> </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- End Second Section -->











<?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/tenant/casual/common/categories.blade.php ENDPATH**/ ?>