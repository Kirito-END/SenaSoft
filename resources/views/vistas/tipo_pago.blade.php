@extends('layouts.app')

@section('content')
<div class="container">
    <h2 align="center">Reportes Pago en Efectivo</h2>
    <hr>
    </br>
        <input type="file" name="archivo" id="" class="form-group col-md-7 offset-md-8 ">
    </br>
<form action="{{url('/pago-e')}}" method="post">
        @csrf
        <table class="table table-light">
            <thead>
                <tr>
                    <td align="center">Tipo de Moneda</td>
                    <td align="center">Vendedor</td>
                    <td align="center">Fecha</td>
                    <td align="center">Descripción</td>
                    <td align="center">Tarifa Aerea</td>
                    <td align="center">Alojamiento</td>
                </tr>
            </thead>
            <tbody>
                <td>
                    <select name="tipo_moneda" id="" class="form-control">
                        <option>Seleccionar...</option>
                        @foreach ($monedas as $moneda)
                            <option value="{{$moneda->id}}">{{$moneda->moneda}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="vendedor" id="" class="form-control">
                        <option>Seleccionar...</option>
                        @foreach ($vendedor as $vendedo)
                            <option value="{{$vendedo->id}}">{{$vendedo->nombre}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="date" max="date()-1" name="fecha" id="" class="form-control" min="1" required>
                </td>
                <td>
                    <input type="text" name="descripcion" id="" class="form-control" min="1" placeholder="Descripción" required>
                </td>
                <td>
                    <input type="number" name="tarifa" id="" class="form-control" min="1" required>
                </td>
                <td>
                    <input type="number" name="alojamiento" id="" class="form-control" min="1" required>
                </td>
            </tbody>
        </table>

        <table class="table table-light">
                <thead>
                    <tr>
                        <td align="center">Comidas Bus Ent</td>
                        <td align="center">Alquiler de Coches | Taxi Acarcamiento</td>
                        <td align="center">Telefono</td>
                        <td align="center">Otros Gastos</td>
                        <td align="center">Total</td>
                        <td align="center">Nombre de la Cuenta del Cliente</td>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <input type="number" name="comidas" id="" class="form-control" min="1" required>
                    </td>
                    <td>
                        <input type="number" name="alquiler" id="" class="form-control" min="1" required>
                    </td>
                    <td>
                        <input type="number" name="telefono" id="" class="form-control" placeholder="Telefono" min="1" required>
                    </td>
                    <td>
                        <input type="number" name="otros" id="" class="form-control" min="1" required>
                    </td>
                    <td>
                        <input type="number" name="total" id="" class="form-control" min="1" required>
                    </td>
                    <td>
                        <input type="text"  name="n_cuenta" id="" class="form-control" placeholder="Nombre de Cuenta" required>
                    </td>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary col-md-7 offset-md-2">Registrar</button>
    </form>
</br>
</br>
</br>

</div>
@endsection