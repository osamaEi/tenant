<!-- Book Review Area start -->
<section class="bookreview-area section-bg-2 padding-top-50 padding-bottom-100">
    <div class="container custom-container-one">
        <div class="row gy-5">
            <div class="col-xxl-8 col-lg-7">
                <div class="bookreview-left-wrapper">
                    <ul class="tabs bookreview-tab">
                        <li class="active" data-tab="description"> <?php echo e(__('Description')); ?> </li>
                        <li data-tab="reviews"> <?php echo e(__('Reviews')); ?> </li>
                    </ul>
                </div>
                <div id="description" class="tab-content-item active">
                    <div class="bookreview-content-wrapper bg-white bookreviewer-padding mt-5">
                        <div class="bookreview-contents">
                            <div class="bookreview-contents-single">
                                <div class="bookreview-contents-single-flex d-flex">
                                    <div class="bookreview-contents-single-contents">
                                        <h4 class="bookreview-contents-single-contents-title">
                                            <?php echo e(__('Description')); ?>

                                        </h4>
                                    </div>
                                </div>
                                <div class="bookreview-contents-single-bottom mt-4">
                                    <p class="bookreview-contents-single-bottom-para mt-4">
                                        <?php echo $product->description; ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="reviews" class="tab-content-item">
                    <div class="bookreview-content-wrapper bg-white bookreviewer-padding mt-5">
                        <div class="bookreview-contents">



























































                            <?php $__currentLoopData = $reviews ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bookreview-contents-single bookreview-top-border">
                                <div class="bookreview-contents-single-flex d-flex">
                                    <div class="bookreview-contents-single-thumb">
                                        <?php
                                            $user = $review?->user;
                                            $image = get_attachment_image_by_id($user?->image);
                                            $image_url = !empty($image) ? $image['img_url'] : '';
                                        ?>
                                        <a href="javscript:void(0)">
                                            <img class="radius-parcent-50" src="<?php echo e($image_url); ?>" alt="reviewer">
                                        </a>
                                    </div>
                                    <div class="bookreview-contents-single-contents">
                                        <h4 class="bookreview-contents-single-contents-title">
                                            <a href="javascript:void(0)"> <?php echo e($user?->name); ?> </a>
                                        </h4>
                                        <span class="bookreview-contents-single-contents-sub"> Mar 29 2022 </span>
                                    </div>
                                </div>
                                <div class="bookreview-contents-single-bottom mt-4">
                                    <div class="bookreview-contents-single-bottom-flex d-flex">
                                        <?php echo render_star_rating_markup($review->rating); ?>

                                    </div>
                                    <p class="bookreview-contents-single-bottom-para mt-4"> <?php echo e($review->review_text); ?> </p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if(!empty(Auth::guard('web')->user())): ?>
                                <div class="review-form my-5">
                                    <h3><?php echo e(__('Leave a Review')); ?></h3>
                                    <form>
                                        <input type="hidden" class="rating-count" value="">
                                        <div class="ratings mt-4">
                                            <select class="star-rating">
                                                <option value="5"><?php echo e(__('Excellent')); ?></option>
                                                <option value="4" selected><?php echo e(__('Very Good')); ?></option>
                                                <option value="3"><?php echo e(__('Average')); ?></option>
                                                <option value="2"><?php echo e(__('Poor')); ?></option>
                                                <option value="1"><?php echo e(__('Terrible')); ?></option>
                                            </select>
                                        </div>

                                        <div class="form-group mt-4">
                                            <textarea type="text" name="review_text" class="form-control review-text" id="review-text"></textarea>
                                        </div>

                                        <div class="btn-wrapper text-end mt-4">
                                            <button type="submit" id="review-submit-btn" class="cmn-btn btn-small cmn-btn-bg-2 radius-0"><?php echo e(__('Submit Review')); ?></button>
                                        </div>
                                    </form>
                                </div>
                            <?php else: ?>
                                <div class="tab-review">
                                            <div class="row">
                                                <div class="col-lg-10 mx-auto">
                                                    <div class="auth-form-light text-left p-5">
                                                        <div class="brand-logo">
                                                            <?php echo render_image_markup_by_attachment_id('site_logo'); ?>

                                                        </div>
                                                        <h4 class="text-capitalize"><?php echo e(__('Hello! let us get started')); ?></h4>
                                                        <h6 class="font-weight-light"><?php echo e(__('Sign in to continue.')); ?></h6>
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
                                                        <div id="msg-wrapper"></div>
                                                        <form class="pt-3" action="" method="post" id="login_form_order_page">
                                                            <div class="form-group">
                                                                <input type="text" name="email" class="form-control form-control-lg" placeholder="<?php echo e(__('Username')); ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" class="form-control form-control-lg"  placeholder="<?php echo e(__('Password')); ?>">
                                                            </div>
                                                            <div class="mt-3 btn-wrapper">
                                                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn cmn-btn cmn-btn-bg-1 cmn-btn-small radius-0 mt-2" id="login_submit_btn"><?php echo e(__('Sign In')); ?></button>
                                                            </div>
                                                            <div class="my-2 d-flex justify-content-between align-items-center">
                                                                <div class="form-check">
                                                                    <label class="form-check-label text-muted">
                                                                        <input type="checkbox" name="remember" class="form-check-input"> <?php echo e(__('Keep me signed in')); ?>

                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="text-center mt-4 font-weight-light"> <?php echo e(__('Do not have an account?')); ?> <a href="<?php echo e(route('tenant.user.register')); ?>" class="text-primary"><?php echo e(__('Create')); ?></a></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Book related products Area start -->
            <?php echo $__env->make(include_theme_path('digital-shop.product_details.partials.related-products'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Book related products Area end -->
        </div>
    </div>
</section>
<!-- Book Review Area end -->
<?php /**PATH /home/exchangemails/amstechs.com/core/resources/views/themes/casual/frontend/digital-shop/product_details/partials/description-review.blade.php ENDPATH**/ ?>