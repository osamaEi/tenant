<a tabindex="0" class="btn btn-success btn-xs btn-sm mr-1 swal_status_change">
    <i class="mdi mdi-swap-horizontal"></i>
</a>
<form method='post' action='<?php echo e($url); ?>' class="d-none">
    <input type='hidden' name='_token' value='<?php echo e(csrf_token()); ?>'>
    <br>
    <button type="submit" class="swal_form_submit_btn d-none"></button>
</form>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/status-change.blade.php ENDPATH**/ ?>