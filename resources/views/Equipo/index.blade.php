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
            <a class="btn btn-primary mt-4" href="{{ route('equipo.create') }}">Crear Nuevo Equipo</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE EQUIPO</th>
                        <th>LOGO</th>
                        <th>LOCALIDAD</th>
                        <th>FECHA CREACION</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($equipos as $equipo)
                        <tr>
                            <td>{{$equipo->id}}</td>
                            <td>{{$equipo->nom_equipo}}</td>
                            <td>{{$equipo->logo}}</td>
                            <td>{{$equipo->localidad_id}}</td>
                            <td>{{$equipo->created_at}}</td>
                            <td>
                                <a href="{{ route('equipo.show', $equipo->id) }}" class="btn btn-sm btn-success">Detalles</a>
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
