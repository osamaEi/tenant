<script src="<?php echo e(global_asset('assets/landlord/common/js/spectrum.min.js')); ?>"></script>
<script>
    (function(){
       "use strict";

   var spectrum_color_picker =  $('.spectrum_color_picker');
    $.each(spectrum_color_picker,function(){
        var el = $(this);
        el.spectrum({
            preferredFormat: "hex",
            showAlpha: true,
            showPalette: true,
            cancelText : '',
            showInput: true,
            allowEmpty:true,
            chooseText : '',
            maxSelectionSize: 2,
            color: el.next('input').val(),
            change: function(color) {
                el.next('input').val( color ? color.toRgbString() : '');
                el.css({
                    'background-color' : color ? color.toRgbString() : ''
                });
            },
            move: function(color) {
                el.next('input').val( color ? color.toRgbString() : '');
                el.css({
                    'background-color' : color ? color.toRgbString() : ''
                });
            },
            palette: [
                [
                    "<?php echo e(get_static_option('site_color')); ?>",
                    "<?php echo e(get_static_option('site_main_color_two')); ?>",
                    "<?php echo e(get_static_option('site_secondary_color')); ?>",
                    "<?php echo e(get_static_option('site_heading_color')); ?>",
                    "<?php echo e(get_static_option('site_paragraph_color')); ?>",
                ]
            ]
        });

        el.on("dragstop.spectrum", function(e, color) {
            el.next('input').val( color.toRgbString());
            el.css({
                'background-color' : color.toHexString()
            });
        });
    });


    })(jQuery);
</script>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/colorpicker/js.blade.php ENDPATH**/ ?>