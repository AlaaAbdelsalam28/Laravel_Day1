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
            "price" => 50,
            "size"=>"small"
        ],
        [
            "name" => "Pepperoni Pizza",
            "price" => 60,
            "size"=>"medium"
        ],
        [
            "name" => "Meat Pizza",
            "price" => 70,
            "size"=>"medium"
        ],
        [
            "name" => "Margherita Pizza",
            "price" => 60,
            "size"=>"medium"
        ],
        [
            "name" => "BBQ Chicken Pizza",
            "price" => 80,
            "size"=>"small"
        ],
        [
            "name" => "Buffalo Pizza",
            "price" => 120,
            "size"=>"large"
        ],
        [
            "name" => "California Pizza",
            "price" => 90,
            "size"=>"medium"
        ],
        [
            "name" => "Greek Pizza",
            "price" => 150,
            "size"=>"medium"
        ],
        [
            "name" => "Pizza Crust",
            "price" => 100,
            "size"=>"medium"
        ],
        [
            "name" => "Hawaiian Pizza",
            "price" => 170,
            "size"=>"large"
        ],
    ];
   
    return view('menus', ["title" => $title , "menu" => $menu]);
});


Route::get('pizza', function () {
    $pizano = "Order pizza";
    return view('pizzas', ['pizano' => $pizano]);
});
