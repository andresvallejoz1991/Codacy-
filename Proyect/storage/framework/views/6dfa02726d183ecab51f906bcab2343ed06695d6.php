

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
    <p class="formularioTituloEdit">Editar Álbum <?php echo e($adminAlbum->nombreAlbum); ?></p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminAlbum.update', $adminAlbum->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <br>
                <div class="">
                    <input id="nombreAlbum" type="text" class="formularioInputDos" name="nombreAlbum" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($adminAlbum->nombreAlbum); ?>" required autocomplete="nombreAlbum">
                    <label for="nombreAlbum" class="formularioLabelDos">Nombre</label>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/editAlbum.blade.php ENDPATH**/ ?>