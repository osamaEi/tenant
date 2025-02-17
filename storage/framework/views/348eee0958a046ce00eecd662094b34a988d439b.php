<script>
    $(document).on('click', '.newsletter-submit-btn', function (e) {
        e.preventDefault();

        var email = $('.footer-widget input.email').val();

        var errrContaner = $(this).parent().parent().find('.form-message-show');
        errrContaner.html('');
        var el = $(this);

        $.ajax({
            url: "<?php echo e(route('tenant.frontend.subscribe.newsletter')); ?>",
            type: "POST",
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                email: email
            },

            beforeSend: function() {
                $('.loader').show();
                el.text('Submiting..');
                el.attr('disabled', true);
            },

            success: function (data) {
                $('.loader').hide();
                $('.email').val('');
                el.text('Subscribe');
                el.attr('disabled', false);
                errrContaner.html('<div class="alert alert-'+data.type+'">' + data.msg + '</div>');
            },
            error: function (data) {
                $('.loader').hide();
                el.text('Subscribe');
                el.attr('disabled', false);
                var errors = data.responseJSON.errors;
                errrContaner.html('<div class="alert alert-danger">' + errors.email[0] + '</div>');
            }
        });
    });
</script>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/custom-js/newsletter-store.blade.php ENDPATH**/ ?>