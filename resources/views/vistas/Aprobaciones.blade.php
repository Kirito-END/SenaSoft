@extends('layouts.app')

@section('content')

<div class="container">
<a href="{{url('gasto')}}" class="btn btn-outline-info">Volver</a>
    <h2 align="center">Detalles de Reporte</h2></br>
</br>
@if ($gastos != null)
    
<table class="table table-light">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Departamento</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Codigo Postal</th>
            <th>Telefono</th>
            <th>Gerente</th>
            <th>Destino Y Propocito</th>
            <th>Tipo de pago</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$gastos->nombres}}</td>
            <td>{{$gastos->departamento}}</td>
            <td>{{$gastos->direccion}}</td>
            <td>{{$gastos->ciudad}}</td>
            <td>{{$gastos->estado}}</td>
            <td>{{$gastos->cod_postal}}</td>
            <td>{{$gastos->telefono}}</td>
            <td>{{$gastos->gerente}}</td>
            <td>{{$gastos->destino_viaje}}</td>
            @if ($gastos->pago_efectivo_id != null)
            <td>Efectivo</td>
            @elseif($gastos->pago_tarjeta_id != null)
            <td>Tarjeta</td>
            @endif
            <td>{{$gastos->fecha}}</td>
        </tr>
    </tbody>
</table>
@else
<h2 align="center">No hay Datos Disponibles</h2>
@endif


</div>

@endsection