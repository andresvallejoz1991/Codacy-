@extends('layouts.appNavegando')

@section('content')
<br>
@if ($errors->any())
    <ul class="alertaUl">
        <section class="alerta">
            @foreach($errors->all() as $error)
                <li class="alertaLi">{{ $error }}</li>
            @endforeach
        </section>
    </ul>
@endif
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
            <img src="../../img/usuario (1) 1.png" alt="registrarse">
                Editar Datos</div>
        <div class="">
            <form method="POST" action="{{ route('home.update', $home->id) }}">
                @csrf
                @method('PUT')
                <div class="reg2">
                    <label for="name" class="labelInicio">{{ __('Nombre') }}</label>

                    <div class="reg4">
                        <input id="name" type="text" class="inputInicio" name="name" value="{{ $home->name }}" required autocomplete="name" autofocus placeholder="Ingrese nombre">
                    </div>
                </div>

                <div class="reg3">
                    <label for="email" class="labelInicio">{{ __('Dirección de Correo') }}</label>

                    <div class="reg4">
                        <input id="email" type="email" class="inputInicio" name="email" value="{{ $home->email }}" required autocomplete="email" placeholder="Ingrese su correo">
                    </div>
                </div>

                <div class="reg5">
                    <label for="password" class="labelInicio">{{ __('Password') }}</label>

                    <div class="reg6">
                        <input id="password" type="password" class="inputInicio" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">
                    </div>
                </div>

                <div class="reg7">
                    <label for="password-confirm" class="labelInicio">{{ __('Confirm Password') }}</label>

                    <div class="reg8">
                        <input id="password-confirm" type="password" class="inputInicio" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                    </div>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
