<?php $__env->startSection('title','GigHighway - The Road to Extraordinary Events'); ?>

<?php
    $bannerIndex = mt_rand(1,3);
?>
<?php $__env->startSection('banner'); ?>

    
    <div class="banner col-lg-12 col-md-12" style="background:url('/images/banner/home-banner-<?php echo e($bannerIndex); ?>.jpg');
            background-position:50% 0;
            background-repeat:no-repeat;
            background-size:cover;
            position:relative;
            min-height:670px;
            height:auto; padding:43px 15px;">

        <div id="hdivHome_BannerInnerContent">
            <div class="row">
                <div id="hdivHome_HeadLeadText" class="text-center">
                    <h1 class="head-lead">The road to extraordinary events.</h1>
                </div>
            </div>
            <div class="row">
                <?php echo Form::open(['route' => 'global.search', 'method' => 'POST', 'class' => 'center-block', 'style' => 'width: 50%;']); ?>

                <form id="fhGlobal_Search" action="/search/" method="get" class="center-block" style="width:50%;"
                      onsubmit="return globalSearch.validate()" role="form">
                    <div id="hdivHome_SearchInputFieldsContainer" class="form-group form-group-xlg">
                        <div class="col-sm-7">
                            <label for="lookFor" class="sr-only">Looking for:</label>
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input
                                    class="form-control global-search-input autocomplete ui-autocomplete-input typeahead"
                                    id="category-search" maxlength="300" name="term"
                                    placeholder="ex: Magician, Rock Band, Guitarist..." required="required"
                                    title="ex: Magician, Rock Band, Guitarist..." type="text">
                        </div>

                        <div class="col-sm-4">
                            <label for="location" class="sr-only">Zip Code:</label>
                            <input id="hfSearch_ZipLocation" value="" name="q" type="hidden">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input
                                    class="form-control global-search-input autocomplete ui-autocomplete-input"
                                    name="location"
                                    id="search_location" maxlength="300" placeholder="City, ST or ZIP Code"
                                     title="City, ST or ZIP Code" autocomplete="off" type="text">
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary btn-xl">go</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-body'); ?>



    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="no-padding">
                    <span class="title">Featured</span>
                </div>

                <?php echo $__env->make('home.featured', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="no-padding">
                    <span class="title">Testimonials</span>
                </div>
            </div>
        </div>

        <div id="hdivHome_TestimonialsContainer" class="col-xs-12 col-md-12 col-lg-12">
            
            <?php echo $__env->make('home.testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

    
    <div class="row">
        <div class="col-sm-12 home_clientLogoContainer">
            <h2 class="text-center">A Few of our Satisfied Clients</h2>
            <div id="hdivHome_ClientLogosContainer">
                <div id="hdivHome_ClientLogosImage"></div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-scripts'); ?>
    <style>

        #hdivHome_TestimonialsContainer {
            min-height: 179px;
        }

        #hdivHome_ClientLogosContainer {
            height: 150px;
            position: relative;
            overflow: hidden;
        }

        #hdivHome_ClientLogosContainer > div {
            height: 200px;
            width: 100%;
            background: url(/images/client-icons.jpg);
            background-size: 2420px;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;

            -moz-transition: opacity 0.5s ease-out;
            -o-transition: opacity 0.5s ease-out;
            -webkit-transition: opacity 0.5s ease-out;
            -ms-transition: opacity 0.5s ease-out;

            -webkit-animation: moveClientLogo 60s linear infinite;
            -moz-animation: moveClientLogo 60s linear infinite;
        }

        @-webkit-keyframes moveClientLogo {
            from {
                background-position: 2420px;
            }
            to {
                background-position: 0;
            }
        }

        @-moz-keyframes moveClientLogo {
            from {
                background-position: 0;
            }
            to {
                background-position: 2420px;
            }
        }

        .home_clientLogoContainer {
            background-color: #FCFBFB;
            padding-top: 18px;
            padding-bottom: 63px;
        }

        .home_clientLogoContainer h2 {
            padding-bottom: 6px;
        }
    </style>
    <script>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>