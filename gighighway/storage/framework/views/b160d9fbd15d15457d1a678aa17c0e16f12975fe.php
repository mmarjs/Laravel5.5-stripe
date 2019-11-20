<?php $__currentLoopData = $parent->children->chunk(floor(round($parent->children->count() / 4))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-3">
        <ul class="category-sub-list">
            <?php $__currentLoopData = $childChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($_child->children->count()): ?>
                    <li><a href="<?php echo e(route('category.show', $_child->slug)); ?>"><?php echo e($_child->name); ?></a></li>
                <?php else: ?>
                    <li><?php echo e($_child->name); ?></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>