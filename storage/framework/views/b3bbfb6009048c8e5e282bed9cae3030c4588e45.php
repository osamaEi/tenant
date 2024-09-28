<section class="contact-area section-bg-1 padding-top-95 padding-bottom-60">
    <div class="container">
        <div class="row g-0">
            <?php if(array_key_exists('repeater_title_', $data['repeater_data'])): ?>
                <?php $__currentLoopData = $data['repeater_data']['repeater_title_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 contact-child">
                        <div class="single-contact center-text bg-white">
                            <div class="single-contact-content">
                                <div class="single-contact-content-icon radius-10">
                                    <?php echo render_image_markup_by_attachment_id($data['repeater_data']['repeater_image_'][$key]); ?>

                                </div>
                                <div class="single-contact-content-details mt-4">
                                    <h3 class="single-contact-content-title"> <?php echo e($data['repeater_data']['repeater_title_'][$key]); ?> </h3>
                                    <span class="single-contact-content-link">
                                    <a href="javascript:void(0)"><?php echo e($data['repeater_data']['repeater_info_'][$key]); ?></a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php $__env->startSection('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom-js.contact-form-store','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom-js.contact-form-store'); ?>
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
<?php $__env->stopSection(); ?>

<?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/landlord/addons/common/contact_cards.blade.php ENDPATH**/ ?>