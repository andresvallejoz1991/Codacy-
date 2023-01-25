

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
    <p class="formularioTitulo">Editar Cromo <?php echo e($cromo->nombreCromo); ?></p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('uploadCromos.update', $cromo->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PATCH')); ?>

                <div class="">
                    <label for="imgCromo" class="subirImg">Editar Imagen (No requerido)</label>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="<?php echo e($cromo->imgCromo); ?>">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInputDos" name="nombreCromo" value="<?php echo e($cromo->nombreCromo); ?>" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabelDos">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInputDos" name="descripcion" value="<?php echo e($cromo->descripcion); ?>" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabelDos">Descripción</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpcionesTematica">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona una Temática..</option>
                            <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                $tematic = <?php echo e($tematica->nombretematica); ?>

                                <option value="<?php echo e($tematica -> id); ?>" <?php echo e($tematica->id == '{$tematica -> id' ? 'selected' : ''); ?>>
                                <?php echo e($tematica -> nombretematica); ?></option>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/administrador/editCromos.blade.php ENDPATH**/ ?>