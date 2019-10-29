@extends('layouts.app')

@section('content')
<div class="container cont-block my-5 ">
        <h2 align="center">Reportes Pago en Tarjeta de Credito</h2>
</br>
    <h4 CLASS="modal-title" align="center">Targeta de credito </h4>
<form action="{{url('pago-t')}}" method="post">
        @csrf
    <table class=" table">
        <thead>
        <tr >
            <td>tipo de tarjeta</td>
            <td>numero tarjeta</td>
            <td>cvv</td>
            <td>fecha caducidad</td>
        </tr>
        </thead>
        <tbody>
            <th><select class="form-control" name="" id="">
                <option value="visa">visa</option>
                <option value="masterCard">masterCard</option>
                <option value="American spress">American spress</option>
            </select></th>
            <th><input class="form-control" type="text" name="n_tarjeta" placeholder="Numero de la tarjeta"></th>
            <th><input class="form-control" type="text" name="cvv" placeholder="cvv"></th>
            <th><input class="form-control"type="date" name="fecha"></th>
        </tr>
        </tbody>

    </table>
    <hr>
    
    </br>
        <input type="file" name="archivo" id="" class="form-group col-md-7 offset-md-4 ">
    </br>
    <button type="submit" class="btn btn-primary col-md-7 offset-md-2">Registrar</button>
</form>
</div>
@endsection

