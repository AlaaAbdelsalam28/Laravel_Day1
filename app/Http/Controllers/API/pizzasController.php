<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PizzasRequest;
use App\Http\Resources\pizzasResource;
use App\Models\Category;
use App\Models\pizzas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd(Auth('sanctum')-> user());
        $pizzas=pizzas::all();
        //return response()->json($pizzas);
        return response()->json([
            "message" => "All pizzas",
            "status_code" => 200,
            //collection 7attli al data fi array as collection 
            "data" => pizzasResource::collection($pizzas)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PizzasRequest $request)
    {
        $fileName = pizzas::uploadFile($request, $request->pic);
        $pizzas = pizzas::create([
        "pizza-name" => $request->input('pizza-name'),
        "extra" => $request->input('extra'),
        "size" => $request->input('size'),
        "price" => $request->input('price'),
        "cat_id" => $request->category,
        "pic" => $fileName
        ]);
        return response()->json([
            "message" => "pizza Created",
            "status_code" => 201,
            "data" => $pizzas
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pizzas=pizzas::findOrFail($id);
      //  return response()->json($pizzas);
      return response()->json([
        "message" => "pizza Find",
        "status_code" => 200,
        "data" => new pizzasResource($pizzas)
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pizzas = pizzas::findOrFail($id);
        $category = Category::where('name', $request->input('category'))->first();
        $categoryID = $category ? $category->id : null;
        $pizzas->update([
            "pizza-name" => $request->input('pizza-name'),
            "extra" => $request->input('extra'),
            "size" => $request->input('size'),
            "price" => $request->input('price'),
            "cat_id" => $categoryID,
        ]);
        return response()->json([
            "message" => "pizza updated",
            "status_code" => 200,
            "data" => $pizzas
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pizzas=pizzas::findOrFail($id);
        $pizzas->delete();
       // return response()->json(["message"=>"deleted"]);
       return response()->json([
        "message" => "pizza Deleted",
        "status_code" => 200,
        "data" => []
    ]);
    }
    }

