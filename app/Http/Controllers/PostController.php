<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->get();
        return response()->json([
            "data" => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //Post::query()->create([$request->toArray()]);
        $created = Post::query()->create([
            "title" => $request->title,
            "body" => $request->body
        ]);
        return new JsonResponse([
            "data" => $created
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new JsonResponse([
            "data" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
//        $post->update($request->only(["title","body"]));
        $updated = $post->update([
            "title" => $request->title ?? $post->title,
            "body" => $request->body ?? $post->body
        ]);
        if(!$updated)
        {
            return new JsonResponse([
                "errors" => [
                    "Failed to update model"
                ]
            ], 400);
        }
        return response()->json([
            "data" => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $isDeleted = $post->forceDelete();
        if(!$isDeleted)
        {
            return new JsonResponse([
               "errors" => [
                   "Record Cannot be Deleted"
               ]
            ], 400);
        }
        return new JsonResponse([
            "data" => "success"
        ]);
    }
}
