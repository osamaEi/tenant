<div class="form-group">
    <label><?php echo e($label); ?></label>
    <div class="spectrum_color_picker" title="<?php echo e(__('Click to change color')); ?>" style="background-color: <?php echo e($value ?? ''); ?>"></div>
    <input type="hidden" name="<?php echo e($name); ?>" class="form-control"  value="<?php echo e($value ?? ''); ?>">
    <?php if(isset($info)): ?>
        <small class="info-text d-block mt-2"><?php echo $info; ?></small>
    <?php endif; ?>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/colorpicker/input.blade.php ENDPATH**/ ?>