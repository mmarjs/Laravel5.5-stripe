<?php $__env->startSection('title','GigHighway - The Road to Extraordinary Events'); ?>
<?php $__env->startSection('banner'); ?>
    <div class="jumbotron text-center" style="background-color:gray; margin-bottom:0;">
        <h1 style="padding-bottom:1%;">
            <span id="spnCategory_Name"><?php echo e($category->name); ?></span>
        </h1>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-body'); ?>
    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 40px; margin-bottom: 40px;">
        <?php if($childCategoryCount > 1): ?>
            <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 category-sub-container">
                <div class="row"><h4 class="text-center category-name-title"><?php echo e($child->name); ?></h4></div>
                <?php echo $__env->make('categories._child-list', ['parent' => $child], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <?php echo $__env->make('categories._child-list', ['parent' => $category], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>