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
|uW64ZswTlR58Yy2dgQtvV3vVBbsQMmBg1wOTVTLD
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/demo', function (Request $request){
     if($request->user()->tokenCan('update')){
        return response("Vous avez la possibilité de mettre à jour l'api demo");
     }else{
        return response("impossible de mettre à jour l'api");
     }
});