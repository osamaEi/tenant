<script>
    function removeTags(str) {
        if ((str === null) || (str === '')) {
            return false;
        }
        str = str.toString();
        return str.replace(/(<([^>]+)>)/ig, '').replace('http','');
    }

    let register_payment_form = $('.register_page_payment_hidden_form');
    $(document).on('keyup paste change', 'input[name="<?php echo e($name); ?>"]', function (e) {

        var value = '';
        if ($(this).val() != '') {
            value = removeTags($(this).val()).toLowerCase().replace(/\s/g, "-");
            let newText = value.replace(/([@#%&"';><,`~.*+?^=!:${}()|\[\]\/\\])/g, "-");
            $(this).val(newText)
        }

        if (value.length < 1) {
            $('#subdomain-wrap').html('');
            return;
        }
        let msgWrap = $('#subdomain-wrap');
        msgWrap.html('');
        msgWrap.append('<span class="text-warning"><?php echo e(__('availability checking..')); ?></span>');
        let trial_button = $('#create-trial-account-button');
        trial_button.attr('disabled', true);

        axios({
            url: "<?php echo e(route('landlord.subdomain.check')); ?>",
            method: 'post',
            responseType: 'json',
            data: {
                subdomain: value
            }
        }).then(function (res) {
            let site_name = '<?php echo e(env('APP_NAME')); ?>';
            let primary_domain = '<?php echo e(url('/')); ?>';
            primary_domain = primary_domain.replace('http://','').replace('https://','').split('.').shift();

            let restricted_words = [
                'https', 'http', 'www', 'subdomain', 'domain', 'primary-domain', 'central-domain',
                'landlord', 'landlords', 'tenant', 'tenants', 'multi-store', 'multistore', 'admin',
                'user', 'user', site_name, primary_domain];
            let newestText = restricted_words.includes(value);
            let base_url = '<?php echo e(str_replace(['http://','https://'], '', url('/'))); ?>';

            if(newestText != true)
            {
                msgWrap.html('');
                msgWrap.append('<span class="text-success"> ' + value+'.'+base_url + ' <?php echo e(__('is available')); ?></span>');
                $('#login_button').attr('disabled', false);
                $('.order-btn').attr('disabled', false);
                trial_button.attr('disabled', false);
            } else {
                msgWrap.html('');
                msgWrap.append('<span class="text-danger"><?php echo e(__('This subdomain is not available')); ?></span>');
                $('.order-btn').attr('disabled', true)
            }
        }).catch(function (error) {
            var responseData = error.response.data.errors;
            msgWrap.html('');
            msgWrap.append('<span class="text-danger"> ' + responseData.subdomain + '</span>');
            $('#login_button').attr('disabled', true)
            $('.order-btn').attr('disabled', true)
            //
        });
    });
    //subdomain check
</script>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/components/custom-js/landloard-unique-subdomain-check.blade.php ENDPATH**/ ?>