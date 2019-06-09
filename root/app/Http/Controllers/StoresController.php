<?php

namespace App\Http\Controllers;

use App\Game;
use App\Rating;
use App\Store;
use App\GameStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoresController extends Controller {

    public function __construct() {
      $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $stores = Store::all();
      return view('stores.index', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      $store = new Store();

      return view('stores/create', ['store' => $store]);

        //return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $store = new Store;
      $store->name = $request->input('name');
      $store->city = $request->input('city');
      $store->save();
      return redirect()->route('stores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      $store = Store::find($id);

      $store->games = DB::table('games')
      ->join('game_store', 'games.id', '=', 'game_store.game_id')
      ->select('game_id as id', 'title')
      ->where('game_store.store_id', '=', $id)->get();

      return view('stores.show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $obj) {
      $store = $obj;
      return view('stores.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
      $store = Store::find($obj->id);
      $store->name = $request->input('name');
      $store->city = $request->input('city');
      $game->save();
      return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Store $obj) {
      Store::destroy($obj->id);
      return redirect()->route('stores.index');
    }
}
