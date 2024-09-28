<!-- Promo area Starts -->
<section class="promo-area" data-padding-top="<?php echo e($data['padding_top']); ?>" data-padding-bottom="<?php echo e($data['padding_bottom']); ?>">
    <div class="container-two">
        <div class="row">
            <?php $__currentLoopData = $data['repeater_data']['repeater_title_'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6 promo-child margin-top-30">
                <div class="single-promo text-center">
                    <div class="icon color-three">
                        <i class="<?php echo e($data['repeater_data']['repeater_icon_'][$key] ?? ''); ?>"></i>
                    </div>
                    <div class="contents">
                        <h4 class="common-title"> <a href="javascript:void(0)"> <?php echo e(esc_html($title)); ?> </a> </h4>
                        <p class="common-para"> <?php echo e(esc_html($data['repeater_data']['repeater_subtitle_'][$key]) ?? ''); ?> </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- Promo area end -->
<?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/tenant/aromatic/common/services.blade.php ENDPATH**/ ?>