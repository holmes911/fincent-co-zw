<?php

use Illuminate\Http\Request;

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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware([])->group(function() {
    Route::get('/xrates', 'ADMIN\RateController@indexApi');
    Route::get('/customers', 'ADMIN\CustomerController@all');
    Route::post('/transaction', 'ADMIN\TransactionController@store');
    Route::post('/email', SendEmailController::class);
});
