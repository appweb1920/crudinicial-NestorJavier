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

        return view("puntosReciclaje")->with('datos', $datos);
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
        $dato = new PuntosReciclaje;
        $dato->nombre = $req->nombre;
        $dato->save();
        //Redirección
        return redirect('/puntosReciclaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function show(PuntosReciclaje $puntosReciclaje)
    {
        //
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
    public function update(Request $request, PuntosReciclaje $puntosReciclaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PuntosReciclaje  $puntosReciclaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuntosReciclaje $puntosReciclaje)
    {
        //
    }
}
