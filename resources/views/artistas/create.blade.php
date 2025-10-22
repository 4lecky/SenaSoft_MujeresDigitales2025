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

    <div class="sectionIzquierda" >

        <h1 class='title_principal'> Registrar artistas </h1>

        <form action="{{ route('artistas.store') }}" class="container_form" method='POST'>



                <div class="campo_input">
                    <label for="" class="label_style">Nombres del artista</label>
                    <i class="ri-bard-line"></i>
                    <input type="text" placeholder="Ingrese el nombre" class="input_style" name="nombre" required>
                </div>

                <div class="campo_input">
                    <label for="" class="label_style">Apellidos del artista</label>
                    <i class="ri-sparkling-2-line"></i>
                    <input type="text" placeholder="Ingrese el apellido" class="input_style" name="apellido" required>
                </div>



                <div class="campo_input">
                    <label for="" class="label_style" name='genero_musical'>Genero musical</label>
                    <select id="miSelect" class='style_select'>
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
                        <input type="text" id="campoOtros" placeholder="Escriba su opción aquí" style="display: none;" class='input_style' class='genero_musical'>
                    </div>
                </div>

            <div class="campo_input_dos">            
                <label for="" class="label_style">Ciudad natal</label>
                <input type="text" placeholder="Ingrese la ciudad" class="input_style" name='ciudad_origen' require>
            </div>

            <div class="containerBtn">
                <button> Enviar <i class="ri-album-fill"></i></button>
            </div>
        </form>

    </div>

    <div class="sectionDerecha">

        <img src="{{ asset('img/artista_fondo.jpg') }}" alt="" class='img_fondo'>


    </div>

    <script src="{{ asset('js/artistas.js') }}"></script>
</body>
</html>