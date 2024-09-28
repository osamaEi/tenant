<?php $__env->startSection("title", __("Tax Class")); ?>

<?php $__env->startSection("style"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div>
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
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="title"><?php echo e(__("Manage Tax Class")); ?></h3>
            <div class="mt-2">
                <small class="text-secondary"><?php echo e(__("If a class has any associated options, you can't delete the class from here. You need to delete all options first, or you can use a force delete option.")); ?></small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="card-body">
                    <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th><?php echo e(__("SL NO")); ?></th>
                        <th><?php echo e(__("Name")); ?></th>
                        <th><?php echo e(__("Action")); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($class->name); ?></td>
                                <td>
                                    <a class="btn btn-info" href="<?php echo e(route('tenant.admin.tax-module.tax-class-option', $class->id)); ?>"><?php echo e(__("View")); ?></a>
                                    <button data-id="<?php echo e($class->id); ?>" data-name="<?php echo e($class->name); ?>" id="updateTaxClassButton" class="btn btn-primary" data-bs-target="#updateTaxClass" data-bs-toggle="modal"><?php echo e(__("Edit")); ?></button>
                                    <button id="deleteTaxClassButton" data-id="<?php echo e($class->id); ?>" data-option-count="<?php echo e($class->class_option_count); ?>" data-href="<?php echo e(route("tenant.admin.tax-module.tax-class-delete", $class->id)); ?>" class="btn btn-danger"><?php echo e(__("Delete")); ?></button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card-body border">
                    <h3 class="title"><?php echo e(__("Create tax class")); ?></h3>
                    <form action="<?php echo e(route('tenant.admin.tax-module.tax-class')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="#tax-class-name" class="form-label"><?php echo e(__("Name")); ?></label>
                            <input name="name" type="text" class="form-control" placeholder="<?php echo e(__("Write tax class name")); ?>"/>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary"><?php echo e(__("Create")); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateTaxClass" tabindex="-1" aria-labelledby="exampleUpdateTaxClass" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo e(route('tenant.admin.tax-module.tax-class')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>
                    <input type="hidden" name="id" value="" id="tax-class-id" class="form-control">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__("Update tax class")); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="#update-tax-class-name" class="form-label"><?php echo e(__("Name")); ?></label>
                            <input id="update-tax-class-name" name="name" type="text" class="form-control" placeholder="<?php echo e(__("Write tax class name")); ?>"/>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__("Close")); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__("Save changes")); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
    <script>
        $(document).on("click", "#updateTaxClassButton", function (){
            $("#updateTaxClass #tax-class-id").val($(this).attr("data-id"));
            $("#updateTaxClass #update-tax-class-name").val($(this).attr("data-name"));

        })

        $(document).on("click","#deleteTaxClassButton", function (){
            let countOption = $(this).attr("data-option-count");
            let formData = new FormData();
            formData.append("_method", "DELETE");
            formData.append("_token", "<?php echo e(csrf_token()); ?>");
            formData.append("id", $(this).attr("data-id"));

            if(countOption > 0){
                Swal.fire({
                    title: `<?php echo e(__('Are you sure?')); ?>`,
                    text: `<?php echo e(__("if delete this tax class then all tax class option will be deleted and You won't be able to revert those!")); ?>`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `<?php echo e(__('Yes, delete it!')); ?>`,
                    cancelButtonText: `<?php echo e(__('Cancel')); ?>`
                }).then((result) => {
                    if (result.isConfirmed) {
                        send_ajax_request("GET", formData,$(this).data("data-href"), () => {
                            // before send request
                            toastr.warning(`<?php echo e(__("Request send please wait while")); ?>`);
                        }, (data) => {
                            Swal.fire(
                                `<?php echo e(__('Deleted!')); ?>`,
                                `<?php echo e(__('Your file has been deleted.')); ?>`,
                                'success'
                            );

                            $(this).parent().parent().remove();
                        }, (data) => {
                            prepare_errors(data);
                        })
                    }
                });
            }

            Swal.fire({
                title: `<?php echo e(__('Are you sure?')); ?>`,
                text: `<?php echo __("You won't be able to revert this!"); ?>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: `<?php echo e(__('Yes, delete it!')); ?>`,
                cancelButtonText: `<?php echo e(__('Cancel')); ?>`
            }).then((result) => {
                if (result.isConfirmed) {
                    send_ajax_request("post",formData,$(this).data("data-href"), () => {
                        // before send request
                        toastr.warning(`<?php echo e(__("Request send please wait while")); ?>`);
                    }, (data) => {
                        Swal.fire(
                            `<?php echo e(__('Deleted!')); ?>`,
                            `<?php echo e(__('Your file has been deleted.')); ?>`,
                            'success'
                        );

                        $(this).parent().parent().remove();
                    }, (data) => {
                        prepare_errors(data);
                    })
                }
            });
        });

        function send_ajax_request(request_type,request_data,url,before_send,success_response,errors){
            $.ajax({
                url: url,
                type: request_type,
                beforeSend: (typeof before_send !== "undefined" && typeof before_send === "function") ? before_send : () => { return ""; } ,
                processData: false,
                contentType: false,
                data: request_data,
                success:  (typeof success_response !== "undefined" && typeof success_response === "function") ? success_response : () => { return ""; },
                error:  (typeof errors !== "undefined" && typeof errors === "function") ? errors : () => { return ""; }
            });
        }

        function prepare_errors(data,form,msgContainer,btn){
            let errors = data.responseJSON;

            if(errors.success !== undefined){
                toastr.error(errors.msg.errorInfo[2]);
                toastr.error(errors.custom_msg);
            }

            $.each(errors.errors,function (index,value){
                toastr.error(value[0]);
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("tenant.admin.admin-master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/TaxModule/Resources/views/backend/class/index.blade.php ENDPATH**/ ?>