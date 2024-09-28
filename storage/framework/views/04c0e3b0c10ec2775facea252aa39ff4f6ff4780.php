<div class="general-info-wrapper px-3">
    <h4 class="dashboard-common-title-two"><?php echo e(__("Product Shipping and Return Policy")); ?></h4>
    <div class="general-info-form mt-0 mt-lg-4">
        <div class="dashboard-input mt-4">
            <label class="dashboard-label color-light mb-2"> <?php echo e(__("Policy Description")); ?> </label>
            <textarea class="form--control summernote radius-10" name="policy_description" placeholder="<?php echo e(__("Type Description")); ?>"><?php echo isset($product) ? purify_html($product?->return_policy?->shipping_return_description) : ""; ?></textarea>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Product/Resources/views/components/policy.blade.php ENDPATH**/ ?>