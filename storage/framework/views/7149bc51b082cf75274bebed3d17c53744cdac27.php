<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo e(__('Order From')); ?> <?php echo e(get_static_option('site_title')); ?></title>
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
        body {
            background-color: #fdfdfd;
        }
        .mail-container {
            max-width: 650px;
            margin: 50px auto;
            text-align: center;
        }

        .mail-container .logo-wrapper {
            padding: 20px 0 20px;
            border-bottom: 5px solid <?php echo e(get_static_option('site_color')); ?>;
        }
        table {
            margin: 0 auto;
        }
        table {

            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid rgba(0,0,0,.05);
            padding: 10px 20px;
            background-color: #fafafa;
            text-align: left;
            font-size: 14px;
            text-transform: capitalize;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: <?php echo e(get_static_option('site_color')); ?>;
            color: #000;
        }
        footer {
            margin: 20px 0;
            font-size: 14px;
        }
        .main-content-wrap {
            background-color: #fff;
            box-shadow: 0 0 15px 0 rgba(0,0,0,.05);
            padding: 30px;
        }

        .main-content-wrap p {
            margin: 0;
            text-align: left;
            font-size: 14px;
            line-height: 26px;
        }

        .main-content-wrap p:first-child {
            margin-bottom: 10px;
        }

        .main-content-wrap .price-wrap {
            font-size: 60px;
            line-height: 70px;
            font-weight: 600;
            margin: 40px 0;
        }
        table {
            margin-bottom: 30px;
        }
        .logo-wrapper img{
            max-width: 200px;
        }

        .renew_heading{
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="mail-container">
    <div class="logo-wrapper">
        <a href="<?php echo e(url('/')); ?>">
            <?php echo render_image_markup_by_attachment_id(get_static_option('site_logo')); ?>

        </a>
    </div>
    <div class="main-content-wrap">
        <p><?php echo e(__('Email From')); ?> <?php echo e(get_static_option('site_'.get_default_language().'_title')); ?></p>
        <p><?php echo e(__('A new order has been placed. Order ID')); ?> #<?php echo e($data->id); ?> ,
                <?php echo e(__('Payment method')); ?> <?php echo e(ucfirst(str_replace('_',' ',$data->payment_gateway))); ?> <?php echo e(ucfirst(str_replace('_',' ',$data->payment_gateway))); ?> </p>
        <div class="price-wrap"><?php echo e(amount_with_currency_symbol($data->total_amount)); ?></div>
    </div>

    <div class="product-table-wrap">
        <h3 class="mb-3"><?php echo e(__('Ordered Products')); ?></h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?php echo e(__('Name')); ?></th>
                <th><?php echo e(__('Quantity')); ?></th>
                <th><?php echo e(__('Price')); ?></th>
                <th><?php echo e(__('Total')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = json_decode($data->order_details) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($cart_item->name?? __('untitled')); ?>

                    </td>
                    <td><?php echo e($cart_item->qty ?? 0); ?></td>
                    <?php
                        $price = $cart_item->price ?? 0;
                    ?>
                    <td><?php echo e(amount_with_currency_symbol($price)); ?></td>
                    <td>
                        <?php echo e(amount_with_currency_symbol($cart_item->qty * $price)); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-end" colspan="3"><?php echo e(__('Total:')); ?></td>
                    <td><?php echo e(amount_with_currency_symbol($data->total_amount)); ?> <small class="small"><?php echo e(__('Incl Tax & Shipping')); ?></small></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="table-wrap">
        <h3 class="mb-3"><?php echo e(__('Order Summary')); ?></h3>
        <?php
            $payment_meta = json_decode($data->payment_meta,true);
        ?>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th><?php echo e(__('Tax')); ?></th>
                <td>(+) <?php echo e($payment_meta['product_tax'].'%'); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('Shipping cost')); ?></th>
                <td>(+) <?php echo e(amount_with_currency_symbol($payment_meta['shipping_cost'])); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('Total Amount')); ?></th>
                <td><?php echo e(amount_with_currency_symbol($payment_meta['total'])); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <?php echo get_footer_copyright_text(\App\Facades\GlobalLanguage::default_slug()); ?>

    </footer>
</div>
</body>
</html>


<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/emails/product_order_admin.blade.php ENDPATH**/ ?>