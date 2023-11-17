<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/posts", [\App\Http\Controllers\PostController::class, "index"]);

Route::get("/users/{user}", [\App\Http\Controllers\PostController::class, "show"]);

Route::post("/posts", [\App\Http\Controllers\PostController::class, "store"]);

Route::patch("/posts/{post}", [\App\Http\Controllers\PostController::class, "update"]);

Route::delete("/posts/{post}", [\App\Http\Controllers\PostController::class, "destroy"]);
