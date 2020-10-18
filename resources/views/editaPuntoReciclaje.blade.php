<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Puntos Reciclaje</title>
</head>
<body>
    <h1>Edita Puntos Reciclaje</h1>
    @if(!is_null($punto))
        <form action="/public/puntosReciclaje/actualiza" method="POST">
            @csrf
            <p>Tipo de basura</p>
            <input type="text" name="tipobasura" value="{{$punto->tipo_basura}}">
            <p>Dirección</p>
            <input type="text" name="direccion" value="{{$punto->direccion}}">
            <p>Apertura</p>
            <input type="text" name="apertura" value="{{$punto->horario_apertura}}">
            <p>Cierre</p>
            <input type="text" name="cierre" value="{{$punto->horario_cierre}}">
            <input type="hidden" name="id" value="{{$punto->id}}">
            <br>
            <br>
            <button type="submit">Actualiza</button>
        </form>
    @endif

</body>
</html>