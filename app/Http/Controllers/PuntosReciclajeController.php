<?php

namespace App\Http\Controllers;

use App\PuntosReciclaje;
use Illuminate\Http\Request;

class PuntosReciclajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = PuntosReciclaje::all();

        return view("listaPuntosReciclaje")->with('datos', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("nuevoPuntoReciclaje");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $nuevopunto = new PuntosReciclaje;
        $nuevopunto->tipo_basura = $req->tipobasura;
        $nuevopunto->direccion = $req->direccion;
        $nuevopunto->horario_apertura = $req->apertura;
        $nuevopunto->horario_cierre = $req->cierre;

        $nuevopunto->save();
        //Redirección
        return redirect('/puntosReciclaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $punto = PuntosReciclaje::find($id);

        return view('editaPuntoReciclaje')->with('punto', $punto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function edit(PuntosReciclaje $puntosReciclaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $punto = PuntosReciclaje::find($req->id);
        $punto->tipo_basura = $req->tipobasura;
        $punto->direccion = $req->direccion;
        $punto->horario_apertura = $req->apertura;
        $punto->horario_cierre = $req->cierre;
        $punto->save();
        return redirect('/puntosReciclaje');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = PuntosReciclaje::find($id);
        $punto->delete();
        return redirect('/puntosReciclaje');
    }
}
