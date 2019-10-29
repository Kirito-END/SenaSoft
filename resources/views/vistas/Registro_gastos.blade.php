@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="col-md-8 offset-md-4">Informe de Gastos</h1>

<form action="{{url('/gasto')}}" method="post">
    @csrf
    <table class="table table-light">
        <thead>
        <tr>
            <td> Nombre* </td>
            <td> Direccion* </td>
            <td>Departamento*</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th> <input class="form-control" type="text" name="nombre" id="Nombre" required></th>
                <th><input  class="form-control" type="text" name="direccion" id="Direccion" placeholder="ingrese Direccion"  required></th>
                <th> <input  class="form-control" type="text" name="departamento" placeholder="ingrese el Departamento"  id="Departamento" required></th>
            </tr>
        </tbody>
    </table>
    
    
    <table class="table table-light">
        <thead>
        <tr>
            <td> ciudad* </td>
            <td> codigo postal* </td>
            <td>Estado*</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>  <select   class="form-control" name="ciudad" id="Cuidad">
                    <option value="">---</option>
                    <option value="Itagui">Itagui</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Bello">Bello</option>
                </select>
            </th>
            <th><input  class="form-control" type="text" name="cod_postal" id="Direccion" placeholder="Codigo Postal"  required></th>
            <th> <select class="form-control"  name="estado" id="">
                    <option value="">---</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                </select></th>
        </tr>
        </tbody>
    </table>
    
    <table class="table table-light">
        <thead>
            <tr>
                <td>
                    Gerente
                </td>
                <td>
                    Telefono
                </td>
                <td>
                    Fecha
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                        <input  class="form-control" type="text" name="gerente"  placeholder="ingrese Gerente" >
                </td>
                <td>
                        <input class="form-control"  class="form-control" type="number"  name="telefono"  placeholder="ingrese Telefono" required >
                </td>
                <td>
                        <input  class="form-control" type="date" name="fecha"  placeholder="ingrese Fecha" required >
                </td>
            </tr>
        </tbody>
        
    </table>
            <table class="table table-light">
                <thead>
                    <tr>
                        <td>Destino Y Propocito del Viaje</td>
                        <td>Tipo de Pago</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                                <textarea  class="form-control -" type="number" name="detino_viaje"  placeholder=" Destino y Proposito del viaje"  required></textarea>
                        </td>
                        <td>
                            <select name="tipo_pago" class="form-control" id="">
                                <option value="">Tarjeta de Credito</option>
                                <option value="">Efectivo</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
    
    </table>
    <button type="submit" class="btn btn-primary col-md-7 offset-md-2">Enviar</button>
</form>
</div>
@endsection
