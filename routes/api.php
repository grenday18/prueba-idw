<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controladores -- usados para laravel 8  ....
use App\Http\Controllers\ReviewsController;

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
// Route::group(['middleware' => ['auth:api','cors']], function () {
    Route::group(['middleware' => ['cors']], function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/review/listar',[ReviewsController::class, 'listar']);

});

