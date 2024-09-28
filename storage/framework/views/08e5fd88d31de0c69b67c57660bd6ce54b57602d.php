<?php
    $subtotal = 0;
    $carts = Cart::content();
    foreach ($carts ?? [] as $item)
    {
        $subtotal += calculatePrice($item->price, $item->options) * $item->qty;
    }

    $total = $subtotal;
?>

<h4 class="coupon-contents-title"> <?php echo e(__('Cart Total:')); ?> </h4>
<div class="coupon-contents-details mt-4">
    <ul class="coupon-contents-details-list coupon-border">
        <li class="coupon-contents-details-list-item">
            <h6 class="coupon-contents-details-list-item-title"> <?php echo e(__('Sub Total')); ?> </h6> <span class="coupon-contents-details-list-item-price fw-500"> <?php echo e(site_currency_symbol().$subtotal); ?> </span>
        </li>
    </ul>
    <ul class="coupon-contents-details-list coupon-border">
        <li class="coupon-contents-details-list-item"> <span> <?php echo e(__('Tax')); ?> (<?php echo e(__('Incl')); ?>. --%) </span> <span> -- </span> </li>
    </ul>
    <ul class="coupon-contents-details-list coupon-border">
        <li class="coupon-contents-details-list-item">
            <h6 class="coupon-title"> <?php echo e(__('Total Amount')); ?> </h6> <span class="coupon-price fw-500 color-heading"> <?php echo e(site_currency_symbol().$total); ?> </span>
        </li>
    </ul>
    <div class="btn-wrapper mt-3">
        <a href="<?php echo e(route('tenant.shop.checkout')); ?>" class="cmn-btn cmn-btn-bg-2 w-100 radius-0"> <?php echo e(__('Proceed to Checkout')); ?> </a>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/shop/cart/markup_for_controller/cart_price.blade.php ENDPATH**/ ?>