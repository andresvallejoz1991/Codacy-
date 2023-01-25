

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
    <p class="formularioTituloEdit">Editar Temática <?php echo e($tematica->nombretematica); ?></p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminTematicas.update', $tematica->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PATCH')); ?>

                <br>
                <div class="">
                    <label for="imgTematica" class="subirImg">
                        Editar Imagen (No requerido)
                    </label>
                    <input id="imgTematica" type="file" class="cromoInput" name="imgTematica" value="<?php echo e($tematica->imgTematica); ?>">
                </div>
                <div class="">
                    <input id="nombretematica" type="text" class="formularioInputDos" name="nombretematica" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($tematica->nombretematica); ?>" required autocomplete="nombretematica">
                    <label for="nombretematica" class="formularioLabelDos">Nombre</label>
                </div>
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</p></label>
                    <section class="sectionOpcionesAlbum">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($album -> id); ?>" <?php echo e($album->id == '{$album -> id' ? 'selected' : ''); ?>>
                                <?php echo e($album -> nombreAlbum); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/editTematicas.blade.php ENDPATH**/ ?>