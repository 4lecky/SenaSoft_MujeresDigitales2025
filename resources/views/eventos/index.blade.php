<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.min.css">

    <!-- jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="bg-light">

<nav>
    <a href="{{ route('eventos.create') }}">Crear evento</a>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-4">Gestión de Eventos</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('eventos.create') }}" class="btn btn-primary">+ Nuevo Evento</a>
    </div>

    <div class="card shadow-sm p-4">
        <table id="tablaEventos" class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Municipios</th>
                    <th>Departamentos</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->id_eventos }}</td>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->descripcion }}</td>
                        <td>{{ $evento->municipios }}</td>
                        <td>{{ $evento->departamentos }}</td>
                        <td>{{ $evento->horaFecha_inicio }}</td>
                        <td>{{ $evento->horaFecha_fin }}</td>
                        <td>
                        <a href="{{ route('eventos.edit', ['evento' => $evento->id_eventos]) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('eventos.destroy', ['evento' => $evento->id_eventos]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este evento?')">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#tablaEventos').DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        order: [[0, 'desc']],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.1.3/i18n/es-ES.json'
        },
        responsive: true
    });
});
</script>

</body>
</html>
