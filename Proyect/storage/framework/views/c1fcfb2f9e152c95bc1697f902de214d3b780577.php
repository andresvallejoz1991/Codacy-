

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('mensajeCromos')): ?>
    <ul class="alertaObtenerCromos">
        <section class="alertaCorrecto3">
            <img src="../../../img/confetti.png" alt="felicitacion">
            <?php if($message == 5): ?>
                <p>Felicitaciones &#128526, Haz acertado <?php echo e($message); ?> de 5 preguntas</p>
                <p>Obtienes <?php echo e($message); ?> cromos</p>
            <?php else: ?>
                <?php if($message  >= 3 && $message  < 5): ?>
                    <p>Buen Trabajo &#128512, Haz acertado <?php echo e($message); ?> de 5 preguntas</p>
                    <p>Obtienes <?php echo e($message); ?> cromos</p>
                <?php else: ?>
                    <?php if($message < 3 && $message  >= 2): ?>
                        <p>Lo Sentimos &#128528, Solo haz acertado <?php echo e($message); ?> de 5 preguntas</p>
                        <p>Obtienes <?php echo e($message); ?> cromos</p>
                    <?php else: ?>
                        <?php if($message == 1): ?>
                            <p>Lo Sentimos &#128528, Solo haz acertado <?php echo e($message); ?> de 5 preguntas</p>
                            <p>Obtienes <?php echo e($message); ?> cromo</p>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            <p>Recuerda que los cromos repetidos no se mostrarán en el álbum</p>
        </section>
    </ul>
<?php endif; ?>
<section class="sectionTitulo">
    <h1>Álbumes</h1>
</section>
<section class="sectionObtenerAlbum">
	<a href="/usuario/obtenerAlbum">Obtener Álbum</a>
</section>
<section class="mostrarAlbum">
    <section class="articulosAlbum">
        <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="articulosMostrarAlbum">
                <a href="<?php echo e(route('mostrarAlbum.show', $album->id)); ?>" class="navAlbum">
                    <img src="../../../img/mostrarAlbum.png" alt="album">
                    <section>
                        <h5 class="nombreTematica"><?php echo e($album->nombreAlbum); ?></h5>
                    </section>
                </a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/usuario/mostrarAlbum.blade.php ENDPATH**/ ?>