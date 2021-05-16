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
        DB::table('user')->insert([
            'name' => 'rosendo',
            'email' => 'rosen@gmail.com',
            'password' => '123',
            'type' =>'1',
        ]);

        DB::table('user')->insert([
            'name' => 'ivan',
            'email' => 'ivan@gmail.com',
            'password' => '123',
            'type' =>'1',
        ]);

    }
}