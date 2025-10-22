
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">
</head>
<body>
    <div class="main-container">
        {{ $slot }}
    </div>
</body>
</html>

