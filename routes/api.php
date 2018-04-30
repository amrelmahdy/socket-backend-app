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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (){
   return response()->json([1,2,3,4], 200);
});

// this is just a route that authorize authenticated users to use our app ..
Route::post("/login", "API\AuthController@login");


Route::get("/get-inbox-messages", "API\InboxController@inbox");
