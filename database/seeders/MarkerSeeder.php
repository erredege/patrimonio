<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markers')->insert([
            'latitude' => '36.84170',
            'length' => '-2.46378',
            'name' => 'casaMariposas',
            'information' => 'xcsdvsdvsdvsdvsdvsdfvsdfv',
            'type' => '0',
            'start_point' => null,
            'radio' => null,
            'border_color' => null,
            'background_color' => null,
            'opacity' => null,
        ]);

        DB::table('markers')->insert([
            'latitude' => '36.83202562331118',
            'length' => '-2.4536694109363073',
            'name' => 'ciudadJardin',
            'information' => 'fesgvrdsgvfrbre',
            'type' => '1',
            'start_point' => null,
            'radio' => '250',
            'border_color' => '#5CC1FF',
            'background_color' => '#FAF77F',
            'opacity' => '0.25',
        ]);

    }
}
