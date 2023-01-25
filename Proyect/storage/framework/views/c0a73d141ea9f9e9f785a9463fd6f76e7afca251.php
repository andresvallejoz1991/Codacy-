<?php $__env->startSection('content'); ?>
<div class="">
    <div class="">
        <div class=""><?php echo e(__('Register')); ?></div>

        <div class="">
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                <div class="">
                    <label for="name" class=""><?php echo e(__('Name')); ?></label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                        <?php $__errorArgs = ['name'];
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
                    <label for="email" class=""><?php echo e(__('E-Mail Address')); ?></label>

                    <div class="">
                        <input id="email" type="email" class="" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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
                        <input id="password" type="password" class="" name="password" required autocomplete="new-password">

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
                    <label for="password-confirm" class=""><?php echo e(__('Confirm Password')); ?></label>

                    <div class="">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IngWeb2021\Proyect\resources\views/auth/register.blade.php ENDPATH**/ ?>