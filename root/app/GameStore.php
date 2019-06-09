<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStore extends Model {
  protected $table = 'game_store';

  public function getGamesAttribute() {
    return $this->belongsTo('App\Game')->get();
  }

  public function getStoresAttribute() {
    return $this->belongsTo('App\Store')->get();
  }

  public function store_id() {
    return $this->belongsTo('App\Store', 'id');
  }

  public function game_id() {
    return $this->belongsTo('App\Game', 'id');
  }
}
