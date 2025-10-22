<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <div class="sectionIzquierda" >

        <h3 class='title_principal'> Creación de eventos </h3>

        <form action="{{ route('eventos.store') }}" class="container_form" method='POST'>

            <div class="campo">
                <label for="" class="label_style">Nombre del evento</label>
                <i class="ri-disc-line"></i>
                <input type="text" placeholder="Ingrese el nombre del evento" class="input_style" name='nombre' require>

                <label for="" class="label_style">Descripción del evento</label>
                <textarea name="descripcion" id="" class="textA_style"></textarea>
                <!-- <input type="text" placeholder="ingrese su numero de telefono" class="input_style"> -->
            </div>

            <div class="campo">
                <label for="" class="label_style">Hora y fecha de incio</label>
                <input type="datetime-local" placeholder="Fecha y hora de fin" class="input_style" name='fecha_hora_inicio' require>

                <label for="" class="label_style">Hora y fecha de incio</label>
                <input type="datetime-local" placeholder="ingrese su numero de telefono" class="input_style" name='fecha_hora_fin' require>
            </div>

            <div class="containerBtn">
                <button> Enviar <i class="ri-album-fill"></i></button>
            </div>
        </form>

    </div>

    <div class="sectionDerecha">

        <img src="{{ asset('img/cassets_fondo.jpg') }}" alt="" class='img_fondo'>


    </div>

</body>

</html>