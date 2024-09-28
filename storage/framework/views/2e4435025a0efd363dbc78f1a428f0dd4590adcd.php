<div class="book-details-sidebar-content bg-white sidebar-content-padding">
    <div class="book-details-sidebar-content-single single-sidebar-border">
        <span class="book-details-sidebar-content-sub"> <?php echo e(__('Author')); ?> </span>
        <h4 class="book-details-sidebar-content-title"> <?php echo e($product->additionalFields?->author?->name); ?> </h4>
    </div>

    <?php if(!empty($product->additionalFields?->pages)): ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <span class="book-details-sidebar-content-sub"> <?php echo e(__('Number of pages')); ?> </span>
            <h4 class="book-details-sidebar-content-title"> <?php echo e($product->additionalFields?->pages); ?> </h4>
        </div>
    <?php endif; ?>

    <?php if(!empty($product->release_date)): ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <span class="book-details-sidebar-content-sub"> <?php echo e(__('Release Date')); ?> </span>
            <h4 class="book-details-sidebar-content-title"> <?php echo e($product->release_date->format('d M Y')); ?> </h4>
        </div>
    <?php endif; ?>

    <?php if(!empty($product->update_date)): ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <span class="book-details-sidebar-content-sub"> <?php echo e(__('Update Date')); ?> </span>
            <h4 class="book-details-sidebar-content-title"> <?php echo e($product->update_date->format('d M Y')); ?> </h4>
        </div>
    <?php endif; ?>

    <?php if(!empty($product->additionalFields?->high_resolution)): ?>
        <?php
            $resolution = match($product->additionalFields?->high_resolution){
                'yes' => __('High Resolution'),
                'no' => __('Low Resolution')
            }
        ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <span class="book-details-sidebar-content-sub"> <?php echo e(__('Resolution')); ?> </span>
            <h4 class="book-details-sidebar-content-title"> <?php echo e($resolution); ?> </h4>
        </div>
    <?php endif; ?>

    <?php if(!empty($product->additionalFields?->language)): ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <span class="book-details-sidebar-content-sub"> <?php echo e(__('Language')); ?> </span>
            <h4 class="book-details-sidebar-content-title"> <?php echo e($product->additionalFields?->getLanguage?->name); ?> </h4>
        </div>
    <?php endif; ?>

    <?php if(!empty($product->additionalCustomFields)): ?>
        <div class="book-details-sidebar-content-single single-sidebar-border">
            <?php $__currentLoopData = $product->additionalCustomFields ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customFiled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="book-details-sidebar-content-sub"> <?php echo e($customFiled->option_name); ?> </span>
                <h4 class="book-details-sidebar-content-title"> <?php echo e($customFiled->option_value); ?> </h4>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/digital-shop/product_details/partials/details-sidebar.blade.php ENDPATH**/ ?>