<?php $__env->startSection('main-body'); ?>
    <div class="clearfix" style="margin-top: 20px;"></div>
    <div class="row">
	
				
			
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
            <div class="col-sm-12 col-md-4 col-lg-3">
                <vendor-thumbnail  :vendor="<?php echo e($result); ?>"></vendor-thumbnail>
            </div>
			
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		
<?php if($results->total()==0): ?>
	<div class="alert alert-danger">
  <strong>Sorry</strong>  try another search.
</div>
<?php endif; ?>


    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($results->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>