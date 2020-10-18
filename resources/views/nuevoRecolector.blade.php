<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Recolector</title>
</head>
<body>
    <h1>Alta Recolector</h1>
    
    <form action="/public/recolector" method="POST">
        @csrf
        <p>Nombre</p>
        <input type="text" name="nombre">
        <p>Dias Recolección</p>
        <input type="text" name="dias_recoleccion">
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>