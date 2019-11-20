<?php $__env->startSection('page-content'); ?>
    <?php
        $admin = false;
    ?>


    <header role="banner">
        <div class="navbar-fixed-top" style="background-color:#f1f1f1;">
            <div class="container top-header hidden-xs">
                <!-- Logo -->
                <div class="col-sm-4 col-md-4 col-lg-4 hidden-xs">
                    <div class="logo">
                        <a href="/"><img src="/images/Gig_Green_Logo_Web_SMALL.png"/></a>
                    </div>
                </div>
                <!-- Registration Buttons -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                    <div class="registration-container pull-right">
                        <?php if($admin): ?>
                            <a href="javascript:void(0);" id="layout_admin" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus">Admin <span class="caret"></span></a>
                            <?php if(true): ?> <span style="font-size:1.3em;color:lightgrey;">&nbsp;|&nbsp;</span> <?php endif; ?>
                        <?php endif; ?>


                        <?php if(auth()->guard()->check()): ?>
							<?php if(Auth::user()->type == 'Visitor'): ?>
                            <a href="javascript:void(0);" id="layout_visitor" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?> <span class="caret"></span></a>
							   
							  
							 <?php endif; ?>
							 <?php if(Auth::user()->type == 'Vendor'): ?>
                            <a href="javascript:void(0);" id="layout_user" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?> <span class="caret"></span></a>
							 <?php endif; ?>
                        <?php endif; ?>

                        <?php if(auth()->guard()->guest()): ?>
                            <a href="/signin/" class="btn btn-primary">Sign In</a>
                            <span>&nbsp;</span>
                            <a href="/register/" class="btn btn-primary">Register</a>
                        <?php endif; ?>

                        <?php if(auth()->check()): ?>
                            <favorites-counter :user="<?php echo e(auth()->user()); ?>" :favorites="<?php echo e($favorites); ?>"></favorites-counter>
                        <?php else: ?>
                            <favorites-counter :user="null" :favorites="<?php echo e($favorites); ?>"></favorites-counter>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <nav id="main-navbar" class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header navbar-menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- text logo on mobile view -->
                        <a id="hypHome_MobileLogo" class="navbar-brand visible-xs" href="/">
                            GigHighway
                        </a>

                        <div class="header-inner-right visible-xs">
                            <ul class="menu-icon-list">
                                <?php if(true): ?>

                                    <li class="menu-icons"><a id="headerMobileSearch"
                                                              class="hypLayout_GlobalHeaderSearch"><span
                                                    class="glyphicon glyphicon-search"></span></a></li>
                                <?php endif; ?>
                                <li class="menu-icons"><a data-target="#hdivQuoteCart_FavoriteItemsModal"
                                                          data-toggle="modal"><span
                                                class="glyphicon glyphicon-heart"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <?php $__env->startSection('primary-menu'); ?>
                            <ul class="nav navbar-nav" role="menu">
                                <li class="menuItem_l1">
                                    <a href="/category/music-entertainment/">Music Entertainment</a>

                                </li>
                                <li class="menuItem_l1">
                                    <a href="/category/event-services/">Event Services</a>

                                </li>
                                <li class="menuItem_l1">
                                    <a href="/category/variety-acts/">Variety Acts</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">Other Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/category/speakers/">Speakers</a></li>
                                        <li><a href="/category/transportation/">Transportation</a></li>
                                        <li><a href="/category/parties-and-rentals/">Parties and Rentals</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://blog.gighighway.com/">Blog</a></li>
                                <li class="visible-xs divider"></li>
                                <li class="visible-xs"><a href="/register/">Register</a></li>
                                <li class="visible-xs"><a href="/signin/">Sign in</a></li>
                            </ul>
                        <?php echo $__env->yieldSection(); ?>
                        
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container-fluid no-padding banner-container">
        <?php echo $__env->yieldContent('banner'); ?>
    </div>

    <main id="mainContent" role="main" class="container main-container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('main-body'); ?>
    </main>

    <section class="container-fluid">
        
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <footer class="clearFix">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="/aboutus/">About Us</a></li>
                        <li><a href="/privacypolicy/">Privacy Policy</a></li>
                        <li><a href="/termsofuse/">Terms and Conditions</a></li>
                        <li><a href="http://blog.gighighway.com/" target="_blank">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="/register/">Sign Up</a></li>
                        <li><a href="/requestquote/">Quick Quote</a></li>
                        <li><a href="/signin/">Sign In</a></li>
                        <li><a href="/help/">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="/contactus/">Contact Us</a></li>
                        <li><a href="tel:8012602276">Tel: (801) 260-2276</a></li>
                        <li>
                            <a href="mailto:info@gighighway.com">Email: info@gighighway.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Follow Us</h4>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/GigHighway" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/gighighway/" target="_blank">Instagram</a></li>
                        <li><a href="https://plus.google.com/+Gighighway1" target="_blank">Google Plus</a></li>
                        <li><a href="https://www.youtube.com/channel/UCjkwyekOcYrVZd5hUpV9N_A"
                               target="_blank">YouTube</a></li>
                        <li><a href="https://twitter.com/gighighway" target="_blank">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-inverse text-center copyright">
            &copy;<?php $date = new DateTime("now"); echo $date->format("Y"); ?> GigHighway. All rights reserved.
        </div>
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>