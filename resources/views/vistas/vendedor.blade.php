@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{url('vendedor/create')}}" class="btn btn-success">Agregar vendedor</a></br>
    <table class="table table-light">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vens as $ven)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ven->nombre}}</td>
                    <td>{{$ven->empresa}}</td>
                    <td>
                        <form action="{{url('vendedor/'.$ven->id)}}" method="post">
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