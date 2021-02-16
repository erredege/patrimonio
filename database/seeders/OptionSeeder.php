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
            'key' => 'dsdasfsf',
            'value' => 'fefcewfcewfcwe',
        ]);

        DB::table('options')->insert([
            'key' => 'jkhjkhkhjkfh',
            'value' => 'ytyuytutjyj',
        ]);
    }
}
