<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzasRequest;
use App\Models\Category;
use App\Models\pizzas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pizzasController extends Controller
{
    public function index()
{
    //dd(Auth::user());
    //dd(Auth::user()->password);
    $pizzas = pizzas::latest()->paginate(5);
    $title = "Pizza Menu";

    return view('menus', [
        "title" => $title,
        "pizzas" => $pizzas
    ]);
}

public function create()
{
    $pizano = "Order pizza";
    $categories = Category::all();
    return view('pizzas',['pizano' => $pizano,'categories' => $categories]);
}

   public function store(PizzasRequest $request){
    //dd($request->file('pic'));
    $fileName = pizzas::uploadFile($request, $request->pic);
          //  dd('done');
    pizzas::create([

        "pizza-name" => $request->input('pizza-name'),
            "extra" => $request->input('extra'),
            "size" => $request->input('size'),
            "price" => $request->input('price'),
            "cat_id" => $request->category,
            "pic" => $fileName
       ]);
       return redirect()->route('menus.index');
   }


   public function show($menu)
   {
    $menu = pizzas::with('category')->findOrFail($menu);
       return view('shows', ['menu' => $menu]);
   }

   public function destroy($menu){
    $menu=pizzas::find($menu);
      $menu->delete();
      return redirect()->back();
   }
   public function edit($menu)
{
    $pizza = pizzas::findOrFail($menu);
    $categories = Category::all();
    $categoryName = $pizza->category ? $pizza->category->name : null;
    
    return view('edits', ['pizza' => $pizza, 'categories' => $categories, 'categoryName' => $categoryName]);
}
public function update(Request $request, $menu)
{
    $pizza = pizzas::findOrFail($menu);

    $category = Category::where('name', $request->input('category'))->first();
    $categoryID = $category ? $category->id : null;

    $pizza->update([
        "pizza-name" => $request->input('pizza-name'),
        "extra" => $request->input('extra'),
        "size" => $request->input('size'),
        "price" => $request->input('price'),
        "cat_id" => $categoryID
    ]);

    return redirect()->route('menus.show', $pizza->id);
}
}





