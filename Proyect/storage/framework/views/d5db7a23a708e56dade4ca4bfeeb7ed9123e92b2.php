<?php $__env->startSection('content'); ?>
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
        <img src="../../img/usuario (1) 1.png" alt="">
            <?php echo e(__('Registro')); ?></div>
        <div class="">
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                <div class="reg2">
                    <label for="name" class=""><?php echo e(__('Nombre')); ?></label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Ingrese nombre">

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

                <div class="reg3">
                    <label for="email" class=""><?php echo e(__('Dirección de Correo')); ?></label>

                    <div class="reg4">
                        <input id="email" type="email" class="" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Ingrese su correo">

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

                <div class="reg5">
                    <label for="password" class=""><?php echo e(__('Password')); ?></label>

                    <div class="reg6">
                        <input id="password" type="password" class="" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">

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

                <div class="reg7">
                    <label for="password-confirm" class=""><?php echo e(__('Confirm Password')); ?></label>

                    <div class="reg8">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                    </div>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            <?php echo e(__('Registrarse')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Proyect\resources\views/auth/register.blade.php ENDPATH**/ ?>