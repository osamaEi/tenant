<table class="customs-tables pt-4 position-relative" id="myTable">
    <div class="load-ajax-data"></div>
    <thead class="head-bg">
    <tr>
        <th class="check-all-rows p-3">
            <div class="mark-all-checkbox text-center">
                <input type="checkbox" class="all-checkbox">
            </div>
        </th>
        <th> <?php echo e(__("ID")); ?> </th>
        <th> <?php echo e(__("Name")); ?> </th>
        <th> <?php echo e(__("Type")); ?> </th>
        <th> <?php echo e(__("Categories")); ?> </th>
        <th> <?php echo e(__("Price")); ?> </th>
        <th> <?php echo e(__("Status")); ?> </th>
        <th> <?php echo e(__("Actions")); ?> </th>
    </tr>
    </thead>
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $products['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="table-cart-row">
            <td data-label="Check All">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-delete-checkbox','data' => ['id' => $product->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-delete-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </td>

            <td>
                <span class="quantity-number"><?php echo e($product->id); ?></span>
            </td>

            <td class="product-name-info">
                <div class="d-flex gap-2">
                    <div class="logo-brand">
                        <?php echo render_image_markup_by_attachment_id($product->image_id); ?>

                    </div>
                    <div class="product-summary">
                        <p class="font-weight-bold mb-1"><?php echo e($product->name); ?></p>
                        <p><?php echo e(Str::words($product->summary, 5)); ?></p>

                        <?php if($product->file == 'no file added'): ?>
                            <small class="py-0 my-0 text-danger"><?php echo e(__('No file added')); ?></small>
                        <?php endif; ?>
                    </div>
                </div>
            </td>

            <td class="price-td" data-label="Type">
                <span class="quantity-number"> <?php echo e($product->productType()->name ?? ''); ?></span>
            </td>

            <td class="price-td text-start" data-label="Name">
                <span class="category-field"><?php if($product?->category?->name): ?>
                      <b> <?php echo e(__('Category')); ?>:  </b>
                      <?php endif; ?><?php echo e($product?->category?->name); ?>

                </span> <br>
                <span class="category-field">
                    <?php if($product?->subCategory?->name): ?>
                      <b> <?php echo e(__('Sub Category')); ?>:  </b>
                    <?php endif; ?><?php echo e($product?->subCategory?->name); ?>

                </span> <br>
            </td>

            <td class="price-td" data-label="Price">
                <?php
                    $price = $product->regular_price;
                    $regular_price = null;
                    if (!empty($product->sale_price) && $product->sale_price > 0)
                    {
                        $price = $product->sale_price;
                        $regular_price = $product->regular_price;
                    }
                ?>

                <?php if($price > 0): ?>
                    <p class="quantity-number" )> <?php echo e(amount_with_currency_symbol($price)); ?></p>

                    <?php if(!empty($regular_price)): ?>
                        <p class="text-small"><del><?php echo e(amount_with_currency_symbol($regular_price)); ?></del></p>
                    <?php endif; ?>

                <?php else: ?>
                    <p class="quantity-number text-success" )> <?php echo e(__('Free')); ?></p>
                <?php endif; ?>
            </td>

            <td data-label="Status">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'product::components.table.status','data' => ['statuses' => $statuses,'statusId' => $product?->status_id,'id' => $product->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product::table.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['statuses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statuses),'statusId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product?->status_id),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </td>

            <td data-label="Actions">
                <div class="action-icon">
                    <a href="<?php echo e(route('tenant.shop.product.details', $product->slug)); ?>" class="icon eye" target="_blank"
                       title="View the product" data-bs-toggle="tooltip" data-bs-placement="top">
                        <i class="las la-eye"></i>
                    </a>
                    <a href="<?php echo e(route("tenant.admin.digital.product.edit", $product->id)); ?>"
                       class="icon edit" title="Edit the product" data-bs-toggle="tooltip" data-bs-placement="top"> <i
                            class="las la-pen-alt"></i> </a>
                    <a href="<?php echo e(route("tenant.admin.digital.product.clone", $product->id)); ?>"
                       class="icon clone" title="Make duplicate" data-bs-toggle="tooltip" data-bs-placement="top"> <i
                            class="las la-copy"></i> </a>
                    <a data-product-url="<?php echo e(route("tenant.admin.digital.product.destroy", $product->id)); ?>"
                       href="javascript:void(0)" class="delete-row icon deleted" title="Delete the product"
                       data-bs-toggle="tooltip" data-bs-placement="top">
                        <i class="las la-trash-alt"></i>
                    </a>
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="7" class="text-warning text-center"><?php echo e(__('No Product Available')); ?></td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<div class="custom-pagination-wrapper">
    <div class="pagination-info">
        <p>
            <strong><?php echo e(__('Per Page:')); ?></strong>
            <span><?php echo e($products["per_page"]); ?></span>
        </p>
        <p>
            <strong><?php echo e(__('From:')); ?></strong>
            <span><?php echo e($products["from"]); ?></span>
            <strong> <?php echo e(__('To:')); ?></strong>
            <span><?php echo e($products["to"]); ?></span>
        </p>
        <p>
            <strong><?php echo e(__('Total Page:')); ?></strong>
            <span><?php echo e($products["total_page"]); ?></span>
        </p>
        <p>
            <strong><?php echo e(__('Total Products:')); ?></strong>
            <span><?php echo e($products["total_items"]); ?></span>
        </p>
    </div>

    <div class="pagination">
        <ul class="pagination-list">
            <?php $__currentLoopData = $products["links"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->iteration == 1):  continue; endif ?>
                <li><a href="<?php echo e($link); ?>"
                       class="page-number <?php echo e(($loop->iteration - 1) == $products["current_page"] ? "current" : ""); ?>"><?php echo e($loop->iteration - 1); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<?php /**PATH /home/exchangemails/amstechs.com/core/Modules/DigitalProduct/Resources/views/admin/product/search.blade.php ENDPATH**/ ?>