<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMoneda;
use App\Vendedor;
use App\PagoEfectivo;
use Illuminate\Support\Facades\Auth;

class PagoEfectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::id()==1){
            $gastos = Gasto::all();
            return view('vistas.lista',compact('gastos'));
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendedor= Vendedor::all();
        $monedas = TipoMoneda::all();
        return view('vistas.tipo_pago',compact('vendedor','monedas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @retur
     * n \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = Auth::id();
        $pago = new PagoEfectivo;

        $pago ->tipo_moneda_id = $request->input('tipo_moneda');
        $pago ->vendedor_id = $request->input('vendedor');
        $pago ->descripcion = $request->input('descripcion');
        $pago ->tarifa_ae = $request->input('tarifa');
        $pago ->alojamiento = $request->input('alojamiento');
        $pago ->comidas = $request->input('comidas');
        $pago ->autos = $request->input('alquiler');
        $pago ->telefono = $request->input('telefono');
        $pago ->archivo =$request-> input('archivo');
        $pago ->otros = $request->input('otros');
        $pago ->total = $request->input('total');
        $pago ->user_id = $auth;
        // $pago ->moneda = $request->input('n_cuenta');
        $pago ->fecha = $request->input('fecha');

        $pago ->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
