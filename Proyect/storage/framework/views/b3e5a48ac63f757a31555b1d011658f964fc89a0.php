

<?php $__env->startSection('content'); ?>
<section class="contenidoAdmin">
    <?php if($errors->any()): ?>
        <ul class="alertaUl">
            <section class="alerta">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="alertaLi"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
        </ul>
    <?php endif; ?>
    <?php if($message = Session::get('mensaje')): ?>
        <ul class="alertaUlCorrecto">
            <section class="alertaCorrecto">
                <p><?php echo e($message); ?></p>
            </section>
        </ul>
    <?php endif; ?>
    <p class="formularioTituloEdit">Editar Usuario <?php echo e($adminUser->name); ?></p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminUsers.update', $adminUser->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInputDos" name="name" value="<?php echo e($adminUser->name); ?>">
                    <label for="name" class="formularioLabelDos">Nombre</label>
                </div>

                <div class="">
                    <input id="email" type="email" class="formularioInputDos" name="email" value="<?php echo e($adminUser->email); ?>">
                    <label for="email" class="formularioLabelDos">Correo</label>
                </div>

                <div class="">
                    <input id="password" type="password" class="formularioInputDos" name="password">
                    <label for="password" class="formularioLabelDos">Contraseña</label>
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="formularioInputDos" name="password_confirmation">
                    <label for="password-confirm" class="formularioLabelDos">Confirmar Contraseña</label>
                </div>

                <div class="">
                    <label for="rol" class="labelSelect">Rol</label>
                    <section class="sectionOpciones">
                        <select name="rol" id="rol" class="selectFormulario">
                            <option value="">Selecciona un Rol..</option>
                            <option value="usuario" <?php echo e($adminUser->rol == 'usuario' ? 'selected' : ''); ?>>usuario</option>
                            <option value="administrador" <?php echo e($adminUser->rol == 'administrador' ? 'selected' : ''); ?>>administrador</option>
                        </select>
                    </section>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/editUser.blade.php ENDPATH**/ ?>