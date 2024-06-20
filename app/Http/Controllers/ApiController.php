<?php

namespace App\Http\Controllers;

use App\Models\Api;
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
    // public function index()
    // {
    //     //
    //     //$api = Api::orderBy('created_at', 'DESC')->get();
    //     //return view('api.proApis', compact('api'));
    //     return view('api.proApis');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Api  $Api
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Request $id)
    // {
    //     //
    //     $p = Profiles::orderBy('created_at', 'desc')->paginate(3);
    //     return $id;//"ok";//$id;
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Api  $Api
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Api $Api)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Api  $Api
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Api $Api)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Api  $Api
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Api $Api)
    // {
    //     //
    // }
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
        return response()->json(['message' => 'User not found'], 404);
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
