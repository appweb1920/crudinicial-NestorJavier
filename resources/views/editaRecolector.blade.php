<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edita Recolector</title>
</head>
<body>
    <h1 class="h1" style="width:60vw; margin: 15vh auto 2vh auto;">Edita Recolector</h1>
    @if(!is_null($recol))
        <form action="/public/recolector/actualiza" method="POST" style="width:60vw; margin: 0 auto 0 auto;">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <br>
                <input type="text" name="nombre" value="{{$recol->nombre}}">
            </div>
            <div class="form-group">
                <label>Dias recolección</label>
                <br>
                <input type="text" name="dias_recoleccion" value="{{$recol->dias_recoleccion}}">
            </div>
            <input type="hidden" name="id" value="{{$recol->id}}">
            <br>
            <button type="submit" class="btn btn-primary">Actualiza</button>
        </form>
    @endif

</body>
</html>