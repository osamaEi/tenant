<?php $__env->startSection('title', __('Import Settings')); ?>

<?php $__env->startSection('style'); ?>
    <style>
        li{
            font-size: 16px;
            cursor: pointer;
        }

        ol.level-one{
            list-style-type: none;
        }
        ol.level-one > li{
            background-color: rgb(241, 242, 252);
            border: 1px solid #c1c2cb;
            border-radius: 5px;
            padding: 20px;
            padding-left: 30px;
            margin-bottom: 15px;
        }
        ol.level-one > li:hover{
            border-radius: 5px;
            background-color: rgb(255, 249, 249);
        }

        ol.level-two{
            background-color: rgb(232, 238, 246);
            border: 1px solid #b1b5bb;
            border-radius: 5px;
            padding: 20px;
            padding-left: 30px;
        }
        ol.level-two > li{
            margin-bottom: 15px;
        }
        ol.level-two > li:hover{
            border-radius: 5px;
            background-color: rgb(255, 246, 246);
        }

        ol.level-three{
            background-color: rgb(238, 247, 248);
            border: 1px solid #b7c4c5;
            border-radius: 5px;
            padding: 20px;
            padding-left: 45px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
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

                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="d-flex justify-content-between">
                            <h4 class="customMarkup__single__title text-capitalize"><?php echo e(__('Import Countries, States and Cities (Only CSV File)')); ?></h4>
                            <a href="<?php echo e(global_asset('core/Modules/CountryManage/sample-data.csv')); ?>" class="btn btn-info btn-sm" download><?php echo e(__('Download Sample File')); ?></a>
                        </div>

                        <div class="customMarkup__single__inner mt-4">
                            <?php if(!isset($import_data)): ?>
                                <form action="<?php echo e(route('tenant.admin.settings.import.csv.update.settings')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="#"><?php echo e(__('File')); ?></label>
                                        <input type="file" name="csv_file" accept=".csv" class="form-control" required>
                                        <div class="info-text"><?php echo e(__('only csv file are allowed with separate by (,) comma.')); ?></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary loading-btn"><?php echo e(__('Submit')); ?></button>
                                </form>
                            <?php else: ?>
                                <form action="<?php echo e(route('tenant.admin.settings.import.database')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <ol class="level-one">
                                        <?php $__currentLoopData = $import_data['country'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($index.'. '.$country['name']); ?>

                                                <ol class="level-two">
                                                    <?php $__currentLoopData = $import_data['state'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($state['country_id'] !== $country['id']) continue; ?>

                                                        <li>
                                                            <?php echo e($state['name']); ?>

                                                            <ol class="level-three">
                                                                <?php $__currentLoopData = $import_data['city'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($city['state_id'] !== $state['id']) continue; ?>

                                                                    <li><?php echo e($city['name']); ?></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ol>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ol>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>

                                    <div class="d-flex justify-content-end gap-3">
                                        <a href="<?php echo e(route('tenant.admin.settings.import.cancel')); ?>" class="btn btn-danger loading-btn mt-4"><?php echo e(__('Discard')); ?></a>
                                        <button type="submit" class="btn btn-primary loading-btn mt-4"><?php echo e(__('Import')); ?></button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/CountryManage/Resources/views/tenant/admin/import-settings.blade.php ENDPATH**/ ?>