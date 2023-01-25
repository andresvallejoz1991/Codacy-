@extends('layouts.appNavegando')

@section('content')
@if ($errors->any())
    <ul class="alertaU2">
        <section class="alerta2">
            @foreach($errors->all() as $error)
                <li class="alertaLi2">{{ $error }}</li>
            @endforeach
        </section>
    </ul>
@endif
<div class="ventanaObtenerAlbum">
    <div class="obtenerAlbumTitulo">
        <img src="../../../img/book-reader-solid 1.png" alt="registrarse">
        Obtener Álbum
    </div>
    <div class="">
        <form method="POST" action="{{ route('mostrarAlbum.store')  }}">
            @csrf

            <div class="obtenerAlbum">
                <label for="id_album" class="labelObtenerAlbum">Álbum</label>
                <section class="sectionSelectObtenerAlbum">
                    <select name="id_album" id="id_album">
                        <option value="">Selecciona un Álbum..</option>
                        @foreach($albums as $album)
                                <option value="{{ $album -> id }}" {{ $album->id == '{$album -> id' ? 'selected' : ''}}}>
                                {{ $album -> nombreAlbum }}</option>
                        @endforeach
                    </select>
                </section>
            </div>

            <div class="botonObtenerAlbum">
                <button type="submit" class="">
                    Obtener
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
