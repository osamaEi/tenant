<div class="form-group ">
    <label for="image"><?php echo e(__($title) ?? __('Gallery Image')); ?></label>
    <div class="media-upload-btn-wrapper">
        <div class="img-wrap"></div>
        <input type="hidden" name="<?php echo e($name ?? 'gallery_image'); ?>">
        <button type="button" class="btn btn-info media_upload_form_btn"
                data-btntitle="<?php echo e(__('Select Image')); ?>"
                data-modaltitle="<?php echo e(__('Upload Image')); ?>"
                data-toggle="modal"
                data-mulitple="true"
                data-target="#media_upload_modal">
            <?php echo e(__('Upload Gallery Image')); ?>

        </button>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/landlord-others/media-upload-gallery-insert.blade.php ENDPATH**/ ?>