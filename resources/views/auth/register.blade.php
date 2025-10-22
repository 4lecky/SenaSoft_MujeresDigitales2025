<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <div class="register-container">
        <div class="register-box">
            <h2>Crear cuenta</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="input-group">
                    <label for="name">Nombre completo</label>
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="input-field" />
                    <x-input-error :messages="$errors->get('name')" class="error" />
                </div>

                <!-- Correo -->
                <div class="input-group">
                    <label for="email">Correo electrónico</label>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="input-field" />
                    <x-input-error :messages="$errors->get('email')" class="error" />
                </div>

                <!-- Contraseña -->
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="input-field" />
                    <x-input-error :messages="$errors->get('password')" class="error" />
                </div>

                <!-- Confirmar contraseña -->
                <div class="input-group">
                    <label for="password_confirmation">Confirmar contraseña</label>
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input-field" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
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
    </div>
</x-guest-layout>
