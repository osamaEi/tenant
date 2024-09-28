<?php
    $user_delivery_address = $user_details?->delivery_address;
?>

<div class="seller-profile-details-wrapper">
    <h3 class="title-seller"> <?php echo e(__('Edit Password')); ?> </h3>
    <form action="#" class="change_password_form">
        <?php echo csrf_field(); ?>
        <div class="row margin-top-10">
            <div class="col-lg-12 col-md-12 margin-top-30">
                <div class="dashboard-address-details">
                    <div class="single-dashboard-input">
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Old Password')); ?><span class="text-danger">*</span>  </label>
                            <input class="form--control" type="password" name="old_password" id="old_password" placeholder="<?php echo e(__('Old Password')); ?>">
                        </div>
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('New Password')); ?><span class="text-danger">*</span>  </label>
                            <input class="form--control" type="password" name="password" id="password" placeholder="<?php echo e(__('New Password')); ?>">
                        </div>
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Confirm Password')); ?><span class="text-danger">*</span>  </label>
                            <input class="form--control" type="password" name="password_confirmation" id="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="btn-wrapper margin-top-10">
                    <button type="submit" class="btn-submit btn-bg-1 save-password-btn"> <?php echo e(__('Save Changes')); ?> </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/manage-account-partials/change-password.blade.php ENDPATH**/ ?>