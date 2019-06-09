<?php

namespace App\Http\Controllers;

use App\Game;
use App\Rating;
use App\Store;
use App\GameStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RatingsController extends Controller {
    public function __construct() {
      $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $ratings = Rating::join('games', 'games.id', '=', 'ratings.game_id')
      ->select('games.title', 'ratings.*')
      ->orderby('rating', 'comment')->get();  //desc ist för comment?

      return view('ratings/index', ['ratings' => $ratings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      $rating = new Rating();
      $rating->game_id = $request->input('id');

      return view('ratings/create', ['rating' => $rating]);
        //return view('ratings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $rating = new Rating;
      $rating->comment = $request->input('comment');
      $rating->rating = $request->input('rating');
      $rating->game_id = $request->input('game_id');
      $rating->id = Auth::id();
      $rating->save();
      return redirect()->route('ratings.show', ['id' => $rating->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      $rating =
      Rating::join('games', 'games.id', '=', 'ratings.game_id')
      ->where('ratings.id', '=', $id)->first();

      return view('ratings/show', ['rating' => $rating]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
      $rating = Rating::find($id);
      return view('ratings.edit', ['rating' => $rating]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
      $rating = new Rating;
      $rating->name = $request->input('name');
      $rating->comment = $request->input('comment');
      $rating->rating = $request->input('rating');
      $rating->save();
      return redirect()->route('ratings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Rating $obj) {
      Rating::destroy($obj->id);
      return redirect()->route('games.index');
    }
}
