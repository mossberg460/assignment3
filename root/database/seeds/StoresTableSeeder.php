<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('stores')->insert([
        [
          "name" => "Games AB",
          "city" => "Lund"
        ],
        [
          "name" => "Game King",
          "city" => "Malmoe"
        ],
        [
          "name" => "Games Queen",
          "city" => "Kalmar"
        ],
        [
          "name" => "Little Land Games",
          "city" => "Ljungby"
        ]
      ]);
    }
}
