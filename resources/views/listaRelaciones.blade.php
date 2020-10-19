<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Relaciones</title>
</head>
<body>
    <h1>Relaciones</h1>

    @if(!is_null($puntos) && !is_null($recolectores))
    <form action="/public/puntosRecolector" method="POST">
        @csrf
        <label for="puntos">Elije un punto:</label>
        <br>
        <select id="puntos" name="puntos">
            @foreach($puntos as $punto)
                <option value="{{$punto->id}}">{{$punto->tipo_basura}} {{$punto->direccion}} {{$punto->horario_apertura}} a {{$punto->horario_cierre}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="repartidores">Elije un repartidor:</label>
        <br>
        <select id="repartidores" name="repartidores">
            @foreach($recolectores as $recolector)
                <option value="{{$recolector->id}}">{{$recolector->nombre}} {{$recolector->dias_recoleccion}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    @endif
    <br>
    <br>
    
    <table class="table table-dark">
        <tr>
            <th>Punto Recolección</th>
            <th>Recolector</th>
        </tr>
        @if(!is_null($puntos) && !is_null($recolectores) && !is_null($puntosRec))
            @foreach($puntosRec as $punRec)
            <tr>
                @foreach($puntos as $punto)
                @if($punRec->puntosreciclaje_id == $punto->id)
                    <td>{{$punto->tipo_basura}} {{$punto->direccion}} {{$punto->horario_apertura}} a {{$punto->horario_cierre}}</td>
                @endif
                @endforeach
                @foreach($recolectores as $recolector)
                @if($punRec->recolectores_id == $recolector->id)
                <td>{{$recolector->nombre}} {{$recolector->dias_recoleccion}}</td>
                @endif
                @endforeach
            </tr>
            @endforeach
        @endif
    </table>
</body>
</html>