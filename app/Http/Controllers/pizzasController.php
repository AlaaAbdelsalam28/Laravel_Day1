<?php

namespace App\Http\Controllers;

use App\Models\pizzas;
use Illuminate\Http\Request;

class pizzasController extends Controller
{
    public function index()
{
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
  
    return view('pizzas',['pizano' => $pizano]);
}

   public function store(Request $request){
    pizzas::create([

        "pizza-name" => $request->input('pizza-name'),
            "extra" => $request->input('extra'),
            "size" => $request->input('size'),
            "price" => $request->input('price'),
            "pic"=>"img1.png",
       ]);
       return redirect()->route('menus.index');
   }


   public function show($menu){
    $menu=pizzas::findOrFail($menu);
    //dd($menu);
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
    
    return view('edits', ['pizza' => $pizza]);
}
public function update(Request $request, $menu)
{
    $pizza = pizzas::findOrFail($menu);

    $pizza->update([
        "pizza-name" => $request->input('pizza-name'),
        "extra" => $request->input('extra'),
        "size" => $request->input('size'),
        "price" => $request->input('price'),
    ]);

    return redirect()->route('menus.show', $pizza->id);
}
}





