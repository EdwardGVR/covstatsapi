<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pruebas as P;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return P::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario_id = $request->input('usuario_id');
        $municipio_id = $request->input('municipio_id');
        $tipo_id = $request->input('tipo_id');
        $resultado_id = $request->input('resultado_id');

        P::create([
            "usuario_id" => $usuario_id,
            "municipio_id" => $municipio_id,
            "tipo_id" => $tipo_id,
            "resultado_id" => $resultado_id,
        ]);

        return response()->json([
            "msg" => "Prueba registrada"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return P::where('id', $id)->get();
    }

    public function getByUser () {
        return P::where('usuario_id', $id)->get();
    }

    public function getByMunicipio () {
        return P::where('municipio_id', $id)->get();
    }

    public function getByTipo () {
        return P::where('tipo_id', $id)->get();
    }

    public function getByResultado () {
        return P::where('resultado_id', $id)->get();
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
