<?php $__env->startSection("title", __("Manage POS")); ?>

<?php $__env->startSection('pwa-header'); ?>
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="<?php echo e(global_asset('assets/pwa/logo.PNG')); ?>">
    <link rel="manifest" href="<?php echo e(global_asset('assets/pwa/manifest.json')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php if(env("APP_ENV") == 'production'): ?>
        <?php echo e(\Illuminate\Support\Facades\Vite::useHotFile(storage_path('vite.hot')) // Customize the "hot" file...
            ->useBuildDirectory('../../_build') // Customize the build directory...
            ->useManifestFilename('manifest.json') // Customize the manifest filename...
            ->withEntryPoints(['resources/css/app.css'])); ?>

    <?php else: ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="app"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <?php if(env("APP_ENV") == 'production'): ?>
        <?php echo e(\Illuminate\Support\Facades\Vite::useHotFile(storage_path('vite.hot')) // Customize the "hot" file...
                ->useBuildDirectory('../../_build') // Customize the build directory...
                ->useManifestFilename('manifest.json') // Customize the manifest filename...
                ->withEntryPoints(['resources/js/app.js'])); ?>

    <?php else: ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pwa-footer'); ?>
    <script src="<?php echo e(global_asset('assets/pwa/sw.js')); ?>"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register(window.appUrl+"/assets/pwa/sw.js").
            then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);

            });

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenant.admin.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Pos/Resources/views/index.blade.php ENDPATH**/ ?>