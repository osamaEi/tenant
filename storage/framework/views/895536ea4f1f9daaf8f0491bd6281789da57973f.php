<!-- State Edit Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e(__('Add City')); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('tenant.admin.city.all')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="country" class="label-title mt-3"><?php echo e(__('Select Country')); ?></label>
                        <select name="country" id="country" class="form-control select2-country">
                            <option value=""><?php echo e(__('Select Country')); ?></option>
                            <?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="state" class="label-title mt-3"><?php echo e(__('Select State')); ?></label>
                        <select name="state" id="state" class="form-control get_country_state select2-state w-100">
                            <option value=""><?php echo e(__('Select State')); ?></option>
                        </select>
                        <p class="info_msg"></p>
                    </div>

                    <div class="form-group">
                        <label for="city"><?php echo e(__('City')); ?></label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="<?php echo e(__('Enter city name')); ?>">
                    </div>

                    <select name="status" id="status" class="form-control">
                        <option value="publish"><?php echo e(__('Active')); ?></option>
                        <option value="draft"><?php echo e(__('Inactive')); ?></option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 add_city"><?php echo e(__('Save')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/CountryManage/Resources/views/tenant/admin/city/add-modal.blade.php ENDPATH**/ ?>