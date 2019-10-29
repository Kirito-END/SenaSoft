@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{url('tarje/create')}}" class="btn btn-success">Agregar Moneda</a></br>
    <table class="table table-light">
        <thead>
            <tr>
                <th>N°</th>
                <th>Moneda</th>
                <th>Valor</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($moneda as $ven)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ven->moneda}}</td>
                    <td>{{$ven->valor}}</td>
                    <td>
                        <form action="{{url('tarje/'.$ven->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection