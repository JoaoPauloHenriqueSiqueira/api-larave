<?php

use App\Http\Controllers\Api\AccountsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BanksController;

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

Route::group(['middleware' => ['cors', 'auth:api']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');

    Route::resource('/banks', BanksController::class);
    Route::resource('/accounts', AccountsController::class);
});
