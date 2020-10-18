<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Puntos Reciclaje</title>
</head>
<body>
    <h1>Muestra Puntos Reciclaje</h1>
    <a href="/public/puntosReciclaje/create">Crea Punto</a>

    <table>
        <tr>
            <th>Tipo de basura</th>
            <th>Dirección</th>
            <th>Apertura</th>
            <th>Cierre</th>
        </tr>
        @if(!is_null($datos))
            @foreach($datos as $d)
                <tr>
                    <td>{{$d->tipo_basura}}</td>
                    <td>{{$d->direccion}}</td>
                    <td>{{$d->horario_apertura}}</td>
                    <td>{{$d->horario_cierre}}</td>
                    <td><a href="/public/puntosReciclaje/{{$d->id}}">Edita</a></td>
                    <td><a href="/public/puntosReciclaje/elimina/{{$d->id}}">Elimina</a></td>
                </tr>
            @endforeach
        @endif
    </table>
   
</body>
</html>