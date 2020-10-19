<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edita Puntos Reciclaje</title>
</head>
<body>
    <h1 class="h1" style="width:60vw; margin: 15vh auto 2vh auto;">Edita Puntos Reciclaje</h1>
    @if(!is_null($punto))
        <form action="/public/puntosReciclaje/actualiza" method="POST" style="width:60vw; margin: 0 auto 0 auto;">
            @csrf
            <div class="form-group">
                <label>Tipo de basura</label>
                <input type="text" class="form-control" name="tipobasura" value="{{$punto->tipo_basura}}">
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" value="{{$punto->direccion}}">
            </div>
            <div class="form-group">
                <label>Apertura</label>
                <input type="text" class="form-control" name="apertura" value="{{$punto->horario_apertura}}">
            </div>
            <div class="form-group">
                <label>Cierre</label>
                <input type="text" class="form-control" name="cierre" value="{{$punto->horario_cierre}}">
            </div>
            <input type="hidden" name="id" value="{{$punto->id}}">
            <br>
            <button type="submit" class="btn btn-primary">Actualiza</button>
        </form>
    @endif

</body>
</html>