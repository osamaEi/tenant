<?php $__env->startSection('title'); ?>
    <?php echo e(__('Manage My Account')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <style>
        .media-upload-btn-wrapper .btn-info{
            color: #fff;
            width: 50%;
            border-radius: 0;
            background-color: var(--main-color-one);
            border-color: var(--main-color-one);
        }
        .media-upload-btn-wrapper .img-wrap{
            margin: 0;
        }

        .dashboard-profile-flex label[for=image]{
            font-weight: bold;
            color: #0b0b0b;
        }

        .nav-link{
            color: #0b0b0b;
        }
        .nav-link:hover {
            color: var(--main-color-one);
        }
    </style>

    <ul class="nav nav-pills mb-3" id="v-pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="v-pills-manage-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-manage" type="button" role="tab" aria-controls="v-pills-manage"
                    aria-selected="true"><?php echo e(__('Manage My Account')); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                    type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false"><?php echo e(__('My Profile')); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-address"
                    type="button" role="tab" aria-controls="v-pills-address"
                    aria-selected="false"><?php echo e(__('Address Book')); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password"
                    type="button" role="tab" aria-controls="v-pills-password" aria-selected="false"><?php echo e(__('Change Password')); ?>

            </button>
        </li>
    </ul>
    <div class="tab-content mt-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-manage" role="tabpanel" aria-labelledby="v-pills-manage-tab">
            <?php echo $__env->make('tenant.frontend.user.dashboard.manage-account-partials.manage-my-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <?php echo $__env->make('tenant.frontend.user.dashboard.manage-account-partials.my-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
            <?php echo $__env->make('tenant.frontend.user.dashboard.manage-account-partials.address-book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
            <?php echo $__env->make('tenant.frontend.user.dashboard.manage-account-partials.change-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom-js.phone-number-config','data' => ['selector' => '#phone','key' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom-js.phone-number-config'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['selector' => '#phone','key' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom-js.phone-number-config','data' => ['selector' => '#address_phone','key' => '2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom-js.phone-number-config'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['selector' => '#address_phone','key' => '2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <script>
        $(document).ready(() => {
            setTimeout(() => {
                $("#phone").val(`<?php echo e($user_details->mobile); ?>`);
                $("#address_phone").val(`<?php echo e($user_details?->user_delivery_address?->phone); ?>`);
            }, 1000);
        });
    </script>

    <script>
        $(function () {
            $(document).on('click', '.attachment-preview .user-thumb', function () {
                $('.media_upload_form_btn').trigger('click');
            });

            $(document).on('click', '.address-submit-btn', function (e) {
                e.preventDefault();
                let name = $('.address_form input[name=full_name]').val();
                let email = $('.address_form input[name=email]').val();
                let phone = $('.address_form input[name=phone]').val();
                let country = $('.address_form select[name=country]').val();
                let state = $('.address_form select[name=state]').val();
                let city = $('.address_form select[name=city]').val();
                let postal_code = $('.address_form input[name=postal_code]').val();
                let address = $('.address_form textarea[name=address]').val();

                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('tenant.user.home.address.update')); ?>',
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        name: name,
                        email: email,
                        phone: phone,
                        country: country,
                        state: state,
                        city: city,
                        postal_code: postal_code,
                        address: address
                    },
                    beforeSend: function () {
                        $('.loader').show();
                    },
                    success: function (data) {
                        if (data.msg) {
                            toastr.success(data.msg)
                            $('.loader').hide();
                        }
                    },
                    error: function (data) {
                        var response = JSON.parse(data.responseText);
                        $.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });

                        $('.loader').hide();
                    }
                })
            });

            $(document).on('submit', 'form.profile-edit-form', function (e) {
                e.preventDefault();

                let form = new FormData(e.target);

                $.ajax({
                    url: '<?php echo e(route('tenant.user.profile.update')); ?>',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: form,
                    beforeSend: function () {
                        $('.loader').show();
                    },
                    success: function (data) {
                        if (data.msg) {
                            toastr.success(data.msg);
                        }
                        $('.loader').hide();
                    },
                    error: function (data) {
                        var response = JSON.parse(data.responseText);
                        $.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });

                        $('.loader').hide();
                    }
                })
            });

            $(document).on('submit', '.change_password_form', function (e){
                e.preventDefault();

                let formData = new FormData(e.target);

                $.ajax({
                    url: '<?php echo e(route('tenant.user.password.change')); ?>',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: formData,
                    beforeSend: function (){
                        $('.loader').show();
                    },
                    success: function (data){
                        $('.loader').hide();

                        if (data.type === 'success')
                        {
                            toastr.success(data.msg)
                            toastr.warning('<?php echo e(__('We\'re logging you out for the security reason and redirecting to login page')); ?>');

                            setTimeout(()=>{
                                location.href = data.url;
                            }, 3000)
                        } else {
                            toastr.error(data.msg);
                        }
                    },
                    error: function (data){
                        $('.loader').hide();

                        var response = JSON.parse(data.responseText);
                        $.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });
                    }
                });
            });

            $(document).on('change', 'select[name=country]', function (e) {
                e.preventDefault();

                let country_id = $(this).val();

                $.post(`<?php echo e(route('tenant.admin.au.state.all')); ?>`,
                    {
                        _token: `<?php echo e(csrf_token()); ?>`,
                        country: country_id
                    },
                    function (data) {
                        let stateField = $('.stateField');
                        stateField.empty();
                        stateField.append(`<option value=""><?php echo e(__('Select a state')); ?></option>`);

                        let cityField = $('.cityField');
                        cityField.empty();
                        cityField.append(`<option value=""><?php echo e(__('Select a city')); ?></option>`);

                        $.each(data.states , function (index, value) {
                            stateField.append(
                                `<option value="${value.id}">${value.name}</option>`
                            );
                        });
                    }
                )
            });

            $(document).on('change', 'select[name=state]', function (e) {
                e.preventDefault();

                let state_id = $(this).val();

                $.post(`<?php echo e(route('tenant.admin.au.city.all')); ?>`,
                    {
                        _token: `<?php echo e(csrf_token()); ?>`,
                        state: state_id
                    },
                    function (data) {
                        let cityField = $('.cityField');
                        cityField.empty();

                        $.each(data.cities , function (index, value) {
                            cityField.append(
                                `<option value="${value.id}">${value.name}</option>`
                            );
                        });
                    }
                )
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/frontend/user/dashboard/manage-account.blade.php ENDPATH**/ ?>