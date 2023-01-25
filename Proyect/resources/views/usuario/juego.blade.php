@extends('layouts.appNavegando')

@section('content')
<section class="tematicas">
    <section class="sectionTitulo">
        <h1>Temáticas</h1>
    </section>
    <section class="sectionObtenerAlbum">
        <a href="/usuario/obtenerAlbum">Obtener Álbum</a>
    </section>
    <section class="articulos">
        @foreach($tematicas as $tematica)
            @if(!empty($tematica))
                <article class="articulosTematica">
                    <a href="{{ route('juego.show', $tematica->id) }}" class="navTematicas">
                        <img src="{{ asset('storage').'/'.$tematica->imgTematica}}" width="342px" height="172px" alt="tematica">
                        <section>
                            <h5 class="nombreTematica">{{ $tematica->nombretematica}}</h5>
                            <h6 class="h6Parte1">Álbum:</h6>
                            <h6 class="h6Parte2">{{ $tematica->nombreAlbum}}</h6>
                        </section>
                    </a>
                </article>
            @endif
        @endforeach
    </section>
</section>

@endsection