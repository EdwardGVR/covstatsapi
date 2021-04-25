<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Posts::with('categoria:id,categoria')
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $input = $request->all();

        //return $request->has(['titulods', 'csdontenido']);
        // return $request->input('titulo');

        // if ($request->has('titulo')) {
        //     return $request->input('titulo');
        // } else {
        //     return response()->json([
        //         "msg" => "No tiene titulo"
        //     ], 400);
        // }

        // return $request->validated();

        $titulo = $request->input('titulo');
        $contenido = $request->input('contenido');
        $categoria_id = $request->input('categoria_id');

        // Cuando es un solo registro, solo se le pasa un array como argumento

        // A diferencia de los seeders en donde, como eran varios registros, se le pasaba primero
        // un arreglo y dentro de ese arreglos los arreglos de cada registro.
        Posts::create([
            "titulo" => $titulo,
            "contenido" => $contenido,
            "categoria_id" => $categoria_id
        ]);

        return response()->json([
            "msg" => "Registro agregado correctamente"
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
        return Posts::where('id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $titulo = $request->input('titulo');
        $contenido = $request->input('contenido');
        $categoria_id = $request->input('categoria_id');

        Posts::where('id', $id)->update([
            'titulo' => $titulo,
            'contenido' => $contenido,
            'categoria_id' => $categoria_id
        ]);

        return response()->json([
            "msg" => "Registro actualizado correctamente"
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
        Posts::destroy($id);

        return response()->json([
            "msg" => "Registro eliminado correctamente"
        ], 200);
    }
}
