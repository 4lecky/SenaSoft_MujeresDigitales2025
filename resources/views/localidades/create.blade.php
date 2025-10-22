<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../eventos.css"> -->
    <link rel="stylesheet" href="{{ asset('css/localidades.css') }}">
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">


</head>

<body>

    <div class="sectionIzquierda" >

        <h1 class='title_principal'> Crear localidad </h1>

        <form action="{{ route('localidades.store') }}" class="container_form" method='POST'>
         @csrf

            <div class="campo">
                <label for="" class="label_style">Nombre del localidad</label>
                <i class="ri-map-pin-2-line"></i>
                <input type="text" placeholder="Ingrese la localidad" class="input_style" name='nombre'>

                <label for="" class="label_style" >Descripción del evento</label>
                    <select name="estados" id="" class='style_select'>
                    <option value="">Seleccione una opción</option>
                    <option value="General">General</option>
                    <option value="Preferencial">Preferencial</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>

            <button> Enviar </button>
        </form>

    </div>

    <div class="sectionDerecha">

        <img src="{{ asset('img/discos_fondo.jpg') }}" alt="" class='img_fondo'>


    </div>

</body>

</html>