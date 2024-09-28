<?php $__env->startSection('title'); ?>
    <?php echo e($tag_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Tag: ').$tag_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="blog-content-area padding-120 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php if(count($all_blogs) < 1): ?>
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    <?php echo e(__('No Post Available In ').$tag_name.__(' Tag')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                            $user_lang = get_user_lang();
                        ?>

                        <?php $__currentLoopData = $all_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog-grid margin-bottom-30">
                                    <div class="thumb">
                                        <a href="<?php echo e(route(route_prefix().'frontend.blog.single',$data->slug)); ?>">
                                            <?php echo render_image_markup_by_attachment_id($data->image); ?>

                                        </a>
                                    </div>
                                    <div class="content mt-3">
                                        <ul class="post-meta">
                                            <li><a href="<?php echo e(route(route_prefix().'frontend.blog.single',$data->slug)); ?>"><i class="las la-calendar-alt"></i> <?php echo e($data->created_at->diffForHumans()); ?></a></li>
                                            <li><a href="<?php echo e(route(route_prefix().'frontend.blog.single',$data->slug)); ?>"><?php echo e(__('By ')); ?> <i class="las la-user"></i><?php echo e(($data->author) ?? __("Anonymous")); ?></a></li>
                                        </ul>
                                        <h4 class="title mt-3"><a href="<?php echo e(route(route_prefix().'frontend.blog.single', $data->slug)); ?>"><?php echo e($data->title); ?></a></h4>
                                        <div class="description mt-3">
                                            <?php echo e(str(strip_tags($data->blog_content,55))->limit(255)); ?>

                                        </div>
                                        <a href="<?php echo e(route(route_prefix().'frontend.blog.single', $data->slug)); ?>" class="readmore mt-3"><?php echo e(__('Read More')); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-lg-12">
                            <?php echo $all_blogs->links(); ?>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_single_sidebar_sidebar">
                        <?php echo render_frontend_sidebar('sidebar',['column' => false]); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landlord.frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/exchangemails/amstechs.com/core/Modules/Blog/Resources/views/landlord/frontend/blog/blog-tags.blade.php ENDPATH**/ ?>