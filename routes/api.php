<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::apiResource('agentes', AgenteController::class);
    Route::apiResource('bajaMotivos', BajaMotivoController::class);
    Route::apiResource('calles', calleController::class);
    Route::apiResource('capacidades', capacidadController::class);
    Route::apiResource('condiciones', condicionController::class);
    Route::apiResource('diametros', diametroController::class);
    Route::apiResource('largos', largoController::class);
    Route::apiResource('mercados', mercadoController::class);
    Route::apiResource('provincias', provinciaController::class);
    Route::apiResource('sistemas', sistemaController::class);
    Route::apiResource('vendedores', vendedorController::class);
    Route::apiResource('clientes', clienteController::class);
});