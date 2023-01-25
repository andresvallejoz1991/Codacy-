

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
    <p class="formularioTitulo">Registrar Temática</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="<?php echo e(route('adminTematicas.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <label for="imgTematica" class="subirImg">Subir Imagen</label>
                    <input id="imgTematica" type="file" class="cromoInput" name="imgTematica" value="<?php echo e(old('imgTematica')); ?>" required autocomplete="imgTematica">
                    
                </div>
                <div class="">
                    <input id="nombretematica" type="text" class="formularioInput" name="nombretematica" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="<?php echo e(old('nombretematica')); ?>" required autocomplete="nombretematica">
                    <label for="nombretematica" class="formularioLabel">Nombre</label>
                </div>
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</label>
                    <section class="sectionOpcionesAlbum">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($album -> id); ?>" <?php echo e($album->id == '{$album -> id' ? 'selected' : ''); ?>}>
                                <?php echo e($album -> nombreAlbum); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </section>
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
    <p class="tablaTitulo">Tématicas Registradas</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Álbum</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tematica->id); ?></td>
                        <td><img src="<?php echo e(asset('storage').'/'.$tematica->imgTematica); ?>" alt="tematica" width="342px" height="172px"></td>
                        <td><?php echo e($tematica->nombretematica); ?></td>
                        <td><?php echo e($tematica->nombreAlbum); ?></td>
                        <td><a href="<?php echo e(route('adminTematicas.edit', $tematica->id)); ?>" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de la temática <?php echo e($tematica->nombretematica); ?>?')" class="botonEditar">
                        <img src="../../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <section class="barraPaginacion">
            <?php echo e($tematicas->links()); ?>

        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\Laravel\ProyectoCromos\Proyect\resources\views/administrador/adminTematicas.blade.php ENDPATH**/ ?>