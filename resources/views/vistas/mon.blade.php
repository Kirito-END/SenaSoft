@extends('layouts.app')

@section('content')
<div class="container">
    <h2 align="center">Agregar Moneda</h2>
    <div align="center">
        <form action="{{url('tarje')}}" method="post">
            @csrf
            <input type="text" name="moneda" class="form-control col-md-8 offset-md-12 my-3" placeholder="moneda" required>
            <input type="number" name="valor" class="form-control col-md-8 offset-md-12" placeholder="valor" required>
        </br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection