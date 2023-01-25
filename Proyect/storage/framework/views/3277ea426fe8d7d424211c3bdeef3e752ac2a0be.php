

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
    <p class="formularioTitulo">Cargar Cromo</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('uploadCromos.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="">
                    <label for="imgCromo" class="subirImg">Subir Imagen</label>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="<?php echo e(old('imgCromo')); ?>" required autocomplete="imgCromo">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInput" name="nombreCromo" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('nombreCromo')); ?>" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabel">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" value="<?php echo e(old('descripcion')); ?>" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Descripción</label>
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
    <p class="tablaTitulo">Registro de Cromos</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Temática</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <?php $__currentLoopData = $cromos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cromo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cromo->id); ?></td>
                        <td><?php echo e($cromo->nombreCromo); ?></td>
                        <td><img src="<?php echo e(asset('storage').'/'.$cromo->imgCromo); ?>" alt="cromo" width="200px" height="200px"></td>
                        <td><?php echo e($cromo->nombretematica); ?></td>
                        <?php echo method_field('DELETE'); ?>
                        <td><a href="<?php echo e(route('uploadCromos.destroy', $cromo->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas eliminar el cromo <?php echo e($cromo->nombreCromo); ?>?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="<?php echo e(route('uploadCromos.edit', $cromo->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas editar los datos del cromo <?php echo e($cromo->nombreCromo); ?>?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <section class="barraPaginacion">
            <?php echo e($cromos->links()); ?>

        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/administrador/uploadCromos.blade.php ENDPATH**/ ?>