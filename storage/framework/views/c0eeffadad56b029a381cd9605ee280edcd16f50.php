<div class="col-xl-8 col-lg-7 mt-4">
    <div class="checkout-wrapper">
        <?php if(!Auth::guard('web')->check()): ?>
            <?php echo $__env->make(include_theme_path('shop.checkout.partials.sign_in'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php
            $readonly = $billing_info ? 'readonly' : '';
        ?>
        <div class="checkout-inner mt-4 mt-lg-5">
            <h4 class="checkout-inner-title fw-500"> <?php echo e(__('Billing Details')); ?> </h4>
            <div class="checkout-inner-contents">
                <div class="checkout-form-wrapper mt-2">
                    <form action="<?php echo e(route('tenant.shop.checkout')); ?>" method="POST" class="checkout-form" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="payment_gateway" value="<?php echo e(get_static_option('site_default_payment_gateway')); ?>"
                               class="payment_gateway_passing_clicking_name">
                        <input type="hidden" name="manual_trasaction_id" class="form-control" value="">
                        <input type="hidden" class="shift_another_address" name="shift_another_address">
                        <input type="hidden" class="used_coupon" name="used_coupon">
                        <input type="hidden" class="cash_on_delivery" name="cash_on_delivery">
                        <input type="hidden" class="shipping-method" name="shipping_method">

                        <div class="checkout-form-flex">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('First Name')); ?> </label>
                                <input class="form--control" type="text" name="name" placeholder="<?php echo e(__('Type First Name')); ?>" value="<?php if(auth()->guard('web')->check()): ?><?php echo e($billing_info ? $billing_info->full_name:auth('web')->user()?->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>" <?php echo e($readonly); ?>>
                            </div>
                        </div>
                        <div class="checkout-form-flex">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('Mobile Number')); ?> </label>
                                <input class="form--control" type="tel" placeholder="<?php echo e(__('Type Mobile Number')); ?>" name="phone" value="<?php if(auth()->guard('web')->check()): ?><?php echo e($billing_info ? $billing_info->phone : (!empty(auth('web')->user()?->mobile) ? auth('web')->user()?->mobile : old('phone'))); ?><?php else: ?><?php echo e(old('phone')); ?><?php endif; ?>" <?php echo e($readonly); ?>>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('Email Address')); ?> </label>
                                <input class="form--control" type="email" placeholder="<?php echo e(__('Type Email')); ?>" name="email" value="<?php if(auth()->guard('web')->check()): ?><?php echo e($billing_info ? $billing_info->email : auth('web')->user()?->email); ?><?php else: ?><?php echo e(old('email')); ?><?php endif; ?>" <?php echo e($readonly); ?>>
                            </div>

                        </div>
                        <div class="checkout-form-flex">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('Country')); ?> </label>
                                <select class="form--control billing_address_country" name="country" id="country">
                                    <?php if($billing_info == null): ?>
                                        <option value="" selected disabled><?php echo e(__('Select a country')); ?></option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <option <?php echo e($readonly); ?>><?php echo e($billing_info?->country?->name); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('State')); ?> </label>
                                <select class="form--control billing_address_state stateField" name="state" id="state">
                                    <?php if($billing_info != null): ?>
                                        <option <?php echo e($readonly); ?>><?php echo e($billing_info?->state?->name); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('City/Town')); ?> </label>
                                <select class="form--control billing_address_city cityField" name="city" id="city">
                                    <?php if($billing_info != null): ?>
                                        <option <?php echo e($readonly); ?>><?php echo e($billing_info?->city_rel?->name); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="checkout-form-flex">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('Address')); ?> </label>
                                <textarea class="form--control form--message" name="address" placeholder="<?php echo e(__('Type Address')); ?>" <?php echo e($readonly); ?>><?php if(auth()->guard('web')->check()): ?><?php echo e($billing_info ? $billing_info->address : (!empty(auth('web')->user()?->address) ? auth('web')->user()?->address : old('address'))); ?><?php else: ?><?php echo e(old('address')); ?><?php endif; ?></textarea>
                            </div>
                        </div>

                        <?php if(!Auth::guard('web')->check()): ?>
                            <div class="create-account-wrapper mt-4 mt-lg-5">
                                <a href="javascript:void(0)" class="create-accounts click-open-form2 fw-500 color-heading"> <?php echo e(__('Create An Accounts')); ?> </a>
                                <input type="hidden" class="create_accounts_input" name="create_accounts_input">

                                <div class="checkout-form-open">
                                    <div class="checkout-form-flex">
                                        <div class="single-input mt-4">
                                            <label class="label-title mb-3"> <?php echo e(__('Username')); ?> </label>
                                            <input class="form--control" type="text" name="create_username" placeholder="<?php echo e(__('Type a unique username')); ?>">
                                        </div>
                                    </div>

                                    <div class="checkout-form-flex">
                                        <div class="single-input mt-4">
                                            <label class="label-title mb-3"> <?php echo e(__('Password')); ?> </label>
                                            <input class="form--control" type="password" name="create_password" placeholder="<?php echo e(__('Type a strong password')); ?>">
                                        </div>

                                        <div class="single-input mt-4">
                                            <label class="label-title mb-3"> <?php echo e(__('Confirm Password')); ?> </label>
                                            <input class="form--control" type="password" name="create_password_confirmation" placeholder="<?php echo e(__('Confirm your password')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($billing_info != null): ?>
                            <?php echo $__env->make(include_theme_path('shop.checkout.partials.shift_another_address'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <div class="checkout-form-flex">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> <?php echo e(__('Order Notes')); ?> </label>
                                <textarea class="form--control form--message" name="message" placeholder="<?php echo e(__('Type Messages')); ?>"><?php echo e(old('message')); ?></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/electro/frontend/shop/checkout/partials/checkout_left_side.blade.php ENDPATH**/ ?>