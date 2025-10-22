<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    
        <div class="register-box">
            <h2>Crear cuenta</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="fila">
                    <div class="input-group">
                        <label for="name">Nombres <strong style="color:red">*</strong></label>
                        <x-text-input id="nombre" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" class="input-field" />
                        <x-input-error :messages="$errors->get('nombre')" class="error" />
                    </div>

                    <div class="input-group">
                        <label for="apellido">Apellidos <strong style="color:red">*</strong></label>
                        <x-text-input id="apellido" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" class="input-field" />
                        <x-input-error :messages="$errors->get('apellido')" class="error" />
                    </div>
                </div>

                <div class="fila">

                    <div class="input-group">
                        <label for="numero_documento">Numero de documento <strong style="color:red">*</strong></label>
                        <x-text-input id="numero_documento" type="number" name="numero_documento" :value="old('numero_documento')" required autofocus autocomplete="name" class="input-field" />
                        <x-input-error :messages="$errors->get('numero_documento')" class="error" />
                    </div>

                    <div class="input-group">
                        <label for="tipo_documento">Tipo de documento <strong style="color:red">*</strong></label>
                        <select id="tipo_documento" name="tipo_documento" class="select_documentos" name='tipo_documento' required>
                            <option value="">Seleccione una opción</option>
                            <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cédula de extranjería">Cédula de extranjería</option>
                            <option value="Permiso especial de permanencia">Permiso especial de permanencia</option>
                        </select>
                        <x-input-error :messages="$errors->get('tipo_documento')" class="error" />
                    </div>

                </div>

                <div class="fila">
                    <!-- Correo -->
                    <div class="input-group">
                        <label for="correo">Correo electrónico <strong style="color:red">*</strong></label>
                        <x-text-input id="correo" type="email" name="correo" :value="old('correo')" required class="input-field" />
                        <x-input-error :messages="$errors->get('correo')" class="error" />
                    </div>

                    <div class="input-group">
                        <label for="telefono">Telefono <strong style="color:red">*</strong></label>
                        <x-text-input id="telefono" type="phone" name="telefono" :value="old('telefono')" required class="input-field" />
                        <x-input-error :messages="$errors->get('telefono')" class="error" />
                    </div>
                </div>


                <div class="fila">
                    <!-- Contraseña -->
                    <div class="input-group">
                        <label for="password">Contraseña <strong style="color:red">*</strong></label>
                        <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="input-field" />
                        <x-input-error :messages="$errors->get('password')" class="error" />
                    </div>

                    <!-- Confirmar contraseña -->
                    <div class="input-group">
                        <label for="password_confirmation">Confirmar contraseña  <strong style="color:red">*</strong></label>
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input-field" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                    </div>
                </div>

                <!-- Botones -->
                <div class="form-actions">
                    <a href="{{ route('login') }}" class="link">¿Ya tienes cuenta?</a>
                    <x-primary-button class="btn-register">
                        Registrarse
                    </x-primary-button>
                </div>
            </form>
        </div>

</x-guest-layout>
