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
            <form action="{{route('localidad.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="localidad"><h5>Nombre de la Localidad</h5></label>
                    <input name="localidad" id="localidad" type="text" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Guardar Nueva Localidad</button>
                <a class="btn btn-success" href="{{ route('localidad.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
