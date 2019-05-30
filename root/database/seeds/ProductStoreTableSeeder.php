<?php

use Illuminate\Database\Seeder;

class ProductStoreTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('game_store')->insert([
        [
          "store_id" => 2,
          "game_id" => 1
        ],
        [
          "store_id" => 1,
          "game_id" => 1
        ],
        [
          "store_id" => 3,
          "game_id" => 1
        ],
        [
          "store_id" => 4,
          "game_id" => 1
        ],
        [
          "store_id" => 1,
          "game_id" => 2,
        ],
        [
          "store_id" => 3,
          "game_id" => 2
        ],
        [
          "store_id" => 4,
          "game_id" => 2
        ],
        [
          "store_id" => 1,
          "game_id" => 3
        ],
        [
          "store_id" => 3,
          "game_id" => 3
        ],
        [
          "store_id" => 2,
          "game_id" => 4
        ],
        [
          "store_id" => 4,
          "game_id" => 4
        ],
        [
          "store_id" => 1,
          "game_id" => 5
        ],
        [
          "store_id" => 4,
          "game_id" => 6
        ]
      ]);
    }
}
