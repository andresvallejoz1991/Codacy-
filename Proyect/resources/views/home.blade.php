@extends('layouts.appNavegando')

@section('content')
<br><br><br><br><br><br>

<section class="home">
    <section class="slider">
        <div class="slide active" style="background-image: url('{{ asset('img/Frame4.png')}}')">     
        </div>
        <div class="slide" style="background-image: url('{{ asset('img/Frame5.png')}}')"> 
        </div>
        <div class="slide" style="background-image: url('{{ asset('img/Frame6.png')}}')">
        </div>
        <div class="slide" style="background-image: url('{{ asset('img/Frame7.png')}}')">
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
        @foreach($tematicas as $tematica)
            <article class="articulosTematica">
                <a href="/usuario/juego" class="navTematicas">
                    <img src="{{ asset('storage').'/'.$tematica->imgTematica}}" width="342px" height="172px" alt="tematica">
                    <section>
                        <h5 class="nombreTematica">{{ $tematica->nombretematica}}</h5>
                        <h6 class="h6Parte1">Álbum:</h6>
                        <h6 class="h6Parte2">{{ $tematica->nombreAlbum}}</h6>
                    </section>
                </a>
            </article>
        @endforeach
    </section>
</section>
<script src="../../js/slider.js"></script>
@endsection