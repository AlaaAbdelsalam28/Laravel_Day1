<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $categories = Category::all();

    return response()->json([
        "message" => "All categories",
        "status_code" => 200,
        "data" => CategoryResource::collection($categories)
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $categories = Category::create([
            'name' => $request->input('name'),
      
        ]);
        return response()->json([
            "message" => "Category Created",
            "status_code" => 201,
            "data" => $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories=Category::findOrFail($id);
        return response()->json([
          "message" => "cayegory Find",
          "status_code" => 200,
          "data" => new CategoryResource($categories)
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::findOrFail($id);
        // $category = Category::where('name', $request->input('category'))->first();
        // $categoryID = $category ? $category->id : null;
        $categories->update([
            'name' => $request->input('name'),
            // "cat_id" => $categoryID,
        ]);
        return response()->json([
            "message" => "Category updated",
            "status_code" => 200,
            "data" => $categories
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories=Category::findOrFail($id);
        $categories->delete();
       return response()->json([
        "message" => "category Deleted",
        "status_code" => 200,
        "data" => []
    ]);
    }
}
