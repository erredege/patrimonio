<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //Latitud de la provincia Almeria capital
        DB::table('options')->insert([
            'key' => 'latitude',
            'value' => '36.83999601823103',
        ]);
            //Longitud provincia Almeria capital
        DB::table('options')->insert([
            'key' => 'length',
            'value' => '-2.4650189820304593',
        ]);

        DB::table('options')->insert([
            'key' => 'urlMap',
            'value' => 'https://www.openstreetmap.org/#map=15/36.8391/-2.4602',
        ]);
            // Latitudes y longitudes para establecer limite de movimiento
        DB::table('options')->insert([
            'key' => 'latitudeSoutheast',
            'value' => '36.809803',
        ]);

        DB::table('options')->insert([
            'key' => 'lengthSoutheast',
            'value' => '-2.421262',
        ]);

        DB::table('options')->insert([
            'key' => 'latitudeNortheast',
            'value' => '36.867133',
        ]);

        DB::table('options')->insert([
            'key' => 'lengthNortheast',
            'value' => '-2.491599',
        ]);
        //////////////////////////////////////////////////////////////////

            //Zoom para los marcadores por defecto
        DB::table('options')->insert([
            'key' => 'markerZoom',
            'value' => '18',
        ]);

        DB::table('options')->insert([
            'key' => 'minZoom',
            'value' => '15',
        ]);

        DB::table('options')->insert([
            'key' => 'maxZoom',
            'value' => '18',
        ]);

        
    }
}
