

<?php $__env->startSection('content'); ?>
<section class="contenidoAdmin">
    <p class="formularioTitulo">Cargar Cromo</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="">
                    <p class="subirImg">Subir Imagen</p>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="" required autocomplete="imgCromo">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInput" name="nombreCromo" value="" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabel">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Descripción</label>
                </div>

                <div class="">
                    <input id="tematica" type="text" class="formularioInput" name="tematica" required autocomplete="tematica">
                    <label for="tematica" class="formularioLabel">Tematica</label>
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
    <script src="../../js/form.js"></script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Proyect\resources\views/uploadCromos.blade.php ENDPATH**/ ?>