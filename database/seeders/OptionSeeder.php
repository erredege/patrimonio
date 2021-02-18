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
        DB::table('options')->insert([
            'key' => 'minZoom',
            'value' => '15',
        ]);

        DB::table('options')->insert([
            'key' => 'latitude',
            'value' => '36.83999601823103',
        ]);
        DB::table('options')->insert([
            'key' => 'length',
            'value' => '-2.4650189820304593',
        ]);


    }
}
