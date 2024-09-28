<?php
    if(!isset($product)){
        $product = null;
    }
?>

<div class="general-info-wrapper">
    <h4 class="dashboard-common-title-two"> <?php echo e(__("General Information")); ?> </h4>
    <div class="general-info-form mt-0 mt-lg-4">
        <form action="#">
            <div class="dashboard-input mt-4">
                <label class="dashboard-label color-light mb-2"> <?php echo e(__("Name")); ?> </label>
                <input type="text" class="form--control radius-10" id="product-name" value="<?php echo e($product?->name ?? ""); ?>" name="name" placeholder="<?php echo e(__("Write product Name...")); ?>">
            </div>

            <div class="dashboard-input mt-4">
                <label class="dashboard-label color-light mb-2"> <?php echo e(__("Slug")); ?> </label>
                <input type="text" class="form--control radius-10" id="product-slug" value="<?php echo e($product?->slug ?? ""); ?>" name="slug" placeholder="<?php echo e(__("Write product slug...")); ?>">
            </div>

            <div class="dashboard-input mt-4">
                <label class="dashboard-label color-light mb-2"> <?php echo e(__("Summery")); ?> </label>
                <textarea style="height: 120px" class="form--control form--message  radius-10"  name="summery" placeholder="<?php echo e(__("Write product Summery...")); ?>"><?php echo e($product?->summary ?? ""); ?></textarea>
            </div>

            <div class="dashboard-input mt-4">
                <label class="dashboard-label color-light mb-2"> <?php echo e(__("Description")); ?> </label>
                <textarea class="form--control summernote radius-10" name="description" placeholder="<?php echo e(__("Type Description")); ?>"><?php echo $product?->description ?? ""; ?></textarea>
            </div>

            <div class="dashboard-input mt-4">
                <label class="dashboard-label color-light mb-2"> <?php echo e(__("Brand")); ?> </label>
                <div class="nice-select-two">
                    <select name="brand" class="form-control" id="brand_id">
                        <option value=""><?php echo e(__("Select brand")); ?></option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($item->id == $product?->brand_id ? "selected" : ""); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Product/Resources/views/components/general-info.blade.php ENDPATH**/ ?>