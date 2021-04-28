<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesAutoevaluacion as D;

class DetallesAutoevaluacionController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autoevaluacion_id = $request->input('autoevaluacion_id');
        $sintoma_id = $request->input('sintoma_id');

        D::create([
            "autoevaluacion_id" => $autoevaluacion_id,
            "sintoma_id" => $sintoma_id
        ]);

        return response()->json([
            "res" => true,
            "msg" => "guardado correctamente"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        D::where('id', $id)->get();
    }
    
    public function getbyautoeval ($id) {
        return D::where('autoevaluacion_id', $id)->get();
    }

    public function getSintomas ($id) {
        return D::with('sintoma:id,gravedad_id,sintoma,descripcion', 'sintoma.gravedad:id,gravedad')
            ->where('autoevaluacion_id', $id)
            ->get();
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
