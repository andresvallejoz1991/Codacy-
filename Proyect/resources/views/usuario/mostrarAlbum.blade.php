@extends('layouts.appNavegando')

@section('content')
@if ($message = Session::get('mensajeCromos'))
    <ul class="alertaObtenerCromos">
        <section class="alertaCorrecto3">
            <img src="../../../img/confetti.png" alt="felicitacion">
            @if($message == 5)
                <p>Felicitaciones &#128526, Haz acertado {{ $message }} de 5 preguntas</p>
                <p>Obtienes {{ $message }} cromos</p>
            @else
                @if($message  >= 3 && $message  < 5)
                    <p>Buen Trabajo &#128512, Haz acertado {{ $message }} de 5 preguntas</p>
                    <p>Obtienes {{ $message }} cromos</p>
                @else
                    @if($message < 3 && $message  >= 2)
                        <p>Lo Sentimos &#128528, Solo haz acertado {{ $message }} de 5 preguntas</p>
                        <p>Obtienes {{ $message }} cromos</p>
                    @else
                        @if($message == 1)
                            <p>Lo Sentimos &#128528, Solo haz acertado {{ $message }} de 5 preguntas</p>
                            <p>Obtienes {{ $message }} cromo</p>
                        @endif
                    @endif
                @endif
            @endif
            <p>Recuerda que los cromos repetidos no se mostrarán en el álbum</p>
        </section>
    </ul>
@endif
<section class="sectionTitulo">
    <h1>Álbumes</h1>
</section>
<section class="sectionObtenerAlbum">
	<a href="/usuario/obtenerAlbum">Obtener Álbum</a>
</section>
<section class="mostrarAlbum">
    <section class="articulosAlbum">
        @foreach($albumes as $album)
            <article class="articulosMostrarAlbum">
                <a href="{{ route('mostrarAlbum.show', $album->id) }}" class="navAlbum">
                    <img src="../../../img/mostrarAlbum.png" alt="album">
                    <section>
                        <h5 class="nombreTematica">{{ $album->nombreAlbum}}</h5>
                    </section>
                </a>
            </article>
        @endforeach
    </section>
</section>

@endsection