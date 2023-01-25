

<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <ul class="alertaU2">
        <section class="alerta2">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alertaLi2"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </ul>
<?php endif; ?>
<div class="ventanaObtenerAlbum">
    <div class="obtenerAlbumTitulo">
        <img src="../../../img/book-reader-solid 1.png" alt="registrarse">
        Obtener Álbum
    </div>
    <div class="">
        <form method="POST" action="<?php echo e(route('mostrarAlbum.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="obtenerAlbum">
                <label for="id_album" class="labelObtenerAlbum">Álbum</label>
                <section class="sectionSelectObtenerAlbum">
                    <select name="id_album" id="id_album">
                        <option value="">Selecciona un Álbum..</option>
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($album -> id); ?>" <?php echo e($album->id == '{$album -> id' ? 'selected' : ''); ?>}>
                                <?php echo e($album -> nombreAlbum); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </section>
            </div>

            <div class="botonObtenerAlbum">
                <button type="submit" class="">
                    Obtener
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views//usuario/obtenerAlbum.blade.php ENDPATH**/ ?>