<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // $games = Game::all();
        // return response()->json($games);
        return view('games.index');
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return response()->json($game);
    }

    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return response()->json($game, 201);
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->update($request->all());
        return response()->json($game, 200);
    }

    public function destroy($id)
    {
        Game::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
