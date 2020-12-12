<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <form action="{{route('equipo.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom_equipo"><h5>Nombre del Equipo</h5></label>
                    <input name="nom_equipo" id="nom_equipo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="logo"><h5>Logo</h5></label>
                    <input name="logo" id="logo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="localidad_id"><h5>Localidad</h5></label>
                    <input name="localidad_id" id="localidad_id" type="id" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Guardar Nuevo Equipo</button>
                <a class="btn btn-success" href="{{ route('equipo.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
