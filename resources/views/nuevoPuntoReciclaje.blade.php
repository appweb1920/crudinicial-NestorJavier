<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Puntos Reciclaje</title>
</head>
<body>
    <h1>Alta Puntos Reciclaje</h1>
    
    <form action="/public/puntosReciclaje" method="POST">
        @csrf
        <p>Tipo de basura</p>
        <input type="text" name="tipobasura">
        <p>Dirección</p>
        <input type="text" name="direccion">
        <p>Apertura</p>
        <input type="text" name="apertura">
        <p>Cierre</p>
        <input type="text" name="cierre">
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>