<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>puntosReciclaje</title>
</head>
<body>
    <h1>puntosReciclaje</h1>
    
    <form action="/puntosReciclaje" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="submit">
    </form>
    @if(!is_null($datos))
        @foreach($datos as $d)
            <p>{{$d->nombre}} {{$d->apellido}}</p>
            <a href="/materia/crea/{{$d->id}}">Ver Materias</a>
        @endforeach
    @endif
</body>
</html>