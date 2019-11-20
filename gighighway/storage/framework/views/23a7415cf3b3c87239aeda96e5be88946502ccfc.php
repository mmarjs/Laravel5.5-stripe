<?php if(isset($vendors)): ?>
    <div class="row">
        <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <vendor-thumbnail :user="<?php echo e($theUser); ?>" :vendor="<?php echo e($vendor); ?>"></vendor-thumbnail>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
