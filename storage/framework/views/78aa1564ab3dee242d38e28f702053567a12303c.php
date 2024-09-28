<?php
    // physical product prices along with tax
    $physical_items = Cart::content('default')->where('options.type', \App\Enums\ProductTypeEnum::PHYSICAL);
    $carts = $physical_items;
    $enableTaxAmount = !\Modules\TaxModule\Services\CalculateTaxServices::isPriceEnteredWithTax();
    $shippingTaxClass = \Modules\TaxModule\Entities\TaxClassOption::where("class_id", get_static_option("shipping_tax_class"))->sum("rate");
    $tax = Modules\TaxModule\Services\CalculateTaxBasedOnCustomerAddress::init();
    $uniqueProductIds = $carts->pluck("id")->unique()->toArray();

    $country_id = $country ?? 0;
    $state_id = $state ?? 0;
    $city_id = $city ?? 0;

    if(empty($uniqueProductIds))
    {
        $taxProducts = collect([]);
    }
    else
    {
        if(\Modules\TaxModule\Services\CalculateTaxBasedOnCustomerAddress::is_eligible()){
            $taxProducts = $tax
                ->productIds($uniqueProductIds)
                ->customerAddress($country_id, $state_id, $city_id)
                ->generate();
        }
        else
        {
            $taxProducts = collect([]);
        }
    }
?>

<?php
    $v_tax_total = 0;
    $subtotal = 0;
?>
<?php $__currentLoopData = $carts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $default_shipping_cost = null;
        $taxAmount = $taxProducts->where("id" , $data->id)->first();

        if(!empty($taxAmount)){
            $taxAmount->tax_options_sum_rate = $taxAmount->tax_options_sum_rate ?? 0;
            $price = calculatePrice($data->price, $taxAmount);
            $regular_price = calculatePrice($data->options->regular_price, $data->options);
            $v_tax_total += calculatePrice($data->price, $taxAmount, "percentage") * $data->qty;
        }else{
            $price = calculatePrice($data->price, $data->options);
            $regular_price = calculatePrice($data->options->regular_price, $data->options);
        }

        $subtotal += $price * $data->qty;
        $total = $subtotal + $v_tax_total;
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(count($physical_items) > 0): ?>
    <?php if(count($shipping_methods) > 0): ?>
        <ul class="coupon-contents-details-list coupon-border">
            <h6><?php echo e(__('Shipping')); ?></h6>
            <?php $__currentLoopData = $shipping_methods ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="coupon-contents-details-list-item" data-country="<?php echo e($country); ?>" data-state="<?php echo e($state); ?>">
                <span class="coupon-radio-item">
                    <input type="radio" id="shipping-option-<?php echo e($method['id']); ?>" value="<?php echo e($method['id']); ?>" name="shipping_method">
                    <label for="shipping-option-<?php echo e($method['id']); ?>">
                        <?php echo e($method['name']); ?>

                    </label>
                </span>
                    <span><?php echo e(amount_with_currency_symbol($method['options']['cost'])); ?></span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php elseif(count($default_shipping) > 0): ?>
        <ul class="coupon-contents-details-list coupon-border">
            <h6><?php echo e(__('Shipping')); ?></h6>
            <?php $__currentLoopData = $default_shipping ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="coupon-contents-details-list-item" data-country="<?php echo e($country); ?>" data-state="<?php echo e($state); ?>">
                <span class="coupon-radio-item">
                    <input type="radio" id="shipping-option-<?php echo e($method['id']); ?>" value="<?php echo e($method['id']); ?>"
                           name="shipping_method">
                    <label for="shipping-option-<?php echo e($method['id']); ?>">
                        <?php echo e($method['name']); ?>

                    </label>
                </span>
                    <span><?php echo e(amount_with_currency_symbol($method['options']['cost'])); ?></span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>

