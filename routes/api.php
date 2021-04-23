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

Route::ApiResource("/pruebas", "PruebasController");
Route::get("/pruebas/byuser/{id}", "PruebasController@getByUser");
Route::get("/pruebas/bymunicipio/{id}", "PruebasController@getByMunicipio");
Route::get("/pruebas/bytipo/{id}", "PruebasController@getByTipo");
Route::get("/pruebas/byresultado/{id}", "PruebasController@getByResultado");

Route::get("/gravedades", "GravedadesSintomas");

// After php artisan migrate:fresh --seed
// Passport´s oauth tables will be wiped as well, so, to get passport to work again
// Gotta run these commands to reinstall passport
// php artisan passport:install --force
// php artisan passport:client --personal
// Client ID and Client Secret must be updated in .env file
// After thar passport should be working again