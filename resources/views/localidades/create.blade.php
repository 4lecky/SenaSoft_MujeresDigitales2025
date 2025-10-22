<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../eventos.css"> -->
    <link rel="stylesheet" href="{{ asset('sena/app/resources/css/eventos/eventos.css') }}">

</head>

<body>

    <div class="seccionForm" >

        <form action="{{ route('localidades.store') }}" class="container_form" method='POST'>
         @csrf

            <div class="campo">
                <label for="" class="label_style">Nombre del evento</label>
                <input type="text" placeholder="ingrese su numero de telefono" class="input_style" name='nombre'>

                <label for="" class="label_style">Descripción del evento</label>
                <select name="estados" id=""></select>
                <option value="General">General</option>
                <option value="Preferencial">Preferencial</option>
                <option value="VIP">VIP</option>
            </div>

            <div class="campo">
                <label for="" class="label_style">Titulo campo</label>
                <input type="datetime-local" placeholder="Fecha y hora de fin" class="input_style" name='horaFecha_inicio'>

                <label for="" class="label_style">Titulo campo</label>
                <input type="datetime-local" placeholder="ingrese su numero de telefono" class="input_style" name='horaFecha_fin'>
            </div>

            <button> Enviar </button>
        </form>

    </div>

</body>

</html>