<?php if(count($physical_items) > 0): ?>
    <?php
        $addressObj = new stdClass();
        $addressObj->country_id = $country;
        $addressObj->state_id = $state;
        $location_tax_data = get_product_shipping_tax_data($addressObj);
        $tax_ = calculatePercentageAmount($total, $location_tax_data['product_tax'] ?? 0) ?? 0;
    ?>

    <ul class="coupon-contents-details-list coupon-border">
        <?php if(get_static_option('tax_system') == 'advance_tax_system'): ?>
            <?php if($enableTaxAmount): ?>
                <li class="coupon-contents-details-list-item"><span> <?php echo e(__('Tax (Incl)')); ?> </span>
                    <span> <?php echo e(amount_with_currency_symbol($v_tax_total ?? 0)); ?> </span>
                </li>
            <?php else: ?>
                <li class="coupon-contents-details-list-item"><span> <?php echo e(__('Tax (Incl)')); ?> </span>
                    <span> <?php echo e(get_static_option("display_price_in_the_shop") == 'including' ? __("Inclusive Tax") : ""); ?> </span>
                </li>
            <?php endif; ?>
        <?php else: ?>
            <li class="coupon-contents-details-list-item"><span> <?php echo e(__('Tax (Incl)')); ?> </span>
                <span> <?php echo e(amount_with_currency_symbol($tax_)); ?> </span>
            </li>
        <?php endif; ?>

        <li class="coupon-contents-details-list-item coupon-price"><span> <?php echo e(__('Coupon Discount (-)')); ?> </span>
            <span>
            <?php
                if (isset($coupon)) {
                    if ($coupon['discount_type'] == 'amount') {
                        $discount = site_currency_symbol().$coupon['discount'];
                    } else {
                        $discount = $coupon['discount'].'%';
                    }
                }
            ?>

                <?php echo e(isset($coupon) ? $discount : amount_with_currency_symbol(0.00)); ?>

        </span>
        </li>
        <li class="coupon-contents-details-list-item price-shipping">
            <span> <?php echo e(__('Shipping Cost (+)')); ?> </span>
            <span> -- </span>
        </li>
    </ul>
<?php endif; ?>
<ul class="coupon-contents-details-list coupon-border">
    <?php
        $subtotal = null;
        $itemsTotal = null;
        $v_tax_total = 0;
        $total = 0;
    ?>
    <?php $__currentLoopData = $carts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $default_shipping_cost = null;
            $taxAmount = $taxProducts->where("id" , $data->id)->first();

            if(!empty($taxAmount)){
                $taxAmount->tax_options_sum_rate = $taxAmount->tax_options_sum_rate ?? 0;
                $price = calculatePrice($data->price, $taxAmount);
                $regular_price = calculatePrice($data->options->regular_price, $data->options);
                $v_tax_total += calculatePrice($data->price, $taxAmount, "percentage") * $data->qty;
            }else{
                $price = calculatePrice($data->price, $data->options);
                $regular_price = calculatePrice($data->options->regular_price, $data->options);
            }

            $subtotal += $price * $data->qty;
            $total = $subtotal + $v_tax_total;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php
//        // physical product prices along with tax
//        $physical_items = Cart::content('default')->where('options.type', \App\Enums\ProductTypeEnum::PHYSICAL);
//        $subtotal = 0.0;
//        foreach ($physical_items ?? [] as $item)
//        {
//            $subtotal += $item->price * $item->qty;
//        }
//
//        $taxed_price = ($subtotal * $product_tax) / 100;
//        $total = $subtotal + $taxed_price;

        // digital product prices
        $digital_items = Cart::content('default')->where('options.type', \App\Enums\ProductTypeEnum::DIGITAL);
        $subtotal = 0.0;
        foreach ($digital_items ?? [] as $item)
        {
            $digital_product = \Modules\DigitalProduct\Entities\DigitalProduct::find($item->id);
            $taxed_price = 0.0;
            if (!is_null($digital_product->tax))
            {
                $tax = $digital_product?->getTax?->tax_percentage;
                $taxed_price = ($item->price * $tax) / 100;
            }
            $subtotal += $item->price + $taxed_price;
        }

        $total += $subtotal;
    ?>

    <?php if(get_static_option('tax_system') == 'advance_tax_system'): ?>
        <li class="coupon-contents-details-list-item price-total" data-total="<?php echo e($total); ?>">
            <h6 class="coupon-title"> <?php echo e(__('Total Amount')); ?> </h6> <span
                class="coupon-price fw-500 color-heading"> <?php echo e(amount_with_currency_symbol($total)); ?> </span>
        </li>
    <?php else: ?>
        <li class="coupon-contents-details-list-item price-total" data-total="<?php echo e($total+$tax_); ?>">
            <h6 class="coupon-title"> <?php echo e(__('Total Amount')); ?> </h6> <span
                class="coupon-price fw-500 color-heading"> <?php echo e(amount_with_currency_symbol($total+$tax_)); ?> </span>
        </li>
    <?php endif; ?>

</ul>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/checkout/markup_for_controller/shipping_tax_ajax.blade.php ENDPATH**/ ?>