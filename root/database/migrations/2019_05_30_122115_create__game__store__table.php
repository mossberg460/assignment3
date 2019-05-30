<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStoreTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema::create('game_store', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('store_id')->unsigned();
          $table->bigInteger('game_id')->unsigned();
          $table->timestamps();
      });

      Schema::table('game_store', function($table){
        $table->foreign('store_id')->references('id')->on('stores');
        $table->foreign('game_id')->references('id')->on('games');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('game_store');
    }
}
