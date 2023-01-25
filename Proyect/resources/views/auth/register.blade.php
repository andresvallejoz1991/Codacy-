@extends('layouts.appInicio')

@section('content')
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
            <img src="../../img/usuario (1) 1.png" alt="registrarse">
            Registro
        </div>
        <div class="">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="reg2">
                    <label for="name" class="labelInicio">{{ __('Nombre') }}</label>

                    <div class="reg4">
                        <input id="name" type="text" class="inputInicio" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese nombre">
                        <br>
                        @error('name')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="reg3">
                    <label for="email" class="labelInicio">{{ __('Dirección de Correo') }}</label>

                    <div class="reg4">
                        <input id="email" type="email" class="inputInicio" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese su correo">
                        <br>
                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="reg5">
                    <label for="password" class="labelInicio">{{ __('Contraseña') }}</label>

                    <div class="reg6">
                        <input id="password" type="password" class="inputInicio" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">
                        <br>
                        @error('password')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="reg7">
                    <label for="password-confirm" class="labelInicio">{{ __('Confirmar Contraseña') }}</label>

                    <div class="reg8">
                        <input id="password-confirm" type="password" class="inputInicio" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                    </div>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
