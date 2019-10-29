@extends('layouts.app')
@section('content')

<div class="container">
    <h2 align="center">lista de reportes</h2>
    <table class="table table-ligth">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Gerente</th>
                <th>Fecha</th>
                <th></th>
                <th>Tipo de pago</th>
                <th></th>
                <th>Acciones</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($gastos as $gasto)
            <tr>
                <td>{{$gasto->nombres}}</td>
                <td>{{$gasto->gerente}}</td>
                <td>{{$gasto->fecha}}</td>
                <td>{{$gasto->total}}</td>
                @if ($gasto->pago_efectivo_id != null)
                <td>Efectivo</td>
                @elseif($gasto->pago_tarjeta_id != null)
                <td>Tarjeta</td>
                @endif
                <td>{{$gasto->n_cuenta}}</td>
                <td>
                    <a href="{{url('/gasto/'.$gasto->id)}}" class="btn btn-info">Ver</a>
                
                </td>
                <td>
                        @if ($gasto->id == 1)
                        <td>Aprovar</td>
                    @elseif($gasto->id == 2)
                        <td>Denegado</td>
                    @else
                        <td>Aprovar</td>
                    @endif
                </td>
                <td>
                <form action="{{url('apro')}}" method="post">
                        @csrf
                        <select name="apro" id="" class="btn btn-outline-success">
                            <option value="Aprovar">Aprovar</option>
                            <option value="Denegar">Denegar</option>
                        </select>
                        <button type="submit" class="btn btn-primary" onclick="alert('Esta seguro')">Confirmar</button>
                    </form>
                        </td>
                    </tr>
             @endforeach
        </tbody>
    </table>
</div>



@endsection