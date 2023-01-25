

<?php $__env->startSection('content'); ?>
<section class="contenidoHomeAdmin">
    <p class="titulo1">Usuarios de la Página</p>
    <article class="informacionUsers">
        <div class="titulo2">Administradores</div>
        <div class="apartado1">
            <img src="../../img/user-shield-solid 1.png" alt="contador administradores">
        </div>
        <div class="apartado2">
            <p class="apartado2_1"><?php echo e($userAdministrador->count()); ?></p>
            <p class="apartado2_2">Registrados</p>
        </div>
    </article>
    <article class="informacionUsers">
        <div class="titulo2">Usuarios</div>
        <div class="apartado1">
            <img src="../../img/restroom-solid 1.png" alt="contador usuarios normales">
        </div>
        <div class="apartado2">
            <p class="apartado2_1"><?php echo e($userNormal->count()); ?></p>
            <p class="apartado2_2">Registrados</p>
        </div>
    </article>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/homeAdmin.blade.php ENDPATH**/ ?>