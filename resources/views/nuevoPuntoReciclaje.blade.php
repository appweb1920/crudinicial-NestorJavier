<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Alta Puntos Reciclaje</title>
</head>
<body>
    <h1 class="h1" style="width:60vw; margin: 15vh auto 2vh auto;">Alta Puntos Reciclaje</h1>
    
    <form action="/public/puntosReciclaje" method="POST" style="width:60vw; margin: 0 auto 0 auto;">
        @csrf
        <div class="form-group">
            <label>Tipo de basura</label>
            <br>
            <input type="text" name="tipobasura">
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <br>
            <input type="text" name="direccion">
        </div>
        <div class="form-group">
            <label>Apertura</label>
            <br>
            <input type="text" name="apertura">
        </div>
        <div class="form-group">
            <label>Cierre</label>
            <br>
            <input type="text" name="cierre">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>