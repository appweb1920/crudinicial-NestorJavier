<?php

namespace App\Http\Controllers;

use App\PuntosRecolector;
use App\Recolector;
use App\PuntosReciclaje;

use Illuminate\Http\Request;

class PuntosRecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntos = PuntosReciclaje::all();
        $recolectores = Recolector::all();
        $puntosRec = PuntosRecolector::all();

        return view("listaRelaciones")->with('puntos', $puntos)->with('recolectores', $recolectores)->with('puntosRec', $puntosRec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $relacion = new PuntosRecolector;

        $relacion->puntosreciclaje_id = $request->puntos;
        $relacion->recolectores_id = $request->repartidores;

        $relacion->save();
        //Redirección
        return redirect('/puntosRecolector');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntosRecolector  $puntosRecolector
     * @return \Illuminate\Http\Response
     */
    public function show(PuntosRecolector $puntosRecolector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PuntosRecolector  $puntosRecolector
     * @return \Illuminate\Http\Response
     */
    public function edit(PuntosRecolector $puntosRecolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PuntosRecolector  $puntosRecolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuntosRecolector $puntosRecolector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuntosRecolector  $puntosRecolector
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuntosRecolector $puntosRecolector)
    {
        //
    }
}
