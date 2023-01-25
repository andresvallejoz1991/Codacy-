

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
    <p class="formularioTitulo">Editar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('uploadPreguntas.update', $uploadPregunta->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <br>
                <div class="">
                    <input id="descripcion" type="text" class="formularioInputDos" name="descripcion" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($uploadPregunta->descripcion); ?>" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabelDos">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuestaCorrecta" type="text" class="formularioInputDos" name="respuestaCorrecta" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($uploadPregunta->respuestaCorrecta); ?>" required autocomplete="respuestaCorrecta">
                    <label for="respuestaCorrecta" class="formularioLabelDos">Respuesta</label>
                </div>

                <div class="">
                    <input id="respuestaError1" type="text" class="formularioInputDos" name="respuestaError1" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($uploadPregunta->respuestaError1); ?>" required autocomplete="respuestaError1">
                    <label for="respuestaError1" class="formularioLabelDos">Respuesta Error 1</label>
                </div>
                <div class="">
                    <input id="respuestaError2" type="text" class="formularioInputDos" name="respuestaError2" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($uploadPregunta->respuestaError2); ?>" required autocomplete="respuestaError2">
                    <label for="respuestaError2" class="formularioLabelDos">Respuesta Error 2</label>
                </div>
                <div class="">
                    <input id="respuestaError3" type="text" class="formularioInputDos" name="respuestaError3" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e($uploadPregunta->respuestaError3); ?>" required autocomplete="respuestaError3">
                    <label for="respuestaError3" class="formularioLabelDos">Respuesta Error 3</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpcionesTematica">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona una Temática..</option>
                            <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/administrador/editPreguntas.blade.php ENDPATH**/ ?>