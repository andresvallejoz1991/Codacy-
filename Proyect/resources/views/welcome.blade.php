@extends('layouts.appInicio')

@section('content')
<br>
<br>
<br>

<section class="home">
    <section class="slider">
        <div class="slide active" style="background-image: url('{{ asset('img/Frame1.png')}}')">     
        </div>
        <div class="slide" style="background-image: url('{{ asset('img/Frame2.png')}}')"> 
        </div>
        <div class="slide" style="background-image: url('{{ asset('img/Frame3.png')}}')">
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
                <img src="{{ asset('storage').'/'.$tematica->imgTematica}}" width="342px" height="172px" alt="tematica">
                <h5 class="nombreTematica">{{ $tematica->nombretematica}}</h5>
                <h6 class="h6Parte1">Álbum:</h6>
                <h6 class="h6Parte2">{{ $tematica->nombreAlbum}}</h6>
            </article>
        @endforeach
    </section>
</section>

<script src="../../js/slider.js"></script>
@endsection