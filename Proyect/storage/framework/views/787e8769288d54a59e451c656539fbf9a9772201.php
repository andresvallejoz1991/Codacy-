

<?php $__env->startSection('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="formatoQuiz">
    <h2 class="tituloQuiz">Quiz</h2>
    <?php 
        $contador = 1;  
    ?>

    <form action="<?php echo e(route('test.store')); ?>" name="quiz"  id="myquiz" class="quiz">
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="primerBorde">
                <article class="segundoBorde">
                    <h3><?php echo e($pregunta->descripcion); ?></h3>
                    <div class="opcion<?php echo e($contador); ?>">
                        <label class="containerQuiz">
                            <input type="radio" value="v1" name="question[<?php echo e($pregunta->descripcion); ?>]" class="inputQuizz" required>
                            <span class="checkmark"></span> <?php echo e($pregunta->opcion1); ?>

                        </label>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <label class="containerQuiz">
                            <input type="radio" value="v2" name="question[<?php echo e($pregunta->descripcion); ?>]" class="inputQuizz" required>
                            <span class="checkmark"></span><?php echo e($pregunta->opcion2); ?>

                        </label>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <label class="containerQuiz">
                            <input type="radio" value="v3" name="question[<?php echo e($pregunta->descripcion); ?>]" class="inputQuizz" required>
                            <span class="checkmark"></span> <?php echo e($pregunta->opcion3); ?>

                        </label>
                    </div>
                    <div class="opcion<?php echo e($contador); ?>">
                        <label class="containerQuiz">
                            <input type="radio" value="v4" name="question[<?php echo e($pregunta->descripcion); ?>]" class="inputQuizz" required>
                            <span class="checkmark"></span> <?php echo e($pregunta->opcion4); ?>

                        </label>
                    </div>
                        <input type="hidden" name="nPregunta" id="nPregunta" value="<?php echo e($contador); ?>">
                        <input type="hidden" name="valorTematica" id="valorTematica" value="<?php echo e($tematica->id); ?>"> 
                    </article>
            </article>
            <?php 
                $contador = $contador+1; 
            ?>
            <?php if($contador == 6): ?>
                <?php break; ?>
            <?php endif; ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <section class="apartadoFinal">
            <article class="apartadoTiempo">
                <div id="status"></div>
            </article>
            <article class="apartadoBotonQuiz">
                <button type="submit" name="submitbutton" class="btn btn-success m-auto" id="mensajeResultado">Finalizar</button>
            </article>
        </section>
    </form>
    <script>
        for (var i = 1; i<= 10; i++) {
            var cr = $(".opcion"+i);
            for(var j = 0; j < cr.length; j++){
                var ramdom = Math.floor(Math.random() * cr.length -1) + 1;
                var ramdom2 = Math.floor(Math.random() * cr.length -1) +1;
                cr.eq(ramdom).before(cr.eq(ramdom2));
            } 
        }
    </script>
    <script>
        function countDown(secs, elem) {
            var elemento = document.getElementById(elem);
            if((secs/60) < 1){
                elemento.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs) % 60 )+"</b> segundos </h3>";  
            } else if (secs >= 60 && secs < 120){
                elemento.innerHTML = "<h3>Te queda <b>"+Math.floor( (secs/60) % 60 )+ "</b> minuto <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>" 
            } else {
                elemento.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs/60) % 60 )+ "</b> minutos <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>";  
            }

            if(secs < 1) {
                document.quiz.submit();
            }
            else {
                secs--;
                setTimeout('countDown('+secs+',"'+elem+'")',1000);
            }
        }
    </script> 
    <script type="text/javascript">countDown( <?php echo 100  ?> ,"status");</script>
    <script>
        document.getElementById('mensajeResultado').onclick = function(){
            alert('Tus cromos se guardaron en el álbum');
        }
    </script>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/usuario/quiz.blade.php ENDPATH**/ ?>