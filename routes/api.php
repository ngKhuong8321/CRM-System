<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller;
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

Route::get('menu','API\MenuController@index')->name('api.menu.index');
Route::get('menu/{id}','API\MenuController@show')->name('api.menu.show');
// Route::post('order', 'OrderController::class@store')->name('api.order');
// Route::post('customer', 'CustomerController::class@show')->name('api.customer');

