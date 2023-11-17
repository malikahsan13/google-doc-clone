<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("comments", [\App\Http\Controllers\CommentController::class, "index"]);

Route::get("comments/{comment}", [\App\Http\Controllers\CommentController::class, "show"]);

Route::post("comments", [\App\Http\Controllers\CommentController::class, "store"]);

Route::patch("comments/{comment}", [\App\Http\Controllers\CommentController::class, "update"]);

Route::delete("comments/{comment}", [\App\Http\Controllers\CommentController::class, "destroy"]);
