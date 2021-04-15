<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTest;
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
        return UserTest::all();
    }

 
    // http POST
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        UserTest::create($input);
        return response()->json([
            'res' => true,
            'message' => "Registro creado"
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
        return UserTest::where("id", $id)->get();
    }


    // http PUT
    public function update(UpdateUserRequest $request, $id)
    {
        // Cambiamos Request por el Request que creamos
        $input = $request->all();
        UserTest::where('id', $id)->update($input);

        return response()->json([
            'res' => true,
            'message' => "Registro actualizado"
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
        UserTest::destroy($id);

        return response()->json([
            'res' => true,
            'message' => "Registro eliminado"
        ], 200);
    }
}
