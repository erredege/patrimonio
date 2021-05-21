<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rosendo',
            'email' => 'rosen@gmail.com',
            'password' => '$2y$10$NbN9CCNKYD45IQWHitQCB.uPGfRmJSknQq4QhQ/cwbW8MaaJEUia6',
            'type' =>'1',
        ]);

        DB::table('users')->insert([
            'name' => 'ivan',
            'email' => 'ivan@gmail.com',
            'password' => '$2y$10$NbN9CCNKYD45IQWHitQCB.uPGfRmJSknQq4QhQ/cwbW8MaaJEUia6',
            'type' =>'1',
        ]);

    }
}