<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Eventos</title>
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <div class="sectionIzquierda">
        <h3 class='title_principal'>Creación de Eventos</h3>

        <!-- Mostrar mensaje de éxito -->
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <!-- Mostrar errores -->
        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('eventos.store') }}" class="container_form" method="POST">
            @csrf

            <div class="campo">
                <label class="label_style">Nombre del evento</label>
                <i class="ri-disc-line"></i>
                <input type="text" placeholder="Ingrese el nombre del evento" class="input_style" name="nombre" required>

                <label class="label_style">Descripción del evento</label>
                <textarea name="descripcion" class="textA_style"></textarea>
            </div>

            <div class="campo">
                <label class="label_style">Hora y fecha de inicio</label>
                <input type="datetime-local" class="input_style" name="fecha_hora_inicio" required>

                <label class="label_style">Hora y fecha de fin</label>
                <input type="datetime-local" class="input_style" name="fecha_hora_fin" required>
            </div>

            

            <div class="containerBtn">
                <button type="submit">Enviar <i class="ri-album-fill"></i></button>
            </div>
        </form>
    </div>

    <div class="sectionDerecha">
        <img src="{{ asset('img/cassets_fondo.jpg') }}" alt="" class='img_fondo'>
    </div>

</body>
</html>
