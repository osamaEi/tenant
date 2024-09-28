<?php $__env->startSection('title'); ?>
    <?php echo e(__('Update Campaign')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.css'); ?>
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
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/common/css/flatpickr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(global_asset('assets/landlord/admin/css/nice-select.css')); ?>">
    <style>
        .fixed_date_container label{
            font-weight: bold;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="margin-top-20">
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
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex flex-wrap justify-content-between">
                            <h4 class="header-title mb-4"><?php echo e(__('Update Campaign')); ?></h4>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign-list')): ?>
                                <div class="text-right">
                                    <a href="<?php echo e(route('tenant.admin.campaign.all')); ?>" class="btn btn-primary"><?php echo e(__('All Campaigns')); ?></a>
    
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('campaign-edit')): ?>
                            <form action="<?php echo e(route('tenant.admin.campaign.update')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row new_campaign mt-3">
                                    <div class="col-xl-4 col-md-5">
                                        <div class="card mb-3" style="border: 1px solid #ddd">
                                            <div class="card-header bg-transparent font-weight-bold" style="border: 1px solid #ddd"><?php echo e(__('Update Info')); ?></div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?php echo e($campaign->id); ?>">
                                                    <label for="campaign_name"><?php echo e(__('Campaign Name')); ?></label>
                                                    <input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="Campaign Name" value="<?php echo e($campaign->title); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="campaign_subtitle"><?php echo e(__('Campaign Subtitle')); ?></label>
                                                    <input type="text" class="form-control" id="campaign_subtitle" name="campaign_subtitle" placeholder="Campaign Subtitle" value="<?php echo e(html_entity_decode($campaign->subtitle)); ?>">
                                                </div>

                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.media-upload','data' => ['title' => __('Campaign Image'),'id' => $campaign?->campaignImage?->id,'name' => 'image','dimentions' => '1920x1080']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fields.media-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Campaign Image')),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($campaign?->campaignImage?->id),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('image'),'dimentions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('1920x1080')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                                <div class="form-group">
                                                    <label for="campaign_status"><?php echo e(__('Campaign Status')); ?></label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="draft" <?php if($campaign->status == 'draft'): ?> selected <?php endif; ?>><?php echo e(__('Draft')); ?></option>
                                                        <option value="publish" <?php if($campaign->status == 'publish'): ?> selected <?php endif; ?>><?php echo e(__('Publish')); ?></option>
                                                    </select>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <input type="checkbox" id="set_fixed_percentage">
                                                    <label for="set_fixed_percentage"><?php echo e(__('Set Fixed Percentage')); ?></label>
                                                    <p class="text-small"><?php echo e(__('when you set fixed percentage, you have to click on sync price button, to sync price selection with all prodcuts')); ?></p>
                                                    <div id="fixe_price_cut_container" style="display: none">
                                                        <input type="number" id="fixed_percentage_amount" class="form-control mb-2" placeholder="<?php echo e(__('Price Cut Percentage')); ?>">
                                                        <button type="button" class="btn btn-sm btn-primary mb-2" id="fixed_price_sync_all"><?php echo e(__('Sync Price')); ?></button>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <input type="checkbox" id="set_fixed_date" <?php if($campaign->start_date || $campaign->end_date): ?> checked <?php endif; ?>>
                                                    <label for="set_fixed_date"><?php echo e(__('Set Fixed Date')); ?></label>
                                                    <p class="text-small mb-2"><?php echo e(__('when you set fixed date, you have to click on sync date button, to sync date selection with all prodcuts')); ?></p>

                                                    <div id="fixed_date_container" <?php if(!$campaign->start_date && !$campaign->end_date): ?> style="display: none" <?php endif; ?>>
                                                        <label><?php echo e(__('Campaign Starting date')); ?></label>
                                                        <input type="text" name="campaign_start_date" id="fixed_from_date" class="form-control mb-2 flatpickr" placeholder="<?php echo e(__('From Date')); ?>" value="<?php echo e($campaign->start_date); ?>">
                                                        <br>
                                                        <label><?php echo e(__('Campaign Ending date')); ?></label>
                                                        <input type="text" name="campaign_end_date" id="fixed_to_date" class="form-control mb-2 flatpickr" placeholder="<?php echo e(__('To Date')); ?>" value="<?php echo e($campaign->end_date); ?>">
                                                        <button type="button" class="btn btn-sm btn-primary" id="fixed_date_sync_all"><?php echo e(__('Sync Date')); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="product_repeater_container">
                                                    <?php if($campaign->products->count() == 0): ?>
                                                        <?php
                                                            $remove_btn = true;
                                                        ?>
                                                        <?php echo $__env->make("campaign::backend.add_new_campaign_product", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?>

                                                    <?php if($campaign->products): ?>
                                                        <?php $__currentLoopData = $campaign->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="card mb-3" style="border: 1px solid #ddd">
                                                                <div class="card-header bg-transparent campaign-card-header" style="border: 1px solid #ddd">
                                                                    <span><?php echo e(__('Campaign Product')); ?></span>
                                                                    <span class="delete-campaign"><i class="las la-times-circle"></i></span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <?php
                                                                        $sale_price = optional($campaign_product->product)->sale_price;
                                                                        $sale_price = $sale_price != null ? $sale_price : 1;
                                                                        $new_price = $campaign_product->campaign_price;

                                                                        $percentage= 100-(($new_price/$sale_price)*100);
                                                                    ?>
                                                                    <h3 class="product_percentage text-end"><?php echo e(round($percentage, 2)); ?>%</h3>

                                                                    <div class="form-group select_product">
                                                                        <label for="product_id"><?php echo e(__('Select Product')); ?></label>
                                                                        <input type="hidden" name="campaign_product_id[]" class="campaign_product_id" value="<?php echo e($campaign_product->id); ?>">
                                                                        <input type="hidden" name="product_id[]" class="product_id" value="<?php echo e($campaign_product->product_id); ?>">
                                                                        <select id="product_id" class="form-control nice-select wide">
                                                                            <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($product->id); ?>"
                                                                                        data-price="<?php echo e($product->price); ?>"
                                                                                        data-sale_price="<?php echo e($product->sale_price); ?>"
                                                                                        data-stock="<?php echo e(optional($product->inventory)->stock_count ?? 0); ?>"
                                                                                        <?php if($campaign_product->product_id == $product->id): ?> selected <?php endif; ?>
                                                                                >
                                                                                    <?php echo e($product->name); ?>

                                                                                </option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="product_original_price"><?php echo e(__('Product Original Price')); ?></label>
                                                                                <input type="number" class="form-control product_original_price" disabled value="<?php echo e(optional($campaign_product->product)->sale_price); ?>" step="0.01">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="campaign_price"><?php echo e(__('Price for Campaign')); ?></label>
                                                                                <input type="number" name="campaign_price[]" class="form-control campaign_price" value="<?php echo e($campaign_product->campaign_price); ?>" step="0.01">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="available_num_of_units"><?php echo e(__('No. of Units Available')); ?></label>
                                                                                <input type="number" class="form-control available_num_of_units" disabled value="<?php echo e(optional(optional($campaign_product->product)->inventory)->stock_count ?? 0); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="units_for_sale"><?php echo e(__('No. of Units for Sale')); ?></label>
                                                                                <input type="number" name="units_for_sale[]" class="form-control units_for_sale" value="<?php echo e($campaign_product->units_for_sale); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row" <?php if(!$campaign->start_date || !$campaign->end_date): ?> style="display: none" <?php endif; ?>>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="start_date"><?php echo e(__('Start Date')); ?></label>
                                                                                <input type="text" name="start_date[]" class="form-control start_date flatpickr" value="<?php echo e($campaign_product->start_date ?? $campaign->start_date); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="end_date"><?php echo e(__('End Date')); ?></label>
                                                                                <input type="text" name="end_date[]" class="form-control end_date flatpickr" value="<?php echo e($campaign_product->end_date ?? $campaign->end_date); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-outline-primary" id="add_product_btn"><?php echo e(__('Add Product')); ?></button>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update Campaign')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.markup'); ?>
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

    <div class="d-none">
        <input type="hidden" id="fixed_percentage">
        <input type="hidden" id="fixed_campaign_start_date">
        <input type="hidden" id="fixed_campaign_end_date">
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media-upload.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media-upload.js'); ?>
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
    <script src="<?php echo e(global_asset('assets/common/js/flatpickr.js')); ?>"></script>
    <script src="<?php echo e(global_asset('assets/landlord/admin/js/jquery.nice-select.min.js')); ?>"></script>
    <script>
        (function ($) {
            $(document).ready(function () {
                flatpickr(".flatpickr", {
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });

                if ($('.nice-select').length > 0) {
                    $('.nice-select').niceSelect();
                }

                $(document).on('click', '.cross-btn', function () {
                    let container = $(this).closest('.card');
                    container.slideUp('slow');
                    setTimeout(() => container.remove(), 1000);
                });

                $('#set_fixed_percentage').on('change', function () {
                    if ($(this).is(':checked')) {
                        $('#fixe_price_cut_container').slideDown('500')
                    } else {
                        $('#fixe_price_cut_container').slideUp('500');
                        setTimeout(function () {
                            $('#fixed_percentage_amount').val('');
                        }, 500);
                    }
                });

                $('#set_fixed_date').on('change', function () {
                    if ($(this).is(':checked')) {
                        $('#fixed_date_container').slideDown(500);
                    } else {
                        $('#fixed_date_container').slideUp(500);
                        setTimeout(function () {
                            $('#fixed_date_container input').val('');
                        }, 500);
                    }
                });

                $('#fixed_price_sync_all').on('click', function () {
                    let fixed_percentage = $('#fixed_percentage_amount').val().trim();

                    if (!fixed_percentage.length) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: '<?php echo e(__("Set percentage first")); ?>',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    let all_prices = $('.product_original_price');
                    for (let i = 0; i < all_prices.length; i++) {
                        let price_container = $(all_prices[i]).closest('.col');
                        let final_price_container = price_container.next();
                        let product_price = $(all_prices[i]).val().trim();
                        let price_after_percentage = product_price - (product_price / 100 * fixed_percentage);
                        price_after_percentage = price_after_percentage.toFixed(2);
                        final_price_container.find('.campaign_price').val(price_after_percentage);
                    }
                });

                $(document).on('keyup', '.campaign_price', function (x){
                    let products = $('#product_repeater_container .card');
                    products.each(function (key ,value){
                        let main_price = $(value).find('.product_original_price').val();
                        let new_price = $(value).find('.campaign_price').val();
                        let new_percentage = $(value).find('.product_percentage');

                        let percentage = 0;
                        percentage = 100-((new_price/main_price)*100);
                        new_percentage.html((percentage).toFixed(2) +'%');
                    })
                });

                $('#fixed_date_sync_all').on('click', function () {
                    if ($('#set_fixed_date').is(':checked')) {
                        let from_date = $('#fixed_from_date').val();
                        let to_date = $('#fixed_to_date').val();

                        $('.start_date.flatpickr-input').val(from_date);
                        $('.end_date.flatpickr-input').val(to_date);

                        flatpickr(".flatpickr", {
                            altInput: true,
                            altFormat: "F j, Y",
                            dateFormat: "Y-m-d",
                        });
                    } else {
                        Swal.fire({
                            position: 'top-start',
                            icon: 'warning',
                            title: '<?php echo e(__("Set fixed date first")); ?>',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });

                $('.delete-campaign').on('click', function () {
                    let container = $(this).closest('.card');
                    let campaign_id = container.find('input.campaign_product_id').val();

                    Swal.fire({
                        title: "<?php echo e(__('Do you want to delete this campaign?')); ?>",
                        showCancelButton: true,
                        confirmButtonText: 'Delete',
                        confirmButtonColor: '#dd3333',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().parent().remove();
                        }
                    });
                });

                $('#add_product_btn').on('click', function () {
                    let product_repeater_container = $('#product_repeater_container');
                    let newCampaignProduct = `<?php echo $__env->make("campaign::backend.add_new_campaign_product", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>`;
                    let remove_button_selector = '.delete-campaign';
                    let from_date = undefined;
                    let to_date = undefined;
                    product_repeater_container.append(newCampaignProduct);
                    let new_element = product_repeater_container.last();
                    if ($('#set_fixed_date').is(':checked')) {
                        from_date = $('#fixed_from_date').val();
                        to_date = $('#fixed_to_date').val();
                    }

                    if (from_date) {
                        new_element.find('.start_date.input').val(from_date);
                    }

                    if (to_date) {
                        new_element.find('.end_date.input').val(to_date);
                    }

                    let remove_btn = new_element.find(remove_button_selector);

                    remove_btn.removeClass(remove_button_selector);
                    remove_btn.addClass('cross-btn');

                    new_element.find('.start_date.input').remove();
                    new_element.find('.end_date.input').remove();

                    new_element.find('.campaign_price').val('');
                    new_element.find('.units_for_sale').val('');

                    product_repeater_container.append(new_element.hide());
                    new_element.slideDown('slow');

                    flatpickr(".flatpickr", {
                        altInput: true,
                        altFormat: "F j, Y",
                        dateFormat: "Y-m-d",
                    });

                    product_repeater_container.find('.nice-select').niceSelect('destroy');
                    product_repeater_container.find('.nice-select').niceSelect();
                });
            });



            $(document).on('change', '.select_product select', function () {
                let selected_product_id = $(this).val();
                let container = $(this).closest('.card');
                let original_price_field = container.find('.original_price');
                $(this).prev().val(selected_product_id);
                let data = $(this).find('option:checked').data();
                let product_price = data['sale_price'];
                let regular_price = data["price"];

                $(this).closest('.card-body').find('.original_price').val(product_price);
                $(this).closest('.card-body').find('.available_num_of_units').val(data['stock']);
                $(this).closest('.card-body').find('.product_original_price').val(product_price);

                if ($('#set_fixed_percentage').is(':checked')) {
                    let percentage = $('#fixed_percentage_amount').val().trim();
                    let price_after_percentage = product_price - (product_price / 100 * percentage);

                    campaign_price_field.val(price_after_percentage);
                }
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Campaign/Resources/views/backend/edit.blade.php ENDPATH**/ ?>