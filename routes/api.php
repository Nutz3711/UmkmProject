<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\TokoController;
use App\Http\Controllers\Api\UserController;
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
Route::post('/register',RegisterController::class);
Route::post('/login',LoginController::class);


Route::middleware('jwthandle')->group(function(){
    Route::get('/users',function(Request $request){
        return $request->user();
    });


    //toko Api
    Route::controller(TokoController::class)->group(function(){
        Route::get('/toko','get');
        Route::get('/toko/{id}','getById');
        Route::post('/toko','save');
        Route::put('/toko/{id}','update');
        Route::delete('/toko/{id}','erase');
    });

    //barang Api
    Route::controller(BarangController::class)->group(function(){
        Route::get('/barang','get');
        Route::post('/barang','save');
        Route::put('/barang/{id}','update');
        Route::delete('/barang/{id}','erase');
    });
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
