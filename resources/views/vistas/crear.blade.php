@extends('layouts.app')

@section('content')
<div class="container">
    <h2 align="center">Agregar Vendedor</h2>
    <div align="center">
        <form action="{{url('vendedor')}}" method="post">
            @csrf
            <input type="text" name="nombre" class="form-control col-md-8 offset-md-12 my-3" placeholder="Nombre vendedor" required>
            <input type="text" name="empresa" class="form-control col-md-8 offset-md-12" placeholder="Empresa" required>
        </br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection