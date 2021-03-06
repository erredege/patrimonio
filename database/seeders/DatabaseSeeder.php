<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
        $this->call(MarkerSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(PointSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(UserSeeder::class);
    }
}
