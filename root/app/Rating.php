<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {
  public function game_id() {
    return $this->hasOne('App\Game');
  }
}
