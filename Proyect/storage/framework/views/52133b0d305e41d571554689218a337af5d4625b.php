

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
    <p class="formularioTitulo">Registrar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('uploadPreguntas.store')); ?>">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('descripcion')); ?>" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuestaCorrecta" type="text" class="formularioInput" name="respuestaCorrecta" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('respuestaCorrecta')); ?>" required autocomplete="respuestaCorrecta">
                    <label for="respuestaCorrecta" class="formularioLabel">Respuesta</label>
                </div>

                <div class="">
                    <input id="respuestaError1" type="text" class="formularioInput" name="respuestaError1" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('respuestaError1')); ?>" required autocomplete="respuestaError1">
                    <label for="respuestaError1" class="formularioLabel">Respuesta Error 1</label>
                </div>
                <div class="">
                    <input id="respuestaError2" type="text" class="formularioInput" name="respuestaError2" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('respuestaError2')); ?>" required autocomplete="respuestaError2">
                    <label for="respuestaError2" class="formularioLabel">Respuesta Error 2</label>
                </div>
                <div class="">
                    <input id="respuestaError3" type="text" class="formularioInput" name="respuestaError3" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('respuestaError3')); ?>" required autocomplete="respuestaError3">
                    <label for="respuestaError3" class="formularioLabel">Respuesta Error 3</label>
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
                            <?php echo e(__('Agregar')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Registro de Preguntas</p>
    <div class="tablaVisualizacionPreguntas">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Temática</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pregunta->id); ?></td>
                        <td><?php echo e($pregunta->descripcion); ?></td>
                        <td><?php echo e($pregunta->respuestaCorrecta); ?></td>
                        <td><?php echo e($pregunta->nombretematica); ?></td>
                        <?php echo method_field('DELETE'); ?>
                        <td><a href="<?php echo e(route('uploadPreguntas.destroy', $pregunta->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas eliminar la pregunta <?php echo e($pregunta->id); ?>?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="<?php echo e(route('uploadPreguntas.edit', $pregunta->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de la pregunta <?php echo e($pregunta->id); ?>?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <section class="barraPaginacion">
            <?php echo e($preguntas->links()); ?>

        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/administrador/uploadPreguntas.blade.php ENDPATH**/ ?>