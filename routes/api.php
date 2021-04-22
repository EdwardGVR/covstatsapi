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
    // Para acceder a estar rutas, hay que especificar los headers
    // Accept Application/json
    // Authorization Bearer [token]

    // Route::get("/departamentos/byzona/{id}", "DepartamentosController@getDptosByZona");
    Route::post("/logout", "UserController@logout");
});

Route::post("/login", "UserController@login");

Route::ApiResource("/usuarios", "UserController");

Route::ApiResource("/posts", "PostController");

Route::ApiResource("/zonas", "ZonasController");

Route::ApiResource("/departamentos", "DepartamentosController");
Route::get("/departamentos/byzona/{id}", "DepartamentosController@getDptosByZona");

Route::ApiResource("/municipios", "MunicipiosController");
Route::get("municipios/bydpto/{id}", "MunicipiosController@showByDpto");

Route::ApiResource("/categorias", "CategoriasController");

Route::ApiResource("/resultadospruebas", "ResultadosPruebasController");

Route::ApiResource("/tipospruebas", "TiposPruebasController");