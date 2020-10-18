<?php

namespace App\Http\Controllers;

use App\Recolector;
use Illuminate\Http\Request;

class RecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Recolector::all();

        return view("listaRecolectores")->with('datos', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("nuevoRecolector");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $recolector = new Recolector;
        $recolector->nombre = $req->nombre;
        $recolector->dias_recoleccion = $req->dias_recoleccion;

        $recolector->save();
        //Redirección
        return redirect('/recolector');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recol = Recolector::find($id);

        return view('editaRecolector')->with('recol', $recol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function edit(Recolector $recolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $punto = Recolector::find($req->id);
        $punto->nombre = $req->nombre;
        $punto->dias_recoleccion = $req->dias_recoleccion;
        $punto->save();
        return redirect('/recolector');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = Recolector::find($id);
        $punto->delete();
        return redirect('/recolector');
    }
}
