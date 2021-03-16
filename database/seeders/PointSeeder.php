<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.84004520769246',
            'length' => '-2.4693843764004306',
            'marker_name' =>'alcazaba',
        ]);

        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.84002803484754',
            'length' => '-2.4709185999934937',
            'marker_name' =>'alcazaba',
        ]);

        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.841423315926306',
            'length' => '-2.474174801815135',
            'marker_name' =>'alcazaba',
        ]);

        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.84182686939978',
            'length' => '-2.4728712482028468',
            'marker_name' =>'alcazaba',
        ]);

        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.841444781590226',
            'length' => '-2.4713525126486005',
            'marker_name' =>'alcazaba',
        ]);

        DB::table('points')->insert([
            'name' => 'alcazaba',
            'latitude' => '36.8404369215936',
            'length' => '-2.4691562403203835',
            'marker_name' =>'alcazaba',
        ]);
    }
}
