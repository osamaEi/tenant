<?php
    if(!isset($metaData)){
        $metaData = null;
    }
?>

<div class="meta-body-wrapper mt-3">
    <h4 class="dashboard-common-title-two mb-4"> <?php echo e(__("Meta SEO")); ?> </h4>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link general-meta active" id="general-meta-info-tab" data-bs-toggle="tab" data-bs-target="#general-meta-info" type="button" role="tab" aria-controls="home" aria-selected="true">
                <?php echo e(__("General meta info")); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="facebook-meta-tab" data-bs-toggle="tab" data-bs-target="#facebook-meta" type="button" role="tab" aria-controls="facebook-meta" aria-selected="false">
                <?php echo e(__("Facebook meta")); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="twitter-meta-tab" data-bs-toggle="tab" data-bs-target="#twitter-meta" type="button" role="tab" aria-controls="twitter-meta" aria-selected="false">
                <?php echo e(__("Twitter meta")); ?></button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane py-4 fade show active general-meta-pane" id="general-meta-info" role="tabpanel" aria-labelledby="general-meta-info-tab">
            <h4><?php echo e(__('General Info')); ?></h4>
            <div class="form-group dashboard-input">
                <label for="general-title"><?php echo e(__("Title")); ?></label>
                <input type="text" id="general-title" value="<?php echo e($metaData?->title); ?>" data-role="tagsinput" class="form--control radius-10 tags_input" name="general_title" placeholder="<?php echo e(__("General info title")); ?>">
            </div>
            <div class="form-group">
                <label for="general-description"><?php echo e(__("Description")); ?></label>
                <textarea type="text" id="general-description" name="general_description" class="form--control radius-10 py-2" rows="6" placeholder="<?php echo e(__("General info description")); ?>"><?php echo e($metaData?->description); ?></textarea>
            </div>
        </div>
        <div class="tab-pane py-4 fade" id="facebook-meta" role="tabpanel" aria-labelledby="facebook-meta-tab">
            <h4><?php echo e(__("Facebook Info")); ?></h4>
            <div class="form-group dashboard-input">
                <label for="facebook-title"><?php echo e(__("Title")); ?></label>
                <input type="text" id="facebook-title" name="facebook_title" value="<?php echo e($metaData?->fb_title); ?>" data-role="tagsinput" class="form--control radius-10 tags_input" placeholder="<?php echo e(__("General info title")); ?>">
            </div>
            <div class="form-group">
                <label for="facebook-description"><?php echo e(__("Description")); ?></label>
                <textarea type="text" id="facebook-description" name="facebook_description" class="form--control radius-10 py-2" rows="6" placeholder="<?php echo e(__("General info description")); ?>"><?php echo e($metaData?->fb_description); ?></textarea>
            </div>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.media-upload','data' => ['id' => $metaData?->fb_image,'title' => __('General Info Meta Image'),'name' => 'facebook_image','dimentions' => '200x200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaData?->fb_image),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('General Info Meta Image')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('facebook_image'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('200x200')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <div class="tab-pane py-4 fade" id="twitter-meta" role="tabpanel" aria-labelledby="twitter-meta-tab">
            <h4><?php echo e(__("Twitter Info")); ?></h4>
            <div class="form-group dashboard-input">
                <label for="general-title"><?php echo e(__("Title")); ?></label>
                <input type="text" id="twitter-title" value="<?php echo e($metaData?->tw_title); ?>" name="twitter_title" data-role="tagsinput" class="form--control radius-10 tags_input" placeholder="<?php echo e(__("General info title")); ?>">
            </div>
            <div class="form-group">
                <label for="general-description"><?php echo e(__("Description")); ?></label>
                <textarea type="text" id="twitter-description" name="twitter_description" class="form--control radius-10 py-2" rows="6" placeholder="<?php echo e(__("General info description")); ?>"><?php echo e($metaData?->tw_description); ?></textarea>
            </div>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.media-upload','data' => ['id' => $metaData?->tw_image,'title' => __('General Info Meta Image'),'name' => 'twitter_image','dimentions' => '200x200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaData?->tw_image),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('General Info Meta Image')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('twitter_image'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('200x200')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Product/Resources/views/components/meta-seo.blade.php ENDPATH**/ ?>