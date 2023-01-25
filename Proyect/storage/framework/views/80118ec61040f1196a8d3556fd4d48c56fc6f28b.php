

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
    <p class="formularioTitulo">Registrar Álbum</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminAlbum.store')); ?>">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <input id="nombreAlbum" type="text" class="formularioInput" name="nombreAlbum" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('nombreAlbum')); ?>" required autocomplete="nombreAlbum">
                    <label for="nombreAlbum" class="formularioLabel">Nombre</label>
                </div>
                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            <?php echo e(__('Guardar')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Álbumes Registrados</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($album->id); ?></td>
                        <td><?php echo e($album->nombreAlbum); ?></td>
                        <td><a href="<?php echo e(route('adminAlbum.edit', $album->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas editar los datos del álbum <?php echo e($album->nombreAlbum); ?>?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <section class="barraPaginacion">
            <?php echo e($albumes->links()); ?>

        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/adminAlbum.blade.php ENDPATH**/ ?>