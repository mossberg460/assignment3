<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(GamesTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(ProductStoreTableSeeder::class);
    }
}
