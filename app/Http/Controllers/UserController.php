<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // http GET
    public function index()
    {
        return Usuarios::all();
    }

 
    // http POST
    public function store(CreateUserRequest $request)
    {
        // $input = $request->all();
        // UserTest::create($input);
        // return response()->json([
        //     'res' => true,
        //     'message' => "Registro creado"
        // ], 200);

        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $email = $request->input('email');
        $rol_id = 1;
        $municipio_id = $request->input('municipio_id');
        $password = $request->input('password');

        Usuarios::create([
            "nombres" => $nombres,
            "apellidos" => $apellidos,
            "email" => $email,
            "rol_id" => $rol_id,
            "municipio_id" => $municipio_id,
            "password" => $password
        ]);

        return response()->json([
            'msg' => "Usuario registrado"
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
        return Usuarios::where("id", $id)->get();
    }


    // http PUT
    public function update(UpdateUserRequest $request, $id)
    {
        // Cambiamos Request por el Request que creamos
        // $input = $request->all();
        // UserTest::where('id', $id)->update($input);

        // return response()->json([
        //     'res' => true,
        //     'message' => "Registro actualizado"
        // ], 200);

        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $email = $request->input('email');
        $rol_id = $request->input('rol_id');
        $municipio_id = $request->input('municipio_id');
        $password = $request->input('password');

        Usuarios::where('id', $id)->update([
            "nombres" => $nombres,
            "apellidos" => $apellidos,
            "email" => $email,
            "municipio_id" => $municipio_id
        ]);

        return response()->json([
            'msg' => "Usuario actualizado"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // http DELETE
    public function destroy($id)
    {
        Usuarios::destroy($id);

        return response()->json([
            'res' => true,
            'message' => "Registro eliminado"
        ], 200);
    }
}
