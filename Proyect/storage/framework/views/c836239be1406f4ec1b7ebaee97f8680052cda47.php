

<?php $__env->startSection('content'); ?>
<br>
<?php if($errors->any()): ?>
    <ul class="alertaUl">
        <section class="alerta">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alertaLi"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </ul>
<?php endif; ?>
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
            <img src="../../img/usuario (1) 1.png" alt="registrarse">
                Editar Datos</div>
        <div class="">
            <form method="POST" action="<?php echo e(route('home.update', $home->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="reg2">
                    <label for="name" class="labelInicio"><?php echo e(__('Nombre')); ?></label>

                    <div class="reg4">
                        <input id="name" type="text" class="inputInicio" name="name" value="<?php echo e($home->name); ?>" required autocomplete="name" autofocus placeholder="Ingrese nombre">
                    </div>
                </div>

                <div class="reg3">
                    <label for="email" class="labelInicio"><?php echo e(__('Dirección de Correo')); ?></label>

                    <div class="reg4">
                        <input id="email" type="email" class="inputInicio" name="email" value="<?php echo e($home->email); ?>" required autocomplete="email" placeholder="Ingrese su correo">
                    </div>
                </div>

                <div class="reg5">
                    <label for="password" class="labelInicio"><?php echo e(__('Password')); ?></label>

                    <div class="reg6">
                        <input id="password" type="password" class="inputInicio" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">
                    </div>
                </div>

                <div class="reg7">
                    <label for="password-confirm" class="labelInicio"><?php echo e(__('Confirm Password')); ?></label>

                    <div class="reg8">
                        <input id="password-confirm" type="password" class="inputInicio" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                    </div>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/usuario/editarUsuarioN.blade.php ENDPATH**/ ?>