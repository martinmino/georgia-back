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
    Route::apiResource('calles', CalleController::class);
    Route::apiResource('capacidades', CapacidadController::class);
    Route::apiResource('condiciones', CondicionController::class);
    Route::apiResource('diametros', DiametroController::class);
    Route::apiResource('largos', LargoController::class);
    Route::apiResource('mercados', MercadoController::class);
    Route::apiResource('provincias', ProvinciaController::class);
    Route::apiResource('sistemas', SistemaController::class);
    Route::apiResource('vendedores', VendedorController::class);
    Route::apiResource('clientes', ClienteController::class);
    Route::apiResource('sucursales', SucursalController::class);
});