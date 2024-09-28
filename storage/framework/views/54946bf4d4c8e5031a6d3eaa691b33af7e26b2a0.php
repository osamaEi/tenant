<?php
    $theme = getSelectedThemeData();
    $theme_name = $theme->name;
    $suffix = getSelectedThemeSlug();
?>
<div class="col">
    <h4 class="mb-4"><?php echo e(__($theme_name)); ?></h4>
    <div class="form-group">
        <label for="body_font_family"><?php echo e(__('Font Family')); ?></label>
        <select class="form-control nice-select wide body_font_family" name="body_font_family_<?php echo e($suffix); ?>" id="body_font_family" data-theme="<?php echo e($suffix); ?>">
            <?php $__currentLoopData = $google_fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $font_family => $font_variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($font_family); ?>" <?php if($font_family == get_static_option('body_font_family_'.$suffix)): ?> selected <?php endif; ?>><?php echo e($font_family); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="body_font_variant"><?php echo e(__('Font Variant')); ?></label>
        <?php
            $font_family_selected = get_static_option('body_font_family_'.$suffix) ?? get_static_option('body_font_family_'.$suffix) ;
            $get_font_family_variants = property_exists($google_fonts,$font_family_selected) ? (array) $google_fonts->$font_family_selected : ['variants' => array('regular')];
        ?>
        <select class="form-control nice-select wide body_font_variant_<?php echo e($suffix); ?>" multiple id="body_font_variant" name="body_font_variant_<?php echo e($suffix); ?>[]">
            <?php $__currentLoopData = $get_font_family_variants['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $selected_variant = !empty(get_static_option('body_font_variant_'.$suffix)) ? unserialize(get_static_option('body_font_variant_'.$suffix)) : [];
                ?>
                <option value="<?php echo e($variant); ?>" <?php if(in_array($variant,$selected_variant)): ?> selected <?php endif; ?>><?php echo e(str_replace(['0,','1,'],['','i'],$variant)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <h4 class="header-title margin-top-80 mt-5"><?php echo e(__("Heading Typography Settings")); ?></h4>
    <div class="form-group">
        <label for="heading_font"><?php echo e(__('Heading Font')); ?></label>
        <label class="switch">
            <input type="checkbox" name="heading_font_<?php echo e($suffix); ?>" class="heading_font"  <?php if(!empty(get_static_option('heading_font_'.$suffix))): ?> checked <?php endif; ?> id="heading_font" data-theme="<?php echo e($suffix); ?>">
            <span class="slider"></span>
        </label>
        <small><?php echo e(__('Use different font family for heading tags ( h1,h2,h3,h4,h5,h6)')); ?></small>
    </div>
    <div class="form-group">
        <label for="heading_font_family"><?php echo e(__('Font Family')); ?></label>
        <select class="form-control nice-select wide heading_font_family" name="heading_font_family_<?php echo e($suffix); ?>" id="heading_font_family" data-theme="<?php echo e($suffix); ?>">
            <?php $__currentLoopData = $google_fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $font_family => $font_variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($font_family); ?>" <?php if($font_family == get_static_option('heading_font_family_'.$suffix)): ?> selected <?php endif; ?>><?php echo e($font_family); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group margin-top-50">
        <label for="heading_font_variant"><?php echo e(__('Font Variant')); ?></label>
        <?php
            $font_family_selected = get_static_option('heading_font_family_'.$suffix) ?? '';
            $get_font_family_variants = property_exists($google_fonts,$font_family_selected) ? (array) $google_fonts->$font_family_selected : ['variants' => array('regular')];
        ?>
        <select class="form-control nice-select wide heading_font_variant_<?php echo e($suffix); ?>" multiple name="heading_font_variant_<?php echo e($suffix); ?>[]" id="heading_font_variant">
            <?php $__currentLoopData = $get_font_family_variants['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $selected_variant = !empty(get_static_option('heading_font_variant_'.$suffix)) ? unserialize(get_static_option('heading_font_variant_'.$suffix)) : [];
                ?>
                <option value="<?php echo e($variant); ?>"
                        <?php if(in_array($variant,$selected_variant)): ?> selected <?php endif; ?>><?php echo e(str_replace(['0,','1,'],['','i'],$variant)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/landlord/admin/general-settings/tenant/theme/typography-settings.blade.php ENDPATH**/ ?>