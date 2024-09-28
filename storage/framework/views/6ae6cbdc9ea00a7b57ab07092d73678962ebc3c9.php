<?php $__env->startSection('title'); ?>
    <?php echo __('Search'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php echo __('Search'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Shop area starts -->
    <section class="shop-area padding-top-100 padding-bottom-50">
        <div class="container-one">
            <div class="shop-contents-wrapper">
                <div id="tab-grid2" class="tab-content-item active">
                    <div class="row">
                        <div class="col-12">
                            <h4><?php echo e(__('Search Result For:').' '.$search); ?></h4>
                        </div>
                    </div>
                    <div class="row mt-4 gy-5">
                        <?php $__currentLoopData = $product_object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $data = get_product_dynamic_price($product);
                                $campaign_name = $data['campaign_name'];
                                $regular_price = $data['regular_price'];
                                $sale_price = $data['sale_price'];
                                $discount = $data['discount'];
                            ?>

                            <div class="col-xxl-3 col-lg-6 col-sm-6">
                                <div class="global-card no-shadow radius-0 pb-0">
                                    <div class="global-card-thumb">
                                        <a href="<?php echo e(route('tenant.shop.product.details', $product->slug)); ?>">
                                            <?php echo render_image_markup_by_attachment_id($product->image_id, '', 'grid'); ?>

                                        </a>
                                        <div class="global-card-thumb-badge right-side">
                                            <?php if($discount != null): ?>
                                                <span
                                                    class="global-card-thumb-badge-box bg-color-two"> <?php echo e($discount); ?>% <?php echo e(__('off')); ?> </span>
                                            <?php endif; ?>

                                            <?php if(!empty($product->badge)): ?>
                                                <span
                                                    class="global-card-thumb-badge-box bg-color-new"> <?php echo e($product?->badge?->name); ?> </span>
                                            <?php endif; ?>
                                        </div>

                                        <?php echo $__env->make('tenant.frontend.shop.partials.product-options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                    <div class="global-card-contents">
                                        <div class="global-card-contents-flex">
                                            <h5 class="global-card-contents-title">
                                                <a href="javascript:void(0)"> <?php echo Str::words($product->name, 15); ?> </a>
                                            </h5>
                                            <?php echo render_product_star_rating_markup_with_count($product); ?>

                                        </div>
                                        <div class="price-update-through mt-3">
                                            <span class="flash-prices color-two"> <?php echo e(float_amount_with_currency_symbol($sale_price)); ?> </span>
                                            <span
                                                class="flash-old-prices"> <?php echo e($regular_price != null ? float_amount_with_currency_symbol($regular_price) : ''); ?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="pagination mt-60">
                            <ul class="pagination-list">
                                <?php echo $product_object->links(); ?>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop area end -->

    <!-- Shop Details Modal area end -->
    <?php echo $__env->make(include_theme_path('shop.partials.product-quick-view'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Shop Details Modal area end -->

    <?php echo $__env->make(include_theme_path('shop.partials.shop-footer'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(function (){
            // Wishlist Product
            $(document).on('click', '.wishlist-btn', function (e){
                let el = $(this);
                let product = el.data('product_id');

                $.ajax({
                    url: '<?php echo e(route('tenant.shop.wishlist.product')); ?>',
                    type: 'GET',
                    data: {
                        product_id : product
                    },
                    beforeSend: function (){
                        $('.loader').show();
                    },
                    success: function (data){
                        $('.loader').hide();


                        if (data.type === 'success')
                        {
                            toastr.success(data.msg)
                        } else {
                            toastr.error(data.msg);
                        }
                    },
                    error: function (data){
                        $('.loader').hide();
                    }
                });
            });

            /*========================================
                Product Quick View Modal
            ========================================*/
            $(document).on('click', 'a.popup-modal', function (e){
                let el = $(this).parent();
                let id = el.data('id');
                let modal = $('#product-modal');

                $.ajax({
                    type: 'GET',
                    url: '<?php echo e(route('tenant.shop.quick.view')); ?>',
                    data: {
                        'id': id,
                    },

                    beforeSend: function () {
                        $('.loader').show();
                    },
                    success: function (data) {
                        modal.html(data.product_modal);

                        setInterval(() => {
                            $('.loader').hide();
                        }, 700)
                    },
                    error: function (data) {

                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(route_prefix().'frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/product-single-search.blade.php ENDPATH**/ ?>