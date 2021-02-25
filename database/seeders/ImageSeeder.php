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
        DB::table('iamges')->insert([
            'title' => 'cityName',
            'description' => 'Almeria',
            'route'=>file_get_contents('public/assets/images'.),
            'order'=>'10'
        ]);
    }
}
