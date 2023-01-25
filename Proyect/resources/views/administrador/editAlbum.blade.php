@extends('layouts.appAdmin')

@section('content')
<section class="contenidoAdmin">
    @if ($errors->any())
        <ul class="alertaUl">
            <section class="alerta">
                @foreach($errors->all() as $error)
                    <li class="alertaLi">{{ $error }}</li>
                @endforeach
            </section>
        </ul>
    @endif
    @if ($message = Session::get('mensaje'))
        <ul class="alertaUlCorrecto">
            <section class="alertaCorrecto">
                <p>{{ $message }}</p>
            </section>
        </ul>
    @endif
    <p class="formularioTituloEdit">Editar Álbum {{ $adminAlbum->nombreAlbum }}</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminAlbum.update', $adminAlbum->id) }}">
                @csrf
                @method('PUT')
                <br>
                <div class="">
                    <input id="nombreAlbum" type="text" class="formularioInputDos" name="nombreAlbum" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $adminAlbum->nombreAlbum }}" required autocomplete="nombreAlbum">
                    <label for="nombreAlbum" class="formularioLabelDos">Nombre</label>
                </div>
                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
@endsection