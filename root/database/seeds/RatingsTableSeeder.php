<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('ratings')->insert([
        [
          "game_id" => 1,
          "name" => "Lars",
          "comment" => "Very nice",
          "rating" => 5
        ],
        [
          "game_id" => 2,
          "name" => "Lina",
          "comment" => "Not good at all",
          "rating" => 1
        ],
        [
          "game_id" => 3,
          "name" => "Pelle",
          "comment" => "Pretty nice",
          "rating" => 3
        ],
        [
          "game_id" => 4,
          "name" => "Lo",
          "comment" => "I like it quite much",
          "rating" => 4
        ],
        [
          "game_id" => 5,
          "name" => "John",
          "comment" => "Me likey",
          "rating" => 4
        ],
        [
          "game_id" => 6,
          "name" => "Ola",
          "comment" => "Not so good",
          "rating" => 2
        ],
        [
          "game_id" => 2,
          "name" => "Kalle",
          "comment" => "Yeah, pretty nice",
          "rating" => 3
        ],
        [
          "game_id" => 5,
          "name" => "Dovakhiin",
          "comment" => "Nah, not good",
          "rating" => 2
        ],
        [
          "game_id" => 3,
          "name" => "Kungen",
          "comment" => "I like turtles",
          "rating" => 3
        ],
        [
          "game_id" => 1,
          "name" => "Arthas",
          "comment" => "Best game ever",
          "rating" => 5
        ],
        [
          "game_id" => 4,
          "name" => "Viveka",
          "comment" => "Meh",
          "rating" => 2
        ]
      ]);
    }
}
