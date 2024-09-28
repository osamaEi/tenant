<form action="<?php echo e($action); ?>" method="post" style="display: inline-block">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="item_id" value="<?php echo e($id); ?>">
    <button type="submit" class="btn btn-xs btn-secondary btn-sm mb-3 mr-1"
            data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(__('Clone')); ?>"
    >
        <i class="las la-copy"></i>
    </button>
</form>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/clone-icon.blade.php ENDPATH**/ ?>