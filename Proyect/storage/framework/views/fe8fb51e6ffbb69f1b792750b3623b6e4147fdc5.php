

<?php $__env->startSection('content'); ?>
<br>
<br>
<br>

<section class="home">
    <section class="slider">
        <div class="slide active" style="background-image: url('<?php echo e(asset('img/Frame1.png')); ?>')">     
        </div>
        <div class="slide" style="background-image: url('<?php echo e(asset('img/Frame2.png')); ?>')"> 
        </div>
        <div class="slide" style="background-image: url('<?php echo e(asset('img/Frame3.png')); ?>')">
        </div>
    </section>

    <!-- controls  -->
    <section class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
    </section>

    <!-- indicators -->
    <section class="indicator">
    </section>

</section>


<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="articulos">
        <?php $__currentLoopData = $tematicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tematica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="articulosTematica">
                <img src="<?php echo e(asset('storage').'/'.$tematica->imgTematica); ?>" width="342px" height="172px" alt="tematica">
                <h5 class="nombreTematica"><?php echo e($tematica->nombretematica); ?></h5>
                <h6 class="h6Parte1">Álbum:</h6>
                <h6 class="h6Parte2"><?php echo e($tematica->nombreAlbum); ?></h6>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<script src="../../js/slider.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/welcome.blade.php ENDPATH**/ ?>