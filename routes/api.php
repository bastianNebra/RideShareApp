<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

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

Route::post("/login",[LoginController::class,"submit"]);
Route::post('/login/verify/',[LoginController::class,'verify']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/driver',[DriverController::class,'show']);
    Route::post('/driver',[DriverController::class,'update']);

    Route::get('/user',function(Request $request){
        return $request->user();
    });
    
    

});
