<?php $__env->startSection('main-body'); ?>
    <create-vendor
        :user="<?php echo e($user); ?>"
        :vendor-id="<?php echo e($vendorId); ?>"
        :plans="<?php echo e($plans); ?>"
        stripe-key="<?php echo e(config('services.stripe.key')); ?>"
    ></create-vendor>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-includes'); ?>
    <script src="https://js.stripe.com/v3/"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>