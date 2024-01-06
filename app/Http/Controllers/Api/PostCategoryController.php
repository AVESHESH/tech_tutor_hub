<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCategoryResource;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=PostCategory::latest()->get();     
        return response()->json($category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=PostCategory::where('id', $id)->first();
        if(is_null($category)){
            return response()->json('id not found', 404);
        }
        else{
            return new PostCategoryResource($category);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
