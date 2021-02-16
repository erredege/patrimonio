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
            'id' => '1',
            'key' => 'dsdasfsf',
            'value' => 'fefcewfcewfcwe',
        ]);

        DB::table('options')->insert([
            'id' => '2',
            'key' => 'jkhjkhkhjkfh',
            'value' => 'ytyuytutjyj',
        ]);
    }
}
