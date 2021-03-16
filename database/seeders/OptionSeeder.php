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
            //mapa normal
            //'value' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            //mapa blanco y negro
            'value' => 'https://stamen-tiles-{s}.a.ssl.fastly.net/toner-lite/{z}/{x}/{y}{r}.png',
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
            'value' => '36.87224',
        ]);

        DB::table('options')->insert([
            'key' => 'lengthNortheast',
            'value' => '-2.49818',
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
        
        DB::table('options')->insert([
            'key' => 'cityName',
            'value' => 'Almeria',
        ]);
        
        DB::table('options')->insert([
            'key' => 'cityDescription',
            'value' => 'Esta aplicación se centra en 
                        una visita por la ciudad,
                        en donde podremos visitar ciertos 
                        puntos de interes, de los cuales se hara
                        una explicación',
        ]);

        DB::table('options')->insert([
            'key' => 'backgroundImage',
            'value' => 'assets/images/5340906345208.jpg',
        ]);
    }
}
