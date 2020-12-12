<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>INDEX</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-4" href="{{ route('jugador.create') }}">Crear Nuevo Jugador</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Numero de Camisa</th>
                        <th>Apodo</th>
                        <th>Equipo</th>
                        <th>Fecha Creacion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jugadores as $jugador)
                        <tr>
                            <td>{{$jugador->id}}</td>
                            <td>{{$jugador->apellidos}}</td>
                            <td>{{$jugador->nombres}}</td>
                            <td>{{$jugador->numcamisa}}</td>
                            <td>{{$jugador->apodo}}</td>
                            <td>{{$jugador->equipo_id}}</td>
                            <td>{{$jugador->created_at}}</td>
                            <td>
                                <a href="{{ route('jugador.show', $jugador->id) }}" class="btn btn-sm btn-success">Detalles</a>
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

