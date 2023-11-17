<?php

use App\Helpers\Routes\RoutesHelper;
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

Route::prefix("v1")
    ->group(function() {
        RoutesHelper::includeRouteFiles(__DIR__."/api/v1");
//        require(__DIR__ . "/api/v1/users.php");
//        require(__DIR__ . "/api/v1/posts.php");
//        require(__DIR__ . "/api/v1/comments.php");
    });

/** method syntax for routes */
//Route::middleware("auth")
//    ->prefix("users")
//    ->name("heya")
//    ->namespace("\App\Http\Controllers")
//    ->group(function(){
//        Route::get("/users", "UserController@index") ->name("index");
//
//        Route::get("/users/{user}", [\App\Http\Controllers\UserController::class, "show"]);
//
//        Route::post("/users", [\App\Http\Controllers\UserController::class, "store"]);
//
//        Route::patch("/users/{user}", [\App\Http\Controllers\UserController::class, "update"]);
//
//        Route::delete("/users/{user}", [\App\Http\Controllers\UserController::class, "destroy"]);
//    });


/** Array form of using routes */
//Route::group([
//    "middleware" => ['auth'],
//    "prefix" => "users",
//    "as" => "heya",
//    "namespace" => "\App\Http\Controllers"
//],function(){
//    Route::get("/users", "UserController@index") ->name("index");
//
//    Route::get("/users/{user}", [\App\Http\Controllers\UserController::class, "show"]);
//
//    Route::post("/users", [\App\Http\Controllers\UserController::class, "store"]);
//
//    Route::patch("/users/{user}", [\App\Http\Controllers\UserController::class, "update"]);
//
//    Route::delete("/users/{user}", [\App\Http\Controllers\UserController::class, "destroy"]);
//});


