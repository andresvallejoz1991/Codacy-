

<?php $__env->startSection('content'); ?>
<section class="contenidoAdmin">
    <p class="formularioTitulo">Registrar Temática</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="">
                <?php echo csrf_field(); ?>
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInput" name="name" value="<?php echo e(old('nombretematica')); ?>" required autocomplete="name">
                    <label for="name" class="formularioLabel">Nombre</label>
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
    <script src="../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Tématicas Registradas</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>Nombre</th>
                    <th>Cromos</th>
                    <th>Preguntas</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                <tr>
                    <td>Macroeconomía</td><td>N/A</td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
                <tr>
                    <td>Microeconomía</td><td>N/A</td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
                <tr>
                    <td>Econometría</td><td>N/A</td>
                    <td>N/A</td><td><img src="../../img/trash-alt-regular 1.png" alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/adminTematicas.blade.php ENDPATH**/ ?>