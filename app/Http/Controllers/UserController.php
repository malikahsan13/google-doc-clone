<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new \Illuminate\Http\JsonResponse([
            "data" => "in index method"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new \Illuminate\Http\JsonResponse([
            "data" => "posted"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new \Illuminate\Http\JsonResponse([
            "data" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        return new \Illuminate\Http\JsonResponse([
            "data" => "Patch"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return new \Illuminate\Http\JsonResponse([
            "data" => "Deleted"
        ]);
    }
}
