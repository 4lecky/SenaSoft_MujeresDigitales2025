<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/artistas.css') }}">
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

<div class="sectionIzquierda">

    <h1 class='title_principal'> Registrar artistas </h1>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <!-- Mostrar errores -->
    @if($errors->any())
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('artistas.store') }}" class="container_form" method="POST">
        @csrf <!-- Evita error 419 -->

        <div class="campo_input">
            <label class="label_style">Nombres del artista</label>
            <i class="ri-bard-line"></i>
            <input type="text" placeholder="Ingrese el nombre" class="input_style" name="nombre" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Apellidos del artista</label>
            <i class="ri-sparkling-2-line"></i>
            <input type="text" placeholder="Ingrese el apellido" class="input_style" name="apellido" required>
        </div>

        <div class="campo_input">
            <label class="label_style">Genero musical</label>
            <select id="miSelect" class="style_select" name="genero_musical" required>
                <option value="">Seleccione una opción</option>
                <option value="Rap">Rap</option>
                <option value="Trap">Trap</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Regueton">Regueton</option>
                <option value="Salsa">Salsa</option>
                <option value="Bachata">Bachata</option>
                <option value="otros">Otro</option>
            </select>
            <div id="divOtros">
                <input type="text" id="campoOtros" placeholder="Escriba su opción aquí" style="display:none;" class="input_style">
            </div>
        </div>

        <div class="campo_input_dos">
            <label class="label_style">Ciudad natal</label>
            <input type="text" placeholder="Ingrese la ciudad" class="input_style" name="ciudad_origen" required>
        </div>

        <div class="containerBtn">
            <button type="submit"> Enviar <i class="ri-album-fill"></i></button>
        </div>
    </form>

</div>

<div class="sectionDerecha">
    <img src="{{ asset('img/artista_fondo.jpg') }}" alt="" class="img_fondo">
</div>

<script>
    // Mostrar campo "otros" y enviar correctamente
    const select = document.getElementById('miSelect');
    const campoOtros = document.getElementById('campoOtros');

    select.addEventListener('change', function () {
        if (this.value === 'otros') {
            campoOtros.style.display = 'block';
            campoOtros.name = 'genero_musical';
            select.removeAttribute('name');
        } else {
            campoOtros.style.display = 'none';
            campoOtros.removeAttribute('name');
            select.name = 'genero_musical';
        }
    });
</script>

</body>
</html>
