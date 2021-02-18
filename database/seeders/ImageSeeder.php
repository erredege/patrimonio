<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'description' => 'pruebaImg1',
            'route' => '../resources/imgs/imagen1.png',
            'order'=> '10'
        ]);
    }
}
