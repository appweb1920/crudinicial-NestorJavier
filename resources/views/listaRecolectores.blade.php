<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Recolectores</title>
</head>
<body>
    <h1>Muestra Recolectores</h1>
    <a href="/public/recolector/create">Crea Recolector</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Dias Recolección</th>
        </tr>
        @if(!is_null($datos))
            @foreach($datos as $d)
                <tr>
                    <td>{{$d->nombre}}</td>
                    <td>{{$d->dias_recoleccion}}</td>
                    <td><a href="/public/recolector/{{$d->id}}">Edita</a></td>
                    <td><a href="/public/recolector/elimina/{{$d->id}}">Elimina</a></td>
                </tr>
            @endforeach
        @endif
    </table>
   
</body>
</html>