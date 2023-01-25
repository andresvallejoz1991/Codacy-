

<?php $__env->startSection('content'); ?>
<div class="ventanaLogeo">
    <div class="div1">
        <div class="div2">
            <img src="../../img/iniciar-sesion 1.png" alt="iniciar Sesion">
            Iniciar Sesión
        </div>

        <div class="">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="div3">
                    <label for="email" class="labelInicio"><?php echo e(__('Usuario')); ?></label>

                    <div class="div4">
                        <input id="email" type="email" class="inputInicio" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Ingrese su usuario">
                        <br>
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

                <div class="div3">
                    <label for="password" class="labelInicio"><?php echo e(__('Contraseña')); ?></label>

                    <div class="div4">
                        <input id="password" type="password" class="inputInicio" name="password" required autocomplete="current-password" placeholder="Ingrese su clave">
                        <br>
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
                        <div class="div5">
                            <input class="" type="checkbox" name="remember" id="remember" value="<?php echo e(old('remember') ? 'checked' : ''); ?>">

                            <label class="" for="remember">
                                <?php echo e(__('Recordar Contraseña')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="div6">
                        <button type="submit" class="">
                            <?php echo e(__('Iniciar')); ?>

                        </button>

                        <!--
                            <?php if(Route::has('password.request')): ?>
                                <a class="" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Olvido su Contraseña?')); ?>

                                </a>
                            <?php endif; ?>
                        -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/auth/login.blade.php ENDPATH**/ ?>