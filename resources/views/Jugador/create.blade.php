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
            <form action="{{route('jugador.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="apellidos"><h5>Apellidos completos del Jugador</h5></label>
                    <input name="apellidos" id="apellidos" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombres"><h5>Nombres completos del Jugador</h5></label>
                    <input name="nombres" id="nombres" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="numcamisa"><h5>Numero de la Camiseta</h5></label>
                    <input name="numcamisa" id="numcamisa" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apodo"><h5>Apodo del Jugador</h5></label>
                    <input name="apodo" id="apodo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="equipo_id"><h5>Equipo</h5></label>
                    <input name="equipo_id" id="equipo_id" type="id" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Guardar Nuevo Jugador</button>
                <a class="btn btn-success" href="{{ route('jugador.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
