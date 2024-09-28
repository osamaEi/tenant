<?php $__env->startSection('title'); ?>
   <?php echo e(__('My Payment Logs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.css'); ?>
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

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.header-wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.header-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('left', null, []); ?> 
                            <h4 class="card-title"><?php echo e(__('Current Package Information')); ?> <?php echo e(__('(from main site)')); ?></h4>
                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <ul>
                        <li><strong><?php echo e(__('Package Name')); ?>:</strong> <?php echo e($current_package->package_name); ?></li>
                        <li><strong><?php echo e(__('Package Price')); ?>:</strong> <?php echo e(amount_with_currency_symbol($current_package->package_price)); ?></li>
                        <li><strong><?php echo e(__('Expire Date')); ?>:</strong> <?php echo e(tenant()->expire_date->format('d M Y')); ?> - <?php echo e(tenant()->expire_date->diffForHumans(parts: 4)); ?></li>
                    </ul>

                    <div class="d-flex justify-content-start gap-5">
                        <?php
                            $package = tenant()?->payment_log?->package;
                            $features = $package?->plan_features;
                            $themes = $package?->plan_themes;
                            $payment_gateways = $package?->plan_payment_gateways;
                        ?>

                        <div>
                            <p><Strong><?php echo e(__('Features')); ?></Strong></p>
                            <ol>
                                <?php $__currentLoopData = $features ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="text-capitalize"><?php echo e(str_replace('_', ' ', $feature->feature_name)); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                        </div>

                        <div>
                            <p><Strong><?php echo e(__('Payment Gateways')); ?></Strong></p>
                            <ol>
                                <?php $__currentLoopData = $payment_gateways ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="text-capitalize"><?php echo e(str_replace('_',' ',$feature->payment_gateway_name)); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                        </div>

                        <div>
                            <p><Strong><?php echo e(__('Themes')); ?></Strong></p>
                            <ol>
                                <?php $__currentLoopData = $themes ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="text-capitalize"><?php echo e(str_replace('_',' ', $feature->theme_slug)); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.header-wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.header-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('left', null, []); ?> 
                            <h4 class="card-title"><?php echo e(__('Your Package Order Payment logs')); ?> <?php echo e(__('(from main site)')); ?></h4>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('right', null, ['class' => 'd-flex']); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-with-popover','data' => ['url' => ''.e(route('landlord.homepage') .'#price_plan_section').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-with-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('landlord.homepage') .'#price_plan_section').'']); ?>
                                <?php echo e(__('Buy a Plan')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>

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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


                    <div class="table-wrap table-responsive">
                        <table class="table table-default table-striped table-bordered">
                            <thead class="text-white" style="background-color: #b66dff">
                            <tr>
                                <th scope="col"><?php echo e(__('SL #')); ?></th>
                                <th scope="col"><?php echo e(__('Package Order Info')); ?></th>
                                <th scope="col"><?php echo e(__('Payment Status')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $package_orders ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->id); ?></td>
                                    <td>
                                        <div class="user-dahsboard-order-info-wrap">
                                            <h5 class="title"><?php echo e($data->package_name); ?></h5>
                                            <div class="div">
                                                <small class="d-block"><strong><?php echo e(__('Order ID:')); ?></strong> #<?php echo e($data->id); ?></small>
                                                <small class="d-block"><strong><?php echo e(__('Package Price:')); ?></strong> <?php echo e(amount_with_currency_symbol($data->package_price)); ?></small>
                                                <small class="d-block"><strong><?php echo e(__('Order Status:')); ?></strong>
                                                    <?php if($data->status == 'pending'): ?>
                                                        <span class="alert alert-warning text-capitalize alert-sm alert-small customAlert2"><?php echo e(__($data->status )); ?></span>
                                                    <?php elseif($data->status == 'cancel'): ?>
                                                        <span class="alert alert-danger text-capitalize alert-sm alert-small customAlert2"><?php echo e(__($data->status)); ?></span>
                                                    <?php elseif($data->status == 'in_progress'): ?>
                                                        <span class="alert alert-info text-capitalize alert-sm alert-small customAlert2"><?php echo e(str_replace('_',' ',$data->status)); ?></span>
                                                    <?php else: ?>
                                                        <span class="alert alert-success text-capitalize alert-sm alert-small customAlert2"><?php echo e($data->status); ?></span>
                                                    <?php endif; ?>
                                                </small>

                                                <small class="d-block"><strong><?php echo e(__('Order Date:')); ?></strong> <?php echo e(date_format($data->created_at,'D m Y')); ?></small>
                                                <small class="d-block"><strong><?php echo e(__('Start Date:')); ?></strong> <?php echo e($data->start_date ?? ''); ?></small>
                                                <small class="d-block"><strong><?php echo e(__('Expire Date:')); ?></strong> <?php echo e($data->expire_date ?? 'Lifetime'); ?></small>
                                                <?php if($data->payment_status == 'complete'): ?>
                                                    <form action="<?php echo e(route(route_prefix().'my.package.invoice.generate')); ?>"  method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id" id="invoice_generate_order_field" value="<?php echo e($data->id); ?>">
                                                        <button class="btn btn-success btn-xs btn-small margin-top-10" type="submit"><?php echo e(__('Invoice')); ?></button>
                                                    </form>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="flexItems">
                                        <?php if($data->payment_status == 'pending' || $data->payment_status == null && $data->status != 'cancel'): ?>
                                            <span class="alert alert-warning text-capitalize alert-sm paymentBtn"><?php echo e($data->payment_status ?? __('Pending')); ?></span>
                                            <a href="<?php echo e(route('landlord.frontend.order.confirm',$data->package_id)); ?>" target="_blank" class="btn btn-success btn-sm mx-2"><?php echo e(__('Pay Now')); ?></a>
                                            <form action="<?php echo e(route('tenant.admin.package.order.cancel')); ?>" method="post" class="">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="package_id" value="<?php echo e($data->id); ?>">
                                                <button type="submit" class="btn btn-danger btn-sm my-2"><?php echo e(__('Cancel')); ?></button>
                                            </form>
                                        <?php else: ?>
                                            <span class="alert alert-success text-capitalize alert-sm" style="display: inline-block"><?php echo e($data->payment_status ?? __('Complete')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="<?php echo e(route('landlord.frontend.plan.order',$data->package_id)); ?>" target="_blank"><?php echo e(__('Renew')); ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.datatable.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('datatable.js'); ?>
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


<?php echo $__env->make(route_prefix().'admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/admin/my-orders/package-order.blade.php ENDPATH**/ ?>