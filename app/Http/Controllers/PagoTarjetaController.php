<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagoTarjeta;
use App\Tarjeta;
use App\Gasto;
 
class PagoTarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('vistas.tipos_pagos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarjeta = new PagoTarjeta;
        $tj = new Tarjeta;
        $gasto= Gasto::all()->last();
        $gas = $gasto->id;

        $tarjeta->n_tarjeta = $request->input('n_tarjeta');
        $tarjeta->cvv = $request->input('cvv');
        $tarjeta->fecha = $request->input('fecha');
        $tarjeta->save();
        // $tj->archivo = $request->file('archivo');
        $tj->gasto_id = $gas;
        $tj->save();

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
