

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('mensaje')): ?>
	<ul class="alertaUlCorrecto">
		<section class="alertaCorrecto">
			<p><?php echo e($message); ?></p>
		</section>
	</ul>
<?php endif; ?>
<section>
	<a href="/usuario/obtenerAlbum">Obtener Álbum</a>
</section>

<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Álbumes</h1>
    </section>
    <section class="articulos">
        <?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('mostrarAlbum.show', $album->id)); ?>" class="navTematicas">
                <article class="articulosTematica">
                    <img src="" alt="album">
                    <h5 class="nombreTematica"><?php echo e($album->nombreAlbum); ?></h5>
                </article>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views//usuario/mostrarAlbum.blade.php ENDPATH**/ ?>