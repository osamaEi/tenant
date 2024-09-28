<?php $__env->startSection('title'); ?> <?php echo e(__('Typography Settings')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .typo_admin .nice-select
        {
            line-height: 25px !important;
        }
    </style>
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/landlord/admin/css/nice-select.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-12 stretch-card typo_admin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4"><?php echo e(__('Typography Identity')); ?></h4>
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
                <form class="forms-sample" method="post" action="<?php echo e(route(route_prefix().'admin.general.typography.settings')); ?>">
                    <?php echo csrf_field(); ?>

                    <?php if(is_null(tenant())): ?>
                        <div class="form-group">
                            <label for="body_font_family"><?php echo e(__('Font Family')); ?></label>
                            <select class="form-control nice-select wide" name="body_font_family" id="body_font_family">
                                <?php $__currentLoopData = $google_fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $font_family => $font_variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($font_family); ?>" <?php if($font_family == get_static_option('body_font_family')): ?> selected <?php endif; ?>><?php echo e($font_family); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="body_font_variant"><?php echo e(__('Font Variant')); ?></label>
                            <?php
                                $font_family_selected = get_static_option('body_font_family') ?? get_static_option('body_font_family') ;
                                $get_font_family_variants = property_exists($google_fonts,$font_family_selected) ? (array) $google_fonts->$font_family_selected : ['variants' => array('regular')];
                            ?>
                            <select class="form-control nice-select wide" multiple id="body_font_variant" name="body_font_variant[]">
                                <?php $__currentLoopData = $get_font_family_variants['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $selected_variant = !empty(get_static_option('body_font_variant')) ? unserialize(get_static_option('body_font_variant')) : [];
                                    ?>
                                    <option value="<?php echo e($variant); ?>" <?php if(in_array($variant,$selected_variant)): ?> selected <?php endif; ?>><?php echo e(str_replace(['0,','1,'],['','i'],$variant)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <h4 class="header-title margin-top-80"><?php echo e(__("Heading Typography Settings")); ?></h4>
                        <div class="form-group">
                            <label for="heading_font"><?php echo e(__('Heading Font')); ?></label>
                            <label class="switch">
                                <input type="checkbox" name="heading_font"  <?php if(!empty(get_static_option('heading_font'))): ?> checked <?php endif; ?> id="heading_font">
                                <span class="slider"></span>
                            </label>
                            <small><?php echo e(__('Use different font family for heading tags ( h1,h2,h3,h4,h5,h6)')); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="heading_font_family"><?php echo e(__('Font Family')); ?></label>
                            <select class="form-control nice-select wide" name="heading_font_family" id="heading_font_family">
                                <?php $__currentLoopData = $google_fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $font_family => $font_variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($font_family); ?>" <?php if($font_family == get_static_option('heading_font_family')): ?> selected <?php endif; ?>><?php echo e($font_family); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group margin-top-50">
                            <label for="heading_font_variant"><?php echo e(__('Font Variant')); ?></label>
                            <?php
                                $font_family_selected = get_static_option('heading_font_family') ?? '';
                                $get_font_family_variants = property_exists($google_fonts,$font_family_selected) ? (array) $google_fonts->$font_family_selected : ['variants' => array('regular')];
                            ?>
                            <select class="form-control nice-select wide" multiple name="heading_font_variant[]" id="heading_font_variant">
                                <?php $__currentLoopData = $get_font_family_variants['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $selected_variant = !empty(get_static_option('heading_font_variant')) ? unserialize(get_static_option('heading_font_variant')) : [];
                                    ?>
                                    <option value="<?php echo e($variant); ?>"
                                            <?php if(in_array($variant,$selected_variant)): ?> selected <?php endif; ?>><?php echo e(str_replace(['0,','1,'],['','i'],$variant)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    <?php endif; ?>


                    <?php if(tenant()): ?>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                            <?php echo $__env->make('landlord.admin.general-settings.tenant.theme.typography-settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-gradient-primary mt-4 me-2"><?php echo e(__('Save Changes')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(global_asset('assets/landlord/admin/js/jquery.nice-select.min.js')); ?>"></script>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

                //load font variant

                $(document).on('change','.body_font_family',function (e) {
                    e.preventDefault();
                    var themeNum = $(this).data('theme');
                    var fontFamily =  $(this).val();

                    $.ajax({
                        url: "<?php echo e(route(route_prefix().'admin.general.typography.single')); ?>",
                        type: "POST",
                        data:{
                            _token: "<?php echo e(csrf_token()); ?>",
                            font_family : fontFamily,
                            theme : themeNum
                        },
                        success:function (data) {
                            var theme = data.theme;
                            var variantSelector = $('.body_font_variant_'+theme);
                            variantSelector.html('');

                            $.each(data.decoded_fonts.variants,function (index,value) {
                                var nameval = value.replace('0,','');
                                nameval = nameval.replace('1,','i');

                                variantSelector.append('<option value="'+value+'">'+nameval+'</option>');
                            });
                            variantSelector.niceSelect('update');
                        }
                    });
                });
                $(document).on('change','.heading_font_family',function (e) {
                    e.preventDefault();
                    var themeNum = $(this).data('theme');
                    var fontFamily =  $(this).val();

                    $.ajax({
                        url: "<?php echo e(route(route_prefix().'admin.general.typography.single')); ?>",
                        type: "POST",
                        data:{
                            _token: "<?php echo e(csrf_token()); ?>",
                            font_family : fontFamily,
                            theme : themeNum
                        },
                        success:function (data) {
                            var theme = data.theme;
                            var variantSelector = $('.heading_font_variant_'+theme);

                            variantSelector.html('');
                            $.each(data.decoded_fonts.variants,function (index,value) {
                                var nameval = value.replace('0,','');
                                nameval = nameval.replace('1,','i');

                                variantSelector.append('<option value="'+value+'">'+nameval+'</option>');
                            });

                            variantSelector.niceSelect('update');
                        }
                    });

                });

                if($('.nice-select').length > 0){
                    $('.nice-select').niceSelect();
                }

                let switch_one = $('input[data-theme=theme_one]');
                let switch_two = $('input[data-theme=theme_two]');
                let switch_three = $('input[data-theme=theme_three]');


                if(!switch_one.prop('checked')){
                    let theme = switch_one.data('theme');
                    var dependendFields = $('select[name=heading_font_family_'+theme+'], .heading_font_variant_'+theme+'');

                    dependendFields.parent().fadeOut();
                }
                if(!switch_two.prop('checked')) {
                    let theme = switch_two.data('theme');
                    var dependendFields = $('select[name=heading_font_family_'+theme+'], .heading_font_variant_'+theme+'');

                    dependendFields.parent().fadeOut();
                }
                if(!switch_three.prop('checked')) {
                    let theme = switch_three.data('theme');
                    var dependendFields = $('select[name=heading_font_family_'+theme+'], .heading_font_variant_'+theme+'');

                    dependendFields.parent().fadeOut();
                }

                $(document).on('change','input.heading_font',function (e) {
                    let theme = $(this).data('theme');
                    let themeName = theme.replace('heading_font_', '');

                    var dependendFields = $('select[name=heading_font_family_'+themeName+'], .heading_font_variant_'+themeName+'');

                    if(!$(this).prop('checked')){
                        dependendFields.parent().fadeOut();
                    }else{
                        dependendFields.parent().fadeIn();
                    }
                });


                $(document).on('click','#typography_submit_btn',function (e) {
                    e.preventDefault();
                    $(this).text('<?php echo e('Updating...'); ?>').prop('disabled',true);
                    $(this).parent().trigger('submit');
                })
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(route_prefix().'admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/landlord/admin/general-settings/typography-settings.blade.php ENDPATH**/ ?>