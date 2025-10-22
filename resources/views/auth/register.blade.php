<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/usuarios.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

<div class="sectionIzquierda">
    <h1 class="title_principal">Registrar Usuario</h1>

    <!-- Mensajes de errores -->
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de registro -->
    <form action="{{ route('register') }}" method="POST" class="container_form">
        @csrf

        <div class="campo_input">
            <label class="label_style">Nombre</label>
            <i class="ri-user-line"></i>
            <input type="text" name="nombre" class="input_style" placeholder="Ingrese su nombre" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Apellido</label>
            <i class="ri-user-line"></i>
            <input type="text" name="apellido" class="input_style" placeholder="Ingrese su apellido" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Tipo de documento</label>
            <input type="text" name="tipo_documento" class="input_style" placeholder="Ej: CC, TI" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Número de documento</label>
            <input type="text" name="numero_documento" class="input_style" placeholder="Ingrese su número" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Correo electrónico</label>
            <input type="email" name="email" class="input_style" placeholder="Ingrese su correo" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Teléfono (opcional)</label>
            <input type="text" name="telefono" class="input_style" placeholder="Ingrese su teléfono">
        </div>

        <div class="campo_input">
            <label class="label_style">Rol</label>
            <select name="role" class="style_select" required>
                <option value="">Seleccione un rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
                <option value="Comprador">Comprador</option>
            </select>
        </div>

        <div class="campo_input">
            <label class="label_style">Contraseña</label>
            <input type="password" name="password" class="input_style" placeholder="Ingrese su contraseña" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="input_style" placeholder="Repita su contraseña" required>
        </div>

        <div class="containerBtn">
            <button type="submit">Registrar <i class="ri-user-add-line"></i></button>
        </div>
    </form>
</div>

<div class="sectionDerecha">
    <img src="{{ asset('img/usuarios_fondo.jpg') }}" alt="" class="img_fondo">
</div>

</body>
</html>
