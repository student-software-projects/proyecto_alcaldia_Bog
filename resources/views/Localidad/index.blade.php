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
            <a class="btn btn-primary mt-4" href="{{ route('localidad.create') }}">Crear Nueva Localidad</a>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Localidad</th>
                        <th>Fecha Creacion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localidades as $localidad)
                        <tr>
                            <td>{{$localidad->id}}</td>
                            <td>{{$localidad->localidad}}</td>
                            <td>{{$localidad->created_at}}</td>
                            <td>
                                <a href="{{ route('localidad.show', $localidad->id) }}" class="btn btn-sm btn-success">Detalles</a>
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

