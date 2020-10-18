<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Recolector</title>
</head>
<body>
    <h1>Edita Recolector</h1>
    @if(!is_null($recol))
        <form action="/public/recolector/actualiza" method="POST">
            @csrf
            <p>Nombre</p>
            <input type="text" name="nombre" value="{{$recol->nombre}}">
            <p>Dias recolección</p>
            <input type="text" name="dias_recoleccion" value="{{$recol->dias_recoleccion}}">
            <input type="hidden" name="id" value="{{$recol->id}}">
            <br>
            <br>
            <button type="submit">Actualiza</button>
        </form>
    @endif

</body>
</html>