<?php
    $size = $size ?? '1920x1280';
?>

<div class="form-group">
    <label for="og_meta_image"><?php echo e($label ?? __('Image')); ?></label>
    <div class="media-upload-btn-wrapper mb-2">
        <div class="img-wrap">
            <?php echo render_attachment_preview_for_admin($value ?? ''); ?>

        </div>
        <input type="hidden" id="<?php echo e($name ?? 'image'); ?>" name="<?php echo e($name ?? 'image'); ?>"
               value="<?php echo e($value ?? ''); ?>">
        <button type="button" class="btn btn-info media_upload_form_btn"
                data-btntitle="<?php echo e(__('Select Image')); ?>"
                data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal"
                data-target="#media_upload_modal">
            <?php echo e('Change Image'); ?>

        </button>
    </div>
    <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png')); ?></small><br>
    <small class="form-text text-muted"><?php echo e(__('allowed image size :') . $size); ?></small>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/landlord-others/edit-media-upload-image.blade.php ENDPATH**/ ?>