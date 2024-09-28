<div class="form-group">
    <label for="site_global_currency"><?php echo e(__('Site Global Currency')); ?></label>
    <select name="site_global_currency" class="form-control"
            id="site_global_currency">
  <?php $__currentLoopData = script_currency_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur => $symbol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($cur); ?>"
  <?php if(get_static_option('site_global_currency') == $cur): ?> selected <?php endif; ?>><?php echo e($cur.' ( '.$symbol.' )'); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="site_currency_symbol_position"><?php echo e(__('Currency Symbol Position')); ?></label>
    <?php $all_currency_position = ['left','right']; ?>
    <select name="site_currency_symbol_position" class="form-control"
            id="site_currency_symbol_position">
        <?php $__currentLoopData = $all_currency_position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cur); ?>"
                    <?php if(get_static_option('site_currency_symbol_position') == $cur): ?> selected <?php endif; ?>><?php echo e(ucwords($cur)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.input','data' => ['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_symbol')).'','name' => 'site_custom_currency_symbol','label' => ''.e(__('Custom Currency Symbol')).'','info' => ''.e(__('If you don\'t have any custom symbol than leave this field empty as default')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_symbol')).'','name' => 'site_custom_currency_symbol','label' => ''.e(__('Custom Currency Symbol')).'','info' => ''.e(__('If you don\'t have any custom symbol than leave this field empty as default')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.input','data' => ['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_thousand_separator') ?? ',').'','name' => 'site_custom_currency_thousand_separator','label' => ''.e(__('Currency Thousand Separator')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_thousand_separator') ?? ',').'','name' => 'site_custom_currency_thousand_separator','label' => ''.e(__('Currency Thousand Separator')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.input','data' => ['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_decimal_separator') ?? '.').'','name' => 'site_custom_currency_decimal_separator','label' => ''.e(__('Currency Decimal Separator')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','value' => ''.e(get_static_option('site_custom_currency_decimal_separator') ?? '.').'','name' => 'site_custom_currency_decimal_separator','label' => ''.e(__('Currency Decimal Separator')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.switcher','data' => ['value' => ''.e(get_static_option('currency_amount_type_status')).'','name' => 'currency_amount_type_status','label' => ''.e(__('Yes/No Amount Decimal Mode')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(get_static_option('currency_amount_type_status')).'','name' => 'currency_amount_type_status','label' => ''.e(__('Yes/No Amount Decimal Mode')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="form-group">
    <label for="site_default_payment_gateway"><?php echo e(__('Default Payment Gateway')); ?></label>
    <select name="site_default_payment_gateway" class="form-control">
        <?php
            $all_gateways = ['paypal','manual_payment','mollie','paytm','stripe','razorpay','flutterwave','paystack','midtranse','marcadopago','instamojo','cashfree', 'toyyibpay', 'zitopay', 'squareup', 'cinetpay', 'paytabs', 'billplz', 'payfast'];
        ?>
        <?php $__currentLoopData = $all_gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($gateway); ?>" <?php if(get_static_option('site_default_payment_gateway') == $gateway): ?> selected <?php endif; ?>><?php echo e(ucwords(str_replace('_',' ',$gateway))); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php $global_currency = get_static_option('site_global_currency');?>


<?php if($global_currency != 'USD'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_usd_exchange_rate"><?php echo e(__($global_currency.' to USD Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_usd_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_usd_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__("enter {$global_currency} to USD exchange rate. eg: 1 {$global_currency} = ? USD")); ?></span>
    </div>
<?php endif; ?>

<?php if($global_currency != 'IDR'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_idr_exchange_rate"><?php echo e(__($global_currency.' to IDR Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_idr_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_idr_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__("enter {$global_currency} to IDR exchange rate. eg: 1 {$global_currency} = ? IDR")); ?></span>
    </div>
<?php endif; ?>


<?php if($global_currency != 'INR'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_inr_exchange_rate"><?php echo e(__($global_currency.' to INR Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_inr_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_inr_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__('enter '.$global_currency.' to INR exchange rate. eg: 1'.$global_currency.' = ? INR')); ?></span>
    </div>
<?php endif; ?>

<?php if($global_currency != 'NGN'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_ngn_exchange_rate"><?php echo e(__($global_currency.' to NGN Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_ngn_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_ngn_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__('enter '.$global_currency.' to NGN exchange rate. eg: 1'.$global_currency.' = ? NGN')); ?></span>
    </div>
<?php endif; ?>

<?php if($global_currency != 'ZAR'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_zar_exchange_rate"><?php echo e(__($global_currency.' to ZAR Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_zar_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_zar_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__("enter {$global_currency} to ZAR exchange rate. eg: 1 {$global_currency} = ? ZAR")); ?></span>
    </div>
<?php endif; ?>


<?php if($global_currency != 'BRL'): ?>
    <div class="form-group">
        <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_brl_exchange_rate"><?php echo e(__($global_currency.' to BRL Exchange Rate')); ?></label>
        <input type="text" class="form-control"
               name="site_<?php echo e(strtolower($global_currency)); ?>_to_brl_exchange_rate"
               value="<?php echo e(get_static_option('site_'.$global_currency.'_to_brl_exchange_rate')); ?>">
        <span class="info-text"><?php echo e(__('enter '.$global_currency.' to BRL exchange rate. eg: 1'.$global_currency.' = ? BRL')); ?></span>
    </div>
<?php endif; ?>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/landlord/admin/general-settings/settings-portion/payment-common-settings.blade.php ENDPATH**/ ?>