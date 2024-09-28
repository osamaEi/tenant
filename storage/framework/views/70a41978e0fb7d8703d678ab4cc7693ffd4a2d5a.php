<!-- State Edit Modal -->
<div class="modal fade" id="editCityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e(__('Edit City')); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('tenant.admin.city.edit')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="city_id" id="city_id" value="">

                <div class="modal-body">
                    <div class="single-input">
                        <label for="country_id" class="label-title mt-3"><?php echo e(__('Select Country')); ?></label>
                        <select name="country" id="country_id" class="form-control select22-country">
                            <option value=""><?php echo e(__('Select Country')); ?></option>
                            <?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="single-input mb-3">
                        <label for="state_id" class="label-title mt-3"><?php echo e(__('Select State')); ?></label>
                        <select name="state" id="state_id" class="form-control get_country_state select22-state">
                            <option value=""><?php echo e(__('Select State')); ?></option>
                        </select>
                        <span class="info_msg"></span>
                    </div>

                    <div class="form-group">
                        <label for="city_name"><?php echo e(__('City')); ?></label>
                        <input type="text" name="city" id="city_name" class="form-control" placeholder="<?php echo e(__('Enter city name')); ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 edit_city"><?php echo e(__('Update')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/CountryManage/Resources/views/tenant/admin/city/edit-modal.blade.php ENDPATH**/ ?>