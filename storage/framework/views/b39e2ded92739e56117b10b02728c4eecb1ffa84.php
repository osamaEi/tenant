<!-- Start datatable js -->
<script src="<?php echo e(global_asset('assets/common/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(global_asset('assets/common/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(global_asset('assets/common/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(global_asset('assets/common/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(global_asset('assets/common/js/responsive.bootstrap.min.js')); ?>"></script>
<?php if(!isset($only_js)): ?>
    <script>
        (function($){
            "use strict";
            $('.table-wrap > table').DataTable( {
                "order": [[ 1, "desc" ]],
                'columnDefs' : [{
                    'targets' : 'no-sort',
                    'orderable' : false
                }]
            } );

        })(jQuery);
    </script>
<?php endif; ?>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/datatable/yajra-scripts.blade.php ENDPATH**/ ?>