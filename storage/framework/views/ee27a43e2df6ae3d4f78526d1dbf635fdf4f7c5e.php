<?php $__env->startSection('title'); ?>
    <?php echo e(__('New Shipping Method')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="margin-top-40">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-msg'); ?>
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
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.error-msg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-msg'); ?>
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
<?php endif; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrapper d-flex justify-content-between">
                            <h4 class="header-title mb-4"><?php echo e(__('Add New Shipping Method')); ?></h4>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('shipping-method-list')): ?>
                            <a href="<?php echo e(route('tenant.admin.shipping.method.all')); ?>" class="btn btn-primary"><?php echo e(__('All Shipping Methods')); ?></a>
                            <?php endif; ?>
                        </div>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('shipping-method-create')): ?>
                        <form action="<?php echo e(route('tenant.admin.shipping.method.new')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="zone_id"><?php echo e(__('Zone')); ?></label>
                                        <select name="zone_id" id="zone_id" class="form-control">
                                            <?php $__currentLoopData = $all_zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($zone->id); ?>"><?php echo e($zone->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"><?php echo e(__('Title')); ?></label>
                                        <select name="title" id="title" class="form-control">
                                            <?php $__currentLoopData = $all_shipping_method_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tax_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($tax_status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <p class="text-small"><?php echo e(__('you can chagne this title, in edit of this shipping method')); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="tax_status"><?php echo e(__('Tax Status')); ?></label>
                                        <select name="tax_status" id="tax_status" class="form-control">
                                            <?php $__currentLoopData = $all_tax_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tax_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($tax_status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status"><?php echo e(__('Status')); ?></label>
                                        <select name="status" id="status" class="form-control">
                                            <?php $__currentLoopData = $all_publish_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="setting_preset"><?php echo e(__('Setting')); ?></label>
                                        <select name="setting_preset" id="setting_preset" class="form-control">
                                            <?php $__currentLoopData = $all_setting_presets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group" style="display: none">
                                        <label for="minimum_order_amount"><?php echo e(__('Minimum Order Amount')); ?></label>
                                        <input type="number" id="minimum_order_amount" name="minimum_order_amount" class="form-control" placeholder="<?php echo e(__('Minimum Order Amount')); ?>">
                                    </div>

                                    <div class="form-group" style="display: none">
                                        <label for="coupon_code"><?php echo e(__('Coupon Code')); ?></label>
                                        <select name="coupon_code" id="coupon_code" class="form-control">
                                            <option value="">Select coupon code</option>
                                            <?php $__currentLoopData = $all_coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($coupon->code); ?>"><?php echo e($coupon->code); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="cost"><?php echo e(__('Cost')); ?></label>
                                        <input type="number" id="cost" name="cost" class="form-control" placeholder="<?php echo e(__('Cost')); ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary my-4 px-4"><?php echo e(__('Create Shipping Method')); ?></button>
                                </div>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('#setting_preset').on('change', function () {
                    let presets = ['min_order', 'min_order_or_coupon', 'min_order_and_coupon'];
                    let selected_value = $('#setting_preset').val();
                    let allOptions = ['min_order_or_coupon','min_order_and_coupon'];

                    if (presets.includes(selected_value)) {
                        $('#minimum_order_amount').parent().fadeIn();
                        if(allOptions.includes(selected_value)){
                             $('#coupon_code').parent().fadeIn();
                        }else{
                            $('#coupon_code').parent().fadeOut();
                        }
                    } else {
                        $('#minimum_order_amount').parent().fadeOut();
                        $('#coupon_code').parent().fadeOut();
                    }
                });
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/ShippingModule/Resources/views/tenant/admin/method/new.blade.php ENDPATH**/ ?>