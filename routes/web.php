<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('menu', function () {
    $title ="Pizza Menu";
    $menu = [
        [
            "name" => "Cheese Pizza",
            "extra" => "Cheese",
            "size"=>"small",
            "price" => 50,
        ],
        [
            "name" => "Pepperoni Pizza",
            "extra" => "mushroom",
            "size"=>"medium",
            "price" => 60
        ],
        [
            "name" => "Meat Pizza",
            "extra" => "onion",
            "size"=>"medium",
            "price" => 70,
        ],
       
    ];
   
    return view('menus', ["title" => $title , "menu" => $menu]);
});


Route::get('pizza', function () {
    $pizano = "Order pizza";
    return view('pizzas', ['pizano' => $pizano]);
});
