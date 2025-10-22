<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Eventos</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        p {
            font-size: 1.1rem;
            color: #f1f1f1;
        }

        .botones {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        a {
            text-decoration: none;
            color: white;
            background: #ffffff20;
            border: 2px solid #fff;
            padding: 15px 25px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        a:hover {
            background: #fff;
            color: #764ba2;
            transform: scale(1.05);
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 0.9rem;
            color: #eaeaea;
        }

        /* Tarjeta central */
        .contenedor {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 3rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <div class="logo">🎉</div>
        <header>
            <h1>Sistema de Gestión de Eventos</h1>
            <p>Administra tus eventos, artistas y boletas de forma rápida y eficiente</p>
        </header>

        <div class="botones">
            <a href="{{ url('eventos') }}">🎊 Eventos</a>
            <a href="{{ url('boletas') }}">🎟️ Boletas</a>
            <a href="{{ url('localidades') }}">🏟️ Localidades</a>
            <a href="{{ url('artistas') }}">🎤 Artistas</a>
            <a href="{{ url('usuarios') }}">👥 Usuarios</a>
            <a href="{{ url('consultar-eventos') }}">🔍 Consultar Eventos</a>
        </div>
    </div>

    <footer>
        © 2025 Sistema de Eventos | Desarrollado por Darly 💜
    </footer>

</body>
</html>
