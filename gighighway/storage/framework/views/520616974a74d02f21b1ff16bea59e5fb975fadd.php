<?php $__env->startSection("primary-menu"); ?>
    ##parent-placeholder-40b738810b36b2a1778e69bdee7023797ae72276##

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-body'); ?>
    <link href="/css/flexslider.min.css?version=2016040280120" rel="stylesheet"/>
    <link href="/css/pageSpecific/profile.css?version=2016040280129" rel="stylesheet"/>
    <link rel="stylesheet" href="/js/vendor/unitegallery/dist/css/unite-gallery.css">
    <link rel="stylesheet" href="/js/vendor/unitegallery/dist/themes/default/ug-theme-default.css">

    <?php echo $__env->make('general.partials.breadcrumbs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

    
    <div id="hdivProfile_Container" class="row" style="">
        <!-- profile intro -->
        <div class="col-sm-12">
         <h1>Quote Requests</h1>
		
            <h3>Open Quote Requests</h3>
			
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Date Opened</th>
                    <th>Requested To</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
				
                <?php $__currentLoopData = $openRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quoteRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                   <td><?php echo e($quoteRequest->created_at); ?></td>
                    <td><?php echo e($quoteRequest->name); ?></td>
					<td><?php echo e($quoteRequest->email); ?></td>
					
					<td><?php echo e($quoteRequest->user_id); ?></td>
					<td><?php echo e($quoteRequest->status); ?></td>
                    <td>
                        <a href="<?php echo e(URL::to('dashboard/quote-requests/'.$quoteRequest->id)); ?>" class="btn btn-info btn-sm">
                            <i class="fa fa-search"></i>
                            View
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
			
        </div>
        <div class="col-sm-12 col-md-8">
         </div>
        <div class="col-sm-12 col-md-4 text-center" id="sidebar">
        <p><?php echo e($user->full_name); ?></p>
		<p><?php echo e($user->type); ?></p>
		
			
			
			
        </div>

        <div class="clearfix">&nbsp;</div>


        <div class="col-sm-12 col-md-12 col-lg-12 no-padding">
           
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div id="hdivProfile_ReviewsContainer" class="col-md-12">
                
            </div>

        </div>
        <a id="hypProfile_ReportInappropriateCotent" data-target="#hdivReportAndDisputeContent_SendMessageModal"
           data-toggle="modal" class="pull-right"><span class="glyphicon glyphicon-flag"></span> Report content</a>
    </div>

    <div class="clearfix">&nbsp;</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <script src="/js/vendor/unitegallery/dist/js/unitegallery.js"></script>
    <script src="/js/vendor/unitegallery/dist/themes/default/ug-theme-default.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="<?php echo e(URL::asset('js/shared/jquery.flexslider.js')); ?>"></script>
    
    
    <script src="<?php echo e(URL::asset('js/shared/jquery.blImageCenter.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/shared/loStorage.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/shared/pubsub.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/profile.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#image-gallery").unitegallery();
            $("#video-gallery").unitegallery();
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>