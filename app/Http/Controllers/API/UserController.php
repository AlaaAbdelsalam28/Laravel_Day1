<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Resources\TagResource;
use App\Http\Resources\UserResource;
use App\Models\Tag;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = ModelsUser::all();

        return response()->json([
            "message" => "All users",
            "status_code" => 200,
            "data" => UserResource::collection($users)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {

        $users = ModelsUser::create([
             'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json([
            "message" => "user Created",
            "status_code" => 201,
            "data" => $users
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users=ModelsUser::findOrFail($id);
        return response()->json([
          "message" => "user Find",
          "status_code" => 200,
          "data" => new UserResource($users)
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users =ModelsUser::findOrFail($id);
        $users->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return response()->json([
            "message" => "user updated",
            "status_code" => 200,
            "data" => $users
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users=ModelsUser::findOrFail($id);
        $users->delete();
       return response()->json([
        "message" => "user Deleted",
        "status_code" => 200,
        "data" => []
    ]);
    }
}
