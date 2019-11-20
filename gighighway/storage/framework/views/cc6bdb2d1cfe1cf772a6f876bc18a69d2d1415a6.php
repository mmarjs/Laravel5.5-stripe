<?php $__env->startSection('title','Sign In - GigHighway'); ?>

<?php $__env->startSection('main-body'); ?>
<style>
    @media(min-width:767px) {
        #hypSignIn_ForgotPassword { float: right !important; }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1>Sign In</h1>
            <hr>
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal well" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail:<span class="requiredAsterisk">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password:<span class="requiredAsterisk">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>

                                <a class="btn btn-link" href="/forgot-password">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared._layout-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>