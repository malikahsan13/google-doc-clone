<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", function(Request $req){
//      dump($req);
    return new \Illuminate\Http\JsonResponse([
       "data" => "aaaaaaaa"
    ]);
});

Route::get("/users/{user}", function(\App\Models\User $user){
    return new \Illuminate\Http\JsonResponse([
        "data" => $user
    ]);
});

Route::post("/users", function(){
    return new \Illuminate\Http\JsonResponse([
        "data" => "posted"
    ]);
});

Route::patch("/users/{user}", function (\App\Models\User $user){
    return new \Illuminate\Http\JsonResponse([
        "data" => "Patch"
    ]);
});

Route::delete("/users/{user}", function(\App\Models\User $user){
    return new \Illuminate\Http\JsonResponse([
        "data" => "Deleted"
    ]);
});
