<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    
    public function getByZona($id) {
        return DB::table('pruebas')
        ->Join('municipios','pruebas.municipio_id','=','municipios.id')
        ->Join('departamentos','municipios.departamento_id','=','departamentos.id')
        ->Join('zonas','departamentos.zona_id','=','zonas.id')
        ->where('pruebas.resultado_id',$id)
        ->select('zonas.zona',DB::raw('count(pruebas.resultado_id) AS cantidad'))
        ->groupBy('departamentos.zona_id')
        ->get();
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

    public function getByUser ($id) {
        // return P::where('usuario_id', $id)->get();
        
        // return P::with(['tipo:id,tipo', 'resultado:id,resultado', 'municipio:id,municipio'])->get();

        return P::with(['tipo:id,tipo', 'resultado:id,resultado', 'municipio.departamento:id,departamento'])
            ->where('usuario_id', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
    }

    public function getByMunicipio ($id) {
        return P::where('municipio_id', $id)->get();
    }

    public function getByTipo ($id) {
        return P::where('tipo_id', $id)->get();
    }

    public function getByResultado ($id) {
        return P::where('resultado_id', $id)->count();
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
        $municipio_id = $request->input('municipio_id');
        $tipo_id = $request->input('tipo_id');
        $resultado_id = $request->input('resultado_id');

        P::where('id', $id)->update([
            "municipio_id" => $municipio_id,
            "tipo_id" => $tipo_id,
            "resultado_id" => $resultado_id
        ]);

        return response()->json([
            "msg" => "Prueba modificada"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        P::destroy($id);

        return response()->json([
            "msg" => "Prueba eliminada"
        ], 200);
    }
}
