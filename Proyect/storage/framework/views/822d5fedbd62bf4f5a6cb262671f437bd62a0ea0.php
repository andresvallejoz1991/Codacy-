

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

    <p class="formularioTitulo">Registrar Usuario</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminUsers.store')); ?>">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInput" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name">
                    <label for="name" class="formularioLabel">Nombre</label>
                </div>

                <div class="">
                    <input id="email" type="email" class="formularioInput" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                    <label for="email" class="formularioLabel">Correo</label>
                </div>

                <div class="">
                    <input id="password" type="password" class="formularioInput" name="password" required autocomplete="new-password">
                    <label for="password" class="formularioLabel">Contraseña</label>
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="formularioInput" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm" class="formularioLabel">Confirmar Contraseña</label>
                </div>

                <div class="">
                    <label for="rol" class="labelSelect">Rol</label>
                    <section class="sectionOpciones">
                        <select name="rol" id="rol" class="selectFormulario">
                            <option value="">Selecciona un Rol..</option>
                            <option value="usuario" <?php echo e(old('rol') == 'usuario' ? 'selected' : ''); ?>>usuario</option>
                            <option value="administrador" <?php echo e(old('rol') == 'administrador' ? 'selected' : ''); ?>>administrador</option>
                        </select>
                    </section>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Registrar
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
                    <th>ID</th>
                    <th>Nombre</th>
                    <th><?php echo e(__('Email')); ?></th>
                    <th><?php echo e(__('Rol')); ?></th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($usuario->id); ?></td>
                        <td><?php echo e($usuario->name); ?></td>
                        <td><?php echo e($usuario->email); ?></td>
                        <td><?php echo e($usuario->rol); ?></td>
                        <?php echo method_field('DELETE'); ?>
                        <td><a href="<?php echo e(route('adminUsers.destroy', $usuario->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas eliminar a <?php echo e($usuario->name); ?>?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="<?php echo e(route('adminUsers.edit', $usuario->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de <?php echo e($usuario->name); ?>?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <section class="barraPaginacion">
            <?php echo e($usuarios->links()); ?>

        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/adminUsers.blade.php ENDPATH**/ ?>