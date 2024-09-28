<span class="checkout-title fw-500 color-heading"> <i class="las la-exclamation-circle"></i> <?php echo e(__('Returning Customer?')); ?> <a class="click-open-form" href="javascript:void(0)"> <?php echo e(__('Click here to Login')); ?> </a> </span>

<div class="checkout-form-open">
    <div class="checkout-form-contents">
        <h2 class="checkout-form-contents-title"> <?php echo e(__('Sign In')); ?> </h2>
        <div class="login-form mt-4">
            <div class="contact-page-form style-01" id="login_form_order_page">
                <?php echo csrf_field(); ?>
                <div class="error-wrap"></div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                           placeholder="<?php echo e(__('Username')); ?>">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control"
                           placeholder="<?php echo e(__('Password')); ?>">
                </div>
                <div class="form-group btn-wrapper">
                    <button class="btn-default rounded-btn" id="login_btn"
                            type="submit"><?php echo e(__('Login')); ?></button>
                </div>
                <div class="row mb-4 rmber-area">
                    <div class="col-6">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" name="remember" class="custom-control-input"
                                   id="remember">
                            <label class="custom-control-label"
                                   for="remember"><?php echo e(__('Remember Me')); ?></label>
                        </div>
                    </div>
                    <div class="col-6 order-page-login-register-right">
                        <a class="d-block"
                           href="<?php echo e(route('tenant.user.register')); ?>"><?php echo e(__('Create new account?')); ?></a>
                        <a href="<?php echo e(route('tenant.user.forget.password')); ?>"><?php echo e(__('Forgot Password?')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/checkout/partials/sign_in.blade.php ENDPATH**/ ?>