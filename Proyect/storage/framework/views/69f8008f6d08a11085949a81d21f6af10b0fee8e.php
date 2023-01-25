

<?php $__env->startSection('content'); ?>
<section class="contenidoAdmin">
    <p class="formularioTitulo">Registrar Usuario</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInput" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name">
                    <label for="name" class="formularioLabel"><?php echo e(__('Name')); ?></label>
                    <div class="">
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
                    <input id="email" type="email" class="formularioInput" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                    <label for="email" class="formularioLabel"><?php echo e(__('E-Mail Address')); ?></label>
                    <div class="">
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
                    <input id="password" type="password" class="formularioInput" name="password" required autocomplete="new-password">
                    <label for="password" class="formularioLabel"><?php echo e(__('Password')); ?></label>
                    <div class="">
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
                    <input id="password-confirm" type="password" class="formularioInput" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm" class="formularioLabel"><?php echo e(__('Confirm Password')); ?></label>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Datos de Usuario</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>Nombre</th>
                    <th><?php echo e(__('Email')); ?></th>
                    <th><?php echo e(__('Rol')); ?></th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <tr>
                    <td><?php echo e(Auth::user()->name); ?></td><td><?php echo e(Auth::user()->email); ?></td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
                <tr>
                    <td><?php echo e(Auth::user()->name); ?></td><td><?php echo e(Auth::user()->email); ?></td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
                <tr>
                    <td><?php echo e(Auth::user()->name); ?></td><td><?php echo e(Auth::user()->email); ?></td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
                <tr>
                    <td><?php echo e(Auth::user()->name); ?></td><td><?php echo e(Auth::user()->email); ?></td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Proyect\resources\views/adminUsers.blade.php ENDPATH**/ ?>