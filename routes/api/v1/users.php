<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::resource("/users", "\App\Http\Controllers\UserController");

// this will remove create and edit route it will only show api related routes
//Route::apiResource("/users","\App\Http\Controllers\UserController");


Route::get("/users", [\App\Http\Controllers\UserController::class, "index"]);

Route::get("/users/{user}", [\App\Http\Controllers\UserController::class, "show"]);

Route::post("/users", [\App\Http\Controllers\UserController::class, "store"]);

Route::patch("/users/{user}", [\App\Http\Controllers\UserController::class, "update"]);

Route::delete("/users/{user}", [\App\Http\Controllers\UserController::class, "destroy"]);
