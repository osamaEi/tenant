
<div class="status-dropdown">
    <button value="<?php echo e($statuses?->where("id",$statusId ?? 1)?->first()?->name); ?>" data-id="<?php echo e($id ?? 0); ?>" class="text-capitalize btn dropdown-toggle add-dropdown-text status-dropdown-button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo e($statuses?->where("id",$statusId ?? 2)?->first()?->name); ?></button>
    <ul class="dropdown-menu">
        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="single-item" data-value="<?php echo e($status->name); ?>" data-status-id="<?php echo e($status->id); ?>" data-id="<?php echo e($id); ?>">
                <a class="dropdown-item" href="#"><?php echo e($status->name); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Product/Resources/views/components/table/status.blade.php ENDPATH**/ ?>