<?php $__env->startSection('title','Account Sign Up - GigHighway'); ?>


<?php $__env->startSection('main-body'); ?>
    <style>
        .panel-body p.lead {
            min-height: 80px;
        }

        #hdivRegister_SignUpPanel {
            border: 1px solid #ff9800;
        }

        #hdivRegister_QuotePanel {
            border: 1px solid #0d87e9;
        }
    </style>

    <h1 class="text-center">Signing up for an acount is quick and easy!</h1>
    <hr/>
    <div class="row col-lg-offset-2">
        <div class="col-sm-12 col-sm-6 col-md-5">
            <div id="hdivRegister_SignUpPanel" class="panel panel-default text-center">
                <div class="panel-body">
                    <h2 class="panel-heading">Create an Account</h2>
                    <p class="lead">I'm a entertainer, band, speaker, or offer event services.</p>
                    <p>
                        <a href="/signup/" class="btn btn-primary">Sign Up</a>
                    </p>
                </div>
                <p><a href="/pricing/">How much does it cost?</a></p>
            </div>
        </div>
        <div class="col-sm-12 col-sm-6 col-md-5">
            <div id="hdivRegister_QuotePanel" class="panel panel-default text-center">
                <div class="panel-body">
                    <h2 class="panel-heading">Get a Free Quote</h2>
                    <p class="lead">I'm planning an event and want to hire entertainment or event services.</p>
                    <p>
                        <a href="/freesignup/" class="btn btn-primary">Get Quotes</a>
                    </p>
                </div>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>