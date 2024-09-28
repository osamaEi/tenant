<button type="<?php echo e($type ?? 'button'); ?>"  class="btn-xs mb-3 mr-1 btn btn-<?php echo e($class ?? 'primary'); ?>"
   <?php if(isset($popover)): ?> data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($popover); ?>" <?php endif; ?>
><?php echo e($slot); ?></button>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/button.blade.php ENDPATH**/ ?>