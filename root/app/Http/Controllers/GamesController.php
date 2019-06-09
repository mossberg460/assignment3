<?php

namespace App\Http\Controllers;

use App\Game;
use App\Rating;
use App\Store;
use App\GameStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GamesController extends Controller {

    public function __construct() {
      $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $games = Game::all();
      return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      $game = new Game();
      $game->stores = Store::all();

      return view('games.create', ['game' => $game]);

        //return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $game = new Game;
        $game->title = $request->input('title');
        $game->price = $request->input('price');
        $game->desc = $request->input('desc');
        $game->image = $request->input('image');
        $game->save();

        foreach ($request->get("stores") as $store) {
          $game_store = new GameStore;
          $game_store->store_id = $store;
          $game_store->game_id = $game->id;
          $game_store->save();
        }

        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $game = Game::find($id);

        $game->stores = DB::table('stores')
        ->join('game_store', 'stores.id', '=', 'game_store.store_id')
        ->where('game_store.game_id', '=', $id)->get();

        $game->ratings =
        Rating::join('users', 'users.id', '=', 'ratings.id')
        ->select('ratings.*', 'users.name as name')
        ->where('game_id', '=', $id)->get();

        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $game = Game::find($id);
        $game->stores = DB::table('stores')
        ->join('game_store', 'stores.id', '=', 'game_store.store_id')
        ->where('game_store.game_id', '=', $game->id)->get();

        return view('games.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $game = Game::find($id);
        $game->title = $request->input('title');
        $game->price = $request->input('price');
        $game->desc = $request->input('desc');
        $game->image = $request->input('image');
        $game->save();
        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Game::destroy($id);
        return redirect()->route('games.index');
    }
}
