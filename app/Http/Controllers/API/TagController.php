<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

    return response()->json([
        "message" => "All tags",
        "status_code" => 200,
        "data" => TagResource::collection($tags)
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
        $tags = Tag::create([
            'name' => $request->input('name'),
      
        ]);
        return response()->json([
            "message" => "tags Created",
            "status_code" => 201,
            "data" => $tags
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tags=Tag::findOrFail($id);
        return response()->json([
          "message" => "tags Find",
          "status_code" => 200,
          "data" => new TagResource($tags)
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->update([
            'name' => $request->input('name'),
        ]);
        return response()->json([
            "message" => "tag updated",
            "status_code" => 200,
            "data" => $tags
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tags=Tag::findOrFail($id);
        $tags->delete();
       return response()->json([
        "message" => "tag Deleted",
        "status_code" => 200,
        "data" => []
    ]);
    }
}
