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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('getCart/{session_id}', [App\Http\Controllers\CartController::class, 'getAjaxCart']);
Route::get('getCountCart/{session_id}', [App\Http\Controllers\CartController::class, 'getAjaxCountCart']);
Route::get('getTotalSum/{session_id}', [App\Http\Controllers\CartController::class, 'getTotalSum']);
Route::get('card_actions/{action}/{cart_id}', [App\Http\Controllers\CartController::class, 'AjaxCartActions']);
Route::get('set_quantity/{quantity}/{id}', [App\Http\Controllers\CartController::class, 'SetQuantity']);
