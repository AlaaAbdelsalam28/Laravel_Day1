<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\pizzasController;
use App\Http\Controllers\API\TagController;
use App\Http\Controllers\API\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('pizzas', pizzasController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('tags', TagController::class);
    Route::apiResource('users', UserController::class);
});

// Route::get('/pizzas',[pizzasController::class ,'index']);
// Route::get('/pizzas/{id}',[pizzasController::class ,'show']);
// Route::delete('/pizzas/{id}',[pizzasController::class ,'destroy']);
// Route::post('/pizzas',[pizzasController::class ,'store']);
// Route::put('/pizzas/{id}',[pizzasController::class ,'update']);



// Route::post('/login', function (Request $request) {
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//         'device_name' => 'required',
//     ]);
 
//     $user = User::where('email', $request->email)->first();
 
//     if (! $user || ! Hash::check($request->password, $user->password)) {
//         throw ValidationException::withMessages([
//             'email' => ['The provided credentials are incorrect.'],
//         ]);
//     }
//     return response()->json([
//         "message" => "login done",
//         "token" => $user->createToken($request->device_name)->plainTextToken
//     ]);
// });

Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
