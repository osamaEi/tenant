<?php
    $location = $location ?? \Illuminate\Support\Str::random(16);
?>
<div class="page-builder-area-wrapper extra-title">
    <h4 class="main-title"><?php echo e(__(ucfirst(str_replace('_',' ',$title ?? 'Drag Widgets Into Draggable Area')))); ?></h4>
    <ul id="<?php echo e($location); ?>"
        class="sortable available-form-field main-fields sortable_widget_location">
        <?php echo \Plugins\PageBuilder\PageBuilderSetup::get_saved_addons_for_dynamic_page($location,$page->id); ?>

    </ul>
</div>
<?php /**PATH /home/exchangemails/amstechs.com/core/plugins/PageBuilder/views/components/draggable.blade.php ENDPATH**/ ?>