<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;
use App\Models\User;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Profiles::all());
    }

    public function show($id)
    {
        $user = Profiles::find($id);
        if ($user) {
            return response()->json($user);
        }
        return response()->json(['message' => 'Profile not found'], 404);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        // ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $user = User::create($validatedData);

        // return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        // $user = User::find($id);

        // if (!$user) {
        //     return response()->json(['message' => 'User not found'], 404);
        // }

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        // ]);

        // $user->update($validatedData);

        // return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted']);
    }
}
