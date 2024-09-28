<?php $__env->startSection("title", __("Tax Class")); ?>

<?php $__env->startSection("style"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div class="message-wrapper">
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
        <div class="card-header d-flex justify-content-between">
            <h5 class="title"><?php echo e(__("Tax Class Options")); ?></h5>
            <div class="tax-class-options">
                <button class="btn btn-primary add-tax-option"><?php echo e(__("Add")); ?></button>
                <button class="btn btn-danger remove-tax-option"><?php echo e(__("Delete")); ?></button>
                <button class="btn btn-info store-tax-option"><?php echo e(__("Update")); ?></button>
            </div>
        </div>

        <div class="card-body">
            <ol class="mb-3">
                <li><?php echo e(__("The tax will be applied to all countries if you do not select any")); ?></li>
                <li><?php echo e(__('The "Name" and "Priority" field is a required entry for data storage in the database. If the name is not provided, the corresponding field data will not be stored.')); ?></li>
            </ol>
            <form id="tax-class-option-form" action="<?php echo e(route('tenant.admin.tax-module.tax-class-option', $taxClass->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <table class="table table-responsive" id="tax-option-table">
                    <thead>
                        <tr>
                            <td class="d-flex justify-content-center align-items-center">
                                <input type="checkbox" name="select-all-text-class-option" id="select-all-text-class-option" class="form-check">
                            </td>
                            <td>* <?php echo e(__("Name")); ?></td>
                            <td><?php echo e(__("Country")); ?></td>
                            <td><?php echo e(__("State")); ?></td>
                            <td><?php echo e(__("City")); ?></td>
                            <td><?php echo e(__("Postal Code")); ?></td>
                            <td><?php echo e(__("Rate (%)")); ?></td>
                            <td class="d-none"><?php echo e(__("Compound")); ?></td>
                            <td><?php echo e(__("Shipping")); ?></td>
                            <td>* <?php echo e(__("Priority")); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $taxClass->classOption; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'taxmodule::components.tax-class-option-row','data' => ['countries' => $countries,'classOption' => $classOption]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('taxmodule::tax-class-option-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['countries' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($countries),'classOption' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($classOption)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
    <script>
        // todo:: if user clicked on this button then trigger tax class option form to submit
        $(document).on("click", ".store-tax-option", function (){
            $("#tax-class-option-form").trigger("submit");
        })

        $(document).on("click", "#select-all-text-class-option", function (){
            let isSelected = $(this).is(":checked");

            $(".tax-option-row-check").each(function (){
                if(isSelected){
                    $(this).attr("checked", true);
                }else{
                    $(this).attr("checked", false);
                }
            });
        })

        // todo:: fetch all states according to selected country
        $(document).on("change","#country_id", function (){
            let el = $(this);
            let country_id = el.val();

            // todo:: send request for fetching tax class option data
            send_ajax_request("get", '',"<?php echo e(route('tenant.admin.tax-module.country.state.info.ajax')); ?>?id=" + country_id, () => {}, (data) => {
                el.parent().parent().find("#state_id").html(data);
            }, (errors) => prepare_errors(errors))
        });

        // todo:: fetch all cities according to selected state
        $(document).on("change","#state_id", function (){
            let el = $(this);
            let state_id = el.val();

            // todo:: send request for fetching tax class option data
            send_ajax_request("get", '',"<?php echo e(route('tenant.admin.tax-module.state.city.info.ajax')); ?>?id=" + state_id, () => {}, (data) => {
                el.parent().parent().find("#city_id").html(data);
            }, (errors) => prepare_errors(errors))
        });


        // todo:: this method will add new row on tax class option
        $(document).on("click",".add-tax-option", function (){
            let tr = `<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'taxmodule::components.tax-class-option-row','data' => ['countries' => $countries]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('taxmodule::tax-class-option-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['countries' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($countries)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>`;

            $('#tax-option-table tbody').append(tr);
        });

        // todo:: this method will remove a row from table tbody
        $(document).on("click",".remove-tax-option", function (){
            // todo:: first need to get all selected tax option first
            $("#tax-option-row-check:checked").each(function (){
                $(this).parent().parent().remove();
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

<?php echo $__env->make("tenant.admin.admin-master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/TaxModule/Resources/views/backend/class-option/index.blade.php ENDPATH**/ ?>