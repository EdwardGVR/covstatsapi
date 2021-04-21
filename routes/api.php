<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get("/departamentos/byzona/{id}", "DepartamentosController@getDptosByZona");
});

Route::post("/login", "UserController@login");

Route::ApiResource("/usuarios", "UserController");

Route::ApiResource("/posts", "PostController");

Route::ApiResource("/zonas", "ZonasController");

Route::ApiResource("/departamentos", "DepartamentosController");
// Route::get("/departamentos/byzona/{id}", "DepartamentosController@getDptosByZona");

Route::ApiResource("/municipios", "MunicipiosController");
Route::get("municipios/bydpto/{id}", "MunicipiosController@showByDpto");

Route::ApiResource("/categorias", "CategoriasController");