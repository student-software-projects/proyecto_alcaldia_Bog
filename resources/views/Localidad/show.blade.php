<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>show</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre Localidad</th>
                        <td>{{$localidad->localidad}}</td>
                    </tr>
                    <tr>
                        <th>Fecha Creación</th>
                        <td>{{$localidad->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Fecha Actualización</th>
                        <td>{{$localidad->updated_at}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
