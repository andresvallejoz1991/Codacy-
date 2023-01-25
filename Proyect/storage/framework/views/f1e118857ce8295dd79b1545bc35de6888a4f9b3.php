<?php $__env->startSection('content'); ?>
<div class="ventanaLogeo">
    <div class="">
        <div class=""><?php echo e(__('Login')); ?></div>

        <div class="">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="">
                    <label for="email" class=""><?php echo e(__('E-Mail Address')); ?></label>

                    <div class="">
                        <input id="email" type="email" class="" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="">
                    <label for="password" class=""><?php echo e(__('Password')); ?></label>

                    <div class="">
                        <input id="password" type="password" class="" name="password" required autocomplete="current-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <div class="">
                            <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <label class="" for="remember">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="">
                            <?php echo e(__('Login')); ?>

                        </button>

                        <?php if(Route::has('password.request')): ?>
                            <a class="" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IngWeb2021\Proyect\resources\views/auth/login.blade.php ENDPATH**/ ?>