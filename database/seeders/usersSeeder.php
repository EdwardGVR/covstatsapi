<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Ususario 1",
                "email" => "user1@mail.com",
                "password" => "1234"
            ],
            [
                "name" => "Ususario 2",
                "email" => "user2@mail.com",
                "password" => "1234"
            ],
            [
                "name" => "Ususario 3",
                "email" => "user3@mail.com",
                "password" => "1234"
            ]
        ]);
    }
}
