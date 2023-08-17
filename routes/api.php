<?php

use App\Http\Controllers\Api\PedidosController;
use Carbon\Carbon;
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

Route::get('/version', function(){
    //$date = Carbon::now()->toDateTimeString();
    return ['Version'=>'1.0'];
});

Route::get('/getAllWebPay', [PedidosController::class,'getAllWebPay']);
Route::get('/getAllOrdersSyS', [PedidosController::class,'getAllOrdersSyS']);
Route::get('/getAllOrders', [PedidosController::class,'getAllOrders']);
Route::get('/getPrueba', [PedidosController::class,'getPrueba']);

//Route::get('/user', [UserController::class, 'index']);
