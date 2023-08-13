<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\pizzas;
use Illuminate\Http\Request;
use App\Http\Controllers\pizzasController;
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



Route::middleware(['auth' ,'check-age'])->group(function () {

    // \App\Models\Tag::create([
    //     'name' => 'New Tag',
    // ]);

Route::resource('menus', pizzasController::class);

// Route::get('menus', [pizzasController::class, 'index'])->name('menus.index');

// Route::Post('menus', [pizzasController::class,'store'])->name('menus.store');
    // dd($request);
   // dd($request ->extra);
   
   //return redirect('/menu');
// Route::get('menus/pizzas',[pizzasController::class,'create'] );
// Route::get('menus/{menu}' , [pizzasController::class,'show'])->name('menus.show');
// Route::delete('menus/{menu}',[pizzasController::class,'destroy'])->name('menus.destroy');
// Route::get('menus/{menu}/edit', [pizzasController::class, 'edit'])->name('menus.edit');
// Route::put('menus/{menu}', [pizzasController::class, 'update'])->name('menus.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
