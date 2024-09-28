<form action="#" class="profile-edit-form">
    <div class="seller-profile-details-wrapper">
        <h3 class="title-seller"> <?php echo e(__('Edit Profile')); ?> </h3>
        <div class="dashboard-profile-flex">
            <div class="thumbs margin-top-40">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.media-upload','data' => ['name' => 'image','title' => 'Image','id' => $user_details->image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Image'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user_details->image)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>
        <?php echo csrf_field(); ?>
        <div class="row margin-top-10">
            <div class="col-lg-12 col-md-12 margin-top-30">
                <div class="dashboard-address-details">
                    <h5 class="edit-title"> <?php echo e(__('Profile Information')); ?> </h5>
                    <div class="single-dashboard-input">
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your Name')); ?><span class="text-danger">*</span> </label>
                            <input class="form--control" type="text" name="name" placeholder="<?php echo e(__('Type Your Name')); ?>" value="<?php echo e($user_details->name); ?>">
                        </div>
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your Email')); ?><span class="text-danger">*</span> </label>
                            <input class="form--control" type="email" name="email" placeholder="<?php echo e(__('Type Your Email')); ?>" value="<?php echo e($user_details->email); ?>">
                        </div>
                    </div>
                    <div class="single-dashboard-input">
                        <div class="single-info-input single-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Phone Number')); ?> </label>
                            <input class="form--control" id="phone" type="text" name="phone" placeholder="<?php echo e(__('Type Your Number')); ?>" value="<?php echo e($user_details->mobile); ?>">
                        </div>

                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Company')); ?> </label>
                            <input class="form--control" type="text" name="company" placeholder="<?php echo e(__('Type Your Number')); ?>" value="<?php echo e($user_details->company); ?>">
                        </div>
                    </div>
                    <div class="single-dashboard-input">
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your Country')); ?><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.mandatory-indicator','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.mandatory-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?></label>
                            <select class="form--control" name="country" id="countryField">
                                <option value=""><?php echo e(__('Select a country')); ?></option>
                                <?php $__currentLoopData = $countries ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($country->id == $user_details->country): echo 'selected'; endif; ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your State')); ?> </label>
                            <select class="form--control stateField" name="state" id="stateField">
                                <option value=""><?php echo e(__('Select a state')); ?></option>
                                <?php $__currentLoopData = $states ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($country->id == $user_details->state): echo 'selected'; endif; ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your City')); ?> </label>
                            <select class="form--control cityField" name="city" id="cityField">
                                <option value=""><?php echo e(__('Select a city')); ?></option>
                                <?php $__currentLoopData = $cities ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($country->id == $user_details->city): echo 'selected'; endif; ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="single-dashboard-input">
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Postal Code')); ?> </label>
                            <input class="form--control" type="text" name="postal_code" placeholder="<?php echo e(__('Type your postal code')); ?>" value="<?php echo e($user_details->postal_code); ?>">
                        </div>
                    </div>
                    <div class="single-dashboard-input">
                        <div class="single-info-input margin-top-30">
                            <label class="info-title"> <?php echo e(__('Your Address')); ?> </label>
                            <textarea class="form--control" name="address" id="address" cols="30" rows="10"> <?php echo e($user_details->address); ?> </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="btn-wrapper margin-top-10">
                    <button type="submit"
                            class="btn-submit btn-bg-1 profile-submit-btn"> <?php echo e(__('Save Changes')); ?> </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/manage-account-partials/my-profile.blade.php ENDPATH**/ ?>