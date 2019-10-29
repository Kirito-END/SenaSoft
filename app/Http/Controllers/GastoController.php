<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Gasto;
use App\Aprovacion;
use App\PagoEfectivo;
use App\PagoTarjeta;
use Barry\DomPDF\Facades as PDF;

class GastoController extends Controller
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
            $apro = Aprovacion::where('user_id','=',Auth::id())->get();
            return view('vistas.lista',compact('gastos','apro'));
        }
        elseif(Auth::id() >= 2){
            $gasto = Gasto::where('user_id','=',Auth::id());
            if($gasto == null)
            {
            $apro = Aprovacion::all();
            return view('vistas.lista',compact('gastos','apro'));
            }
            else
            {
                return view('vistas.Registro_gastos');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.Registro_gastos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $auth = Auth::id();
        $gasto = new Gasto;

        $gasto->nombres=$request->input('nombre');
        $gasto->departamento=$request->input('departamento');
        $gasto->direccion=$request->input('direccion');
        $gasto->ciudad=$request->input('ciudad');
        $gasto->estado=$request->input('estado');
        $gasto->cod_postal=$request->input('cod_postal');
        $gasto->telefono=$request->input('telefono');
        $gasto->gerente=$request->input('gerente');
        $gasto->user_id = $auth;
        $gasto->destino_viaje=$request->input('detino_viaje');
        $gasto->pago_efectivo_id=$request->input('tipo_pago');
        $gasto->pago_tarjeta_id=$request->input('tipo_pago');
        $gasto->fecha=$request->input('fecha');

        $gasto->save();

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
        $gastos = Gasto::find($id);
        return view('vistas.Aprobaciones',compact('gastos'));
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
