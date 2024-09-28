<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="<?php echo e(tenant_url_with_protocol(tenant()?->domain?->domain)); ?>" class="nav-link" target="_blank">
                <div class="nav-profile-image">

                    <?php if(auth('admin')->user()->image != null): ?>
                        <?php echo render_image_markup_by_attachment_id(optional(auth('admin')->user())->image,'','full',true); ?>

                    <?php else: ?>
                        <img src="<?php echo e(global_asset('assets/landlord/uploads/media-uploader/no-image.jpg')); ?>" alt="">
                    <?php endif; ?>

                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo e(optional(auth('admin')->user())->name); ?></span>
                    <span class="text-secondary text-small"><?php echo e(optional(auth('admin')->user())->username); ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <?php echo \App\Facades\LandlordAdminMenu::render_tenant_sidebar_menus(); ?>

    </ul>
</nav>
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/tenant/admin/partials/sidebar.blade.php ENDPATH**/ ?>