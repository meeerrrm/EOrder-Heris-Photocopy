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

Route::middleware(['auth:sanctum'])->group(function(){

    Route::controller(App\Http\Controllers\api\v1\ProductController::class)
        ->prefix('product')
        ->name('product.')
        ->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
            Route::get('/{id}','show')->name('show');
            Route::put('/{id}','update')->name('update');
        });
});