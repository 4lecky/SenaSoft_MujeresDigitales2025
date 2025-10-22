<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../eventos.css"> -->
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">

</head>

<body>

    <div class="seccionForm" >

        <form action="{{ route('localidades.store') }}" class="container_form" method='POST'>
         @csrf

            <div class="campo">
                <label for="" class="label_style">Nombre del localidad</label>
                <input type="text" placeholder="ingrese el nombre de la localidad" class="input_style" name='nombre'>

                <label for="" class="label_style" >Descripción del evento</label>
                    <select name="estados" id="">
                    <option value="">Seleccione una opción</option>
                    <option value="General">General</option>
                    <option value="Preferencial">Preferencial</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>

            <button> Enviar </button>
        </form>

    </div>

</body>

</html>