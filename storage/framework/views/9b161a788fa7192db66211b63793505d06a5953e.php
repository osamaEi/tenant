<?php
    $classOption = $classOption ?? new stdClass();
?>

<tr>
    <td>
        <input value="<?php echo e($classOption->tax ?? ""); ?>" type="checkbox" class="tax-option-row-check" id="tax-option-row-check"/>
    </td>
    <td>
        <input value="<?php echo e($classOption->tax_name ?? ""); ?>" type="text" name="tax_name[]" class="form-control" required>
    </td>
    <td>
        <select name="country_id[]" id="country_id" class="form-control">
            <option value=""><?php echo e(__("Select Country")); ?></option>

            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if(!empty($classOption)): ?>
                            <?php echo e($country->id == ($classOption->country_id ?? '') ? "selected" : ""); ?>

                        <?php endif; ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </td>
    <td>
        <select name="state_id[]" id="state_id" class="form-control">
            <option value=""><?php echo e(__("Select State")); ?></option>
            <?php $__currentLoopData = $classOption?->states ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e($state->id == $classOption->state_id ? "selected" : ""); ?> value="<?php echo e($state->id ?? ""); ?>"><?php echo e($state->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </td>
    <td>
        <select name="city_id[]" id="city_id" class="form-control">
            <option value=""><?php echo e(__("Select City")); ?></option>
            <?php $__currentLoopData = $classOption?->cities ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e($city->id == $classOption->city_id ? "selected" : ""); ?> value="<?php echo e($city->id ?? ""); ?>"><?php echo e($city->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </td>
    <td>
        <input value="<?php echo e($classOption->postal_code ?? ""); ?>" type="text" name="postal_code[]" id="postal_code" class="form-control">
    </td>
    <td>
        <input value="<?php echo e($classOption->rate ?? '0.00'); ?>" type="number" name="rate[]" step="0.01" id="rate" class="form-control" required
               pattern="[A-Za-z0-9]{5}">
    </td>
    <td class="d-none">
        <input <?php echo e(($classOption->is_compound ?? "") == 1 ? "checked" : ""); ?> type="checkbox" name="is_compound[]"
               id="compound" value="1"/>
    </td>
    <td>
        <input <?php echo e(($classOption->is_shipping ?? "") == 1 ? "checked" : ""); ?> type="checkbox" name="is_shipping[]"
               id="shipping" value="1"/>
    </td>
    <td>
        <input value="<?php echo e($classOption->priority ?? ""); ?>" type="number" name="priority[]" id="priority" class="form-control" required>
    </td>
</tr>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/TaxModule/Resources/views/components/tax-class-option-row.blade.php ENDPATH**/ ?>