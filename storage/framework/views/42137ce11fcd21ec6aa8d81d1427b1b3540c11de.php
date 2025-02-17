<?php $__env->startSection('title'); ?>
    <?php echo e(__('Custom Domain Request')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.css'); ?>
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

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Custom Domain Request')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $central_domain = env('CENTRAL_DOMAIN');
    ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="custom_domain_title"><?php echo e(get_static_option_central('custom_domain_settings_title')); ?></h3>
                        <p class="custom_domain_para"><?php echo e(get_static_option_central('custom_domain_settings_description')); ?></p>
                        <h5 class="custom_domain_title"><?php echo e(get_static_option_central('custom_domain_table_title')); ?></h5>
                        <div class="recent_order_logs mt-4">
                            <table class="table table-default table-striped table-bordered">
                                <thead class="text-white bg-dark">
                                <tr>
                                    <th><?php echo e(__('Type')); ?></th>
                                    <th><?php echo e(__('Host')); ?></th>
                                    <th><?php echo e(__('Value')); ?></th>
                                    <th><?php echo e(__('TTL')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>CNAME Record</td>
                                    <td>www</td>
                                    <td><?php echo e(env('CENTRAL_DOMAIN')); ?></td>
                                    <td>Automatic</td>
                                </tr>

                                <tr>
                                    <td>CNAME Record</td>
                                    <td>@</td>
                                    <td><?php echo e(env('CENTRAL_DOMAIN')); ?></td>
                                    <td>Automatic</td>
                                </tr>

                                <tr>
                                    <td colspan="4"><?php echo e(__('Use this if you are using cloulflare')); ?></td>
                                </tr>
                                <tr>
                                    <td>A Record</td>
                                    <td>@</td>
                                    <td><?php echo e(get_static_option_central('server_ip') ?? $_SERVER['SERVER_ADDR']); ?></td>
                                    <td>Automatic</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
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
                                <h4 class="card-title mb-4"><?php echo e(__('Custom Domain Request')); ?></h4>
                             <?php $__env->endSlot(); ?>
                             <?php $__env->slot('right', null, ['class' => 'd-flex']); ?> 
                                <button class="btn btn-info btn-sm mb-3" data-bs-toggle="modal"
                                        data-bs-target="#new_custom_domain"><?php echo e(__('Request Custom Domain')); ?></button>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
                        <div class="table-wrap table-responsive">
                            <table class="table table-default table-striped table-bordered">
                                <thead class="text-white" style="background-color: #b66dff">
                                <tr>
                                    <th><?php echo e(__('Current Domain')); ?></th>
                                    <th><?php echo e(__('Requested Domain')); ?></th>
                                    <th><?php echo e(__('Requested Domain Status')); ?></th>
                                    <th><?php echo e(__('Date')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(optional(optional(tenant()->domains)->first())->domain); ?></td>
                                    <td><?php echo e(optional($custom_domain_info)->custom_domain); ?></td>
                                    <td class="py-4">
                                        <?php if(optional($custom_domain_info)->custom_domain_status == 'pending'): ?>
                                            <span
                                                class="alert alert-warning text-capitalize"><?php echo e(optional($custom_domain_info)->custom_domain_status); ?></span>
                                        <?php elseif(optional($custom_domain_info)->custom_domain_status == 'in_progress'): ?>
                                            <span
                                                class="alert alert-info text-capitalize"><?php echo e(str_replace('_',' ',optional($custom_domain_info)->custom_domain_status)); ?></span>
                                        <?php elseif(optional($custom_domain_info)->custom_domain_status == 'connected'): ?>
                                            <span
                                                class="alert alert-success text-capitalize"><?php echo e(optional($custom_domain_info)->custom_domain_status); ?></span>
                                        <?php elseif(optional($custom_domain_info)->custom_domain_status == 'rejected'): ?>
                                            <span
                                                class="alert alert-info text-capitalize"><?php echo e(str_replace('_', ' ',ucwords(optional($custom_domain_info)->custom_domain_status))); ?></span>
                                        <?php elseif(optional($custom_domain_info)->custom_domain_status == null): ?>

                                        <?php else: ?>
                                            <span
                                                class="alert alert-danger text-capitalize"><?php echo e(optional($custom_domain_info)->custom_domain_status ?? __('Removed')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(date('d-m-Y',strtotime($user_domain_infos->created_at))); ?></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="new_custom_domain" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Request Custom Domain')); ?></h5>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <form action="<?php echo e(route('tenant.admin.custom.domain.requests')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">

                        <div class="alert-alert-warning">
                            <p>
                                <?php echo e(__('You already have a custom domain ('.$central_domain.') connected with your portfolio website.
                                    if you request another domain now & if it gets connected with our server, then your current domain ('.$central_domain.') will be removed')); ?>

                            </p>
                        </div>

                        <div class="form-group my-3">
                            <label for="name"><?php echo e(__('Enter your custom domain')); ?></label>
                            <input type="hidden" name="user_id" value="<?php echo e($user_domain_infos->id); ?>">
                            <input type="text" class="form-control" name="custom_domain"
                                   value="<?php echo e($custom_domain_info->custom_domain ?? ''); ?>">
                            <p id="subdomain-wrap"></p>
                        </div>

                        <div class="form-group">
                            <p class="font-weight-bold">
                                <?php echo e(sprintf(__('Do not use http:// or https://
                                  The valid format will be exactly like this one - domain.tld, www.domain.tld or subdomain.domain.tld, www.subdomain.domain.tld'))); ?>


                            </p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary" id="login_button"><?php echo e(__('Send Request')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.js'); ?>
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

    <script>
        $(function () {
            $(document).ready(function ($) {
                "use strict";

                function removeTags(str) {
                    if ((str === null) || (str === '')) {
                        return false;
                    }
                    str = str.toString();
                    return str.replace(/(<([^>]+)>)/ig, '');
                }

                $(document).on('keyup paste change', 'input[name="custom_domain"]', function (e) {
                    var value = '';
                    if ($(this).val() != '') {
                        value = removeTags($(this).val()).toLowerCase().replace(/\s/g, "-");
                        $(this).val(value)
                    }

                    if (value.length < 1) {
                        $('#subdomain-wrap').html('');
                        return;
                    }

                    let msgWrap = $('#subdomain-wrap');
                    msgWrap.html('');
                    msgWrap.append('<span class="text-warning"><?php echo e(__('availability checking..')); ?></span>');

                    axios({
                        url: "<?php echo e(route('tenant.admin.custom.domain.check')); ?>",
                        method: 'post',
                        responseType: 'json',
                        data: {
                            subdomain: value
                        }
                    }).then(function (res) {
                        res = res.data;
                        msgWrap.html('');
                        if (res.type == 'success')
                        {
                            msgWrap.append('<span class="text-success"> ' + res.msg + ' </span>');
                            $('#login_button').attr('disabled', false)
                        } else {
                            msgWrap.append('<span class="text-danger"> ' + res.msg + ' </span>');
                            $('#login_button').attr('disabled', true)
                        }
                    }).catch(function (error) {
                        var responseData = error.response.data.errors;
                        msgWrap.html('');
                        msgWrap.append('<span class="text-danger"> ' + responseData.subdomain + '</span>');
                        $('#login_button').attr('disabled', true)
                    });
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('tenant.admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/admin/custom-domain/custom-domain.blade.php ENDPATH**/ ?